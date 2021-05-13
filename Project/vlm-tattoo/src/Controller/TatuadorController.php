<?php

namespace App\Controller;

use App\Entity\Tatuador;
use App\Form\TatuadorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TatuadorController extends AbstractController
{
    #[Route('/tatuador', name: 'tatuador')]
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new Tatuador();
        $form = $this->createForm(TatuadorType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $user->setPassword($passwordEncoder->encodePassword($user, $form['password']->getData()));
            $em->flush();
            $this->addFlash('exito', 'Ya esta guardat');
            return $this->redirectToRoute('tatuador');
        }

        return $this->render('tatuador/index.html.twig', [
            'controller_name' => 'TatuadorController',
            'registro' => $form->createView(),
        ]);
    }
}
