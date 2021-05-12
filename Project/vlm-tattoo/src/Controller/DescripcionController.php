<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DescripcionController extends AbstractController
{
    #[Route('/descripcion', name: 'descripcion')]
    public function index(): Response
    {
        return $this->render('descripcion/index.html.twig', [
            'controller_name' => 'DescripcionController',
        ]);
    }
}
