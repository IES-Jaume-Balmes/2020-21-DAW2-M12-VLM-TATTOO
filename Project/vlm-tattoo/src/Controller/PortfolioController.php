<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{


    #[Route('/portfolio', name: 'portfolio')]
    public function index(): Response
    {
        $directoryTradicional= 'portfolio/tradicional/';

        $dirintTradicional = dir($directoryTradicional);
        $imagesTradicional = [];
       while (($archivo = $dirintTradicional->read()) != false)
        {
           if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
                $imagesTradicional[] = $directoryTradicional. $archivo;
           }
        }
        $dirintTradicional->close();

        return $this->render('portfolio/index.html.twig', [
            'imagesTradicional' => $imagesTradicional,
            'controller_name' => 'PortfolioController',

       ]);
     }
}
