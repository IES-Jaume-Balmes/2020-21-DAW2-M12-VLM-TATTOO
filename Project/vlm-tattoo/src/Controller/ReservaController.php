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

        if($form->isSubmitted() && $form->isValid()){
            $file = $form->get('imagen')->getData();

            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

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
            $reserva->setDeposito(0);
            $reserva->setCliente($cliente);
            $em->persist($reserva);
            $em->flush();
            $this->addFlash('exito', Reserva::RESERVA);
            return $this->redirectToRoute('dashboard');
        }
        return $this->render('reserva/index.html.twig', [
            'controller_name' => 'ReservaController',
            'MiVariable' => '[Hola esto es una prueba 🤔]',
            'reserva' => $form->createView(),
        ]);
    }
}
