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

            $reserva->setFechaFinal($now); //arriba de fecha incial mes 1h o 2h depen de mida
            $em->persist($reserva);
            $em->flush();

            $this->addFlash('exito', Reserva::RESERVA);

            return $this->redirectToRoute('reserva');
        }
        return $this->render('reserva/index.html.twig', [
            'reserva' => $form->createView(),
        ]);
    }

    #[Route("/reserva/edit/{id}")]
    public function update(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reserva = $entityManager->getRepository(Reserva::class)->find($id);

        if (!$reserva) {
            throw $this->createNotFoundException(
                'No reserva found for id ' . $id
            );
        }

        $reserva->setDescripcion('');
        $entityManager->flush();

        return $this->redirectToRoute('calendari', [
            'id' => $reserva->getId()
        ]);
    }
    #[Route("/reserva-times")]
    public function reservaTimes(Request $request ): JsonResponse
    {
        $year = $request->query->get('year');
        $month = $request->query->get('month');
        $day = $request->query->get('day');

        $dateFilter = strtotime($month." ". $day." ". $year);

        $from = new \DateTime(date('Y-m-d' ,$dateFilter)." 00:00:00");
        $to   = new \DateTime(date('Y-m-d', $dateFilter)." 23:59:59");

        $reserves = $this->getDoctrine()->getManager()->getRepository(Reserva::class)->findByDateField($from, $to);
        $response = [['09', true], ['10', true], ['11', true], ['12', true], ['13', true], ['14', true],[ '15', true], ['16', true], ['17', true], ['18', true], ['19', true], ['20', true]];
        foreach ($reserves as $valor){
            $start = $valor->getFechaInicio()->format('H');
            $talla = $valor->getTalla();
            $hoursBusy = 1;
            if ($talla == 'Grande') $hoursBusy = 3;
            else if ($talla == 'Mediano') $hoursBusy = 2;
            $found = false;
            foreach ($response as $key => $hour){
                if ($hour[0] == $start || ($found && $hoursBusy > 0)) {
                    $found = true;
                    $response[$key][1] = false;
                    $hoursBusy--;
                }
            }
        }

        return new JsonResponse($response, 200);
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
