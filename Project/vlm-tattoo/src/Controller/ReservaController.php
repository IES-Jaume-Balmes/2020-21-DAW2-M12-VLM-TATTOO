<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Form\ReservaType;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
class ReservaController extends AbstractController
{
    #[Route('/reserva', name: 'reserva')]
    public function index(Request $request, SluggerInterface $slugger): Response
    {
        $reserva = new Reserva();
        $form = $this->createForm(ReservaType::class, $reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imagen')->getData();

            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('img_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Ups! Ha ocurrido un error. 😢');
                }

                $reserva->setImagen($newFilename);
            }


            $cliente = $this->getUser();
            $em = $this->getDoctrine()->getManager();
            $reserva->setDeposito(20);
            $reserva->setCliente($cliente);
            $now = new \DateTime('now');

            $fecha_final = new \DateTime($reserva->getFechaInicio()->format('d-m-Y H:i:s'));

            if($reserva->getTalla() == "Pequeño"){
                $fecha_final->modify('+1 hours');
                $fecha_final->format('d-m-Y H:i:s');
            }elseif ($reserva->getTalla() == "Mediano"){
                $fecha_final->modify('+2 hours');
                $fecha_final->format('d-m-Y H:i:s');
            }elseif ($reserva->getTalla() == "Grande"){
                $fecha_final->modify('+3 hours');
                $fecha_final->format('d-m-Y H:i:s');
            }

            $reserva->setFechaFinal($fecha_final);
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('exito', Reserva::RESERVA);

            return $this->redirectToRoute('pagamiento');
        }
        return $this->render('reserva/index.html.twig', [
            'reserva' => $form->createView(),
        ]);
    }

    #[Route("/reserva-times")]
    public function reservaTimes(Request $request ): JsonResponse
    {
        $year = $request->query->get('year'); //crida per ayax
        $month = $request->query->get('month');
        $day = $request->query->get('day');

        $dateFilter = strtotime($month." ". $day." ". $year); // converteix un String en un tipu de Data

        $from = new \DateTime(date('Y-m-d' ,$dateFilter)." 00:00:00"); //dateTime inici Query
        $to   = new \DateTime(date('Y-m-d', $dateFilter)." 23:59:59");//dateTime final Query

        $reserves = $this->getDoctrine()->getManager()->getRepository(Reserva::class)->findByDateField($from, $to);
        $response = [['9', true], ['10', true], ['11', true], ['12', true], ['13', true], ['14', true],[ '15', true], ['16', true], ['17', true], ['18', true], ['19', true], ['20', true]];
        foreach ($reserves as $valor){ //recorr reserves del dia
            $start = $valor->getFechaInicio()->format('H');
            $talla = $valor->getTalla();
            $hoursBusy = 1;
            if ($talla == 'Grande') $hoursBusy = 3;
            else if ($talla == 'Mediano') $hoursBusy = 2;
            $found = false; // per defecte esta false
            foreach ($response as $key => $hour){
                if ($hour[0] == $start || ($found && $hoursBusy > 0)) { //si START coinsideix RESPONSE el posa FALSE
                    $found = true;
                    $response[$key][1] = false; // si es START coinsideix o es mes d'una hora, false
                    $hoursBusy--;
                }
            }
        }

        return new JsonResponse($response, 200); //te hores ocupades posades False per reserves d'aquell dia
    }

    #[Route("/reserva/delete/{id}")]
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reserva = $entityManager->getRepository(Reserva::class)->find($id);

        if (!$reserva) {
            throw $this->createNotFoundException(
                'No reserva found for id ' . $id
            );
        }

        $entityManager->remove($reserva);
        $entityManager->flush();

        return $this->redirectToRoute('reserva', [
            'id' => $reserva->getId()
        ]);
    }

}
