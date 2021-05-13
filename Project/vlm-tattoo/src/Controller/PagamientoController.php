<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagamientoController extends AbstractController
{
    #[Route('/pagamiento', name: 'pagamiento')]
    public function index(): Response
    {
        return $this->render('pagamiento/index.html.twig', [
            'controller_name' => 'PagamientoController',
        ]);
    }
}
