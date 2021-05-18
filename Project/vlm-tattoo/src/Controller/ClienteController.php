<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Form\ClienteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ClienteController extends AbstractController
{
    #[Route('/cliente', name: 'cliente')]
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new Cliente();
        $form = $this->createForm(ClienteType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
            $em->flush();
            $this->addFlash('exito', Cliente::CLIENTE_REGISTRADO);
            return $this->redirectToRoute('login');
        }
        return $this->render('cliente/index.html.twig', [
            'controller_name' => 'ClienteController',
            'MiVariable' => '[Hola esto es una prueba 🤔]',
            'registro' => $form->createView(),
        ]);
    }
}
