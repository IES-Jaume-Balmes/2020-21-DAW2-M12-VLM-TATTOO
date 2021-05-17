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
        $directoryTradicional = [
            'tradicional' => 'portfolio/tradicional/',
            'full-color' => 'portfolio/full-color/',
            'backwoorksoft' => 'portfolio/backwoorksoft/',
            'realismo' => 'portfolio/realismo/'
        ];
        $imagesTradicional = [];

        foreach ($directoryTradicional as $cat => $directorio) {
            $dirintTradicional = dir($directorio);
            while (($archivo = $dirintTradicional->read()) != false) {
                if (strpos($archivo, 'jpg') || strpos($archivo, 'png') || strpos($archivo, 'jpeg')) {
                    $imagesTradicional[] = [
                        'src' => $directorio . $archivo,
                        'cat' => $cat
                    ];

                }
            }
            $dirintTradicional->close();
        }
        return $this->render('portfolio/index.html.twig', [
            'imagesTradicional' => $imagesTradicional,
       ]);
     }

}

