<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TiendaController extends AbstractController
{
    #[Route('/tienda', name: 'tienda')]
    public function index(): Response
    {
        return $this->render('tienda/index.html.twig', [
            'controller_name' => 'TiendaController',
        ]);
    }
}
