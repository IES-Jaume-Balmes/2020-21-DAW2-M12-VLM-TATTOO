<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Form\ReservaType;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function reservaTimes(Request $request ): Response
    {

        $year = $request->query->get('year');
        $month = $request->query->get('month');
        $day = $request->query->get('day');
        //lol
        $entityManager = $this->getDoctrine()->getManager();
        $reserves = $entityManager->getRepository(Reserva::class)->findAll();
        //Es carreguen totes ses reserves :S
        $response = "[";
        foreach ($reserves as $valor){
            $date1 = $valor->getFechaInicio()->format('Y-m-d H:i:s');
            $date = explode(" ",$date1 )[0];
            $date = explode("-",$date );
            $dia = $date[2];
            $mes = $date[1];
            $any = $date[0];
            $hour = explode(" ",$date1)[1];
            $hour = explode(":",$hour );

            if ($dia == $day && $month == $mes && $year == $any){
                $response .= $hour[0];
            }

        }
        return new Response($response, 200);





    // select de reserves per dia que arriba amb ayax,
        //eliminar de s'array per defecte amb totes ses hores des dia que estan ocupades per select
        //return new Response('[9,10,11,12,13,14, 15, 16, 17, 18, 19, 20]', 200);

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
