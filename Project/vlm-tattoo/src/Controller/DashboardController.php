<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(Request $request): Response
    {
        //var_dump($request->request->get('form'));
        //$var = $request->query->get('')
        //var_dump($request->query->get('descripcion'));
        $var = $request->query->get('reserva');
        var_dump($request);
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Bienvenido a Dashboard',
        ]);
    }
}
