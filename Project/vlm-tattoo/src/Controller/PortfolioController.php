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
<<<<<<< HEAD
        $directoryTradicional = [
            'tradicional' => 'portfolio/tradicional/',
            'full-color' => 'portfolio/full-color/',
            'backwoorksoft' => 'portfolio/backwoorksoft/',
            'realismo' => 'portfolio/realismo/'
        ];
=======
        $directoryTradicional= 'portfolio/tradicional/';

        $dirintTradicional = dir($directoryTradicional);
>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df
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
<<<<<<< HEAD
       ]);
     }

}

=======
            'controller_name' => 'PortfolioController',

       ]);
     }
}
>>>>>>> b9758f1c1ea4c7bef1dccf059066a519f9c456df
