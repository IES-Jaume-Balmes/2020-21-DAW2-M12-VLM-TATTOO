<?php

namespace App\Controller;

use App\Entity\Reserva;
use App\Form\ReservaType;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservaController extends AbstractController
{
    #[Route('/reserva', name: 'reserva')]
    public function index(Request $request): Response
    {
        $reserva = new Reserva();
        $form = $this->createForm(ReservaType::class, $reserva);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //$File = $form['imagen']->getData();
            $file = $reserva->getImagen();
            $fileName = $file->guessExtension();
            $file->move($this->getParameter('img_directory'), $fileName);
            $reserva->setImagen($fileName);
            return new Response("User photo is successfully uploaded.");

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
