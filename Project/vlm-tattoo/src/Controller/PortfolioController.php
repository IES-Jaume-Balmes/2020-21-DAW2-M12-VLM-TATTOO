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
        // ...


        // get the user information and notifications somehow
        $userFirstName = 'david';
        //$webPath = $this->get('kernel')->getProjectDir() . '/public/';
        $directory= 'img/';
        $dirint = dir($directory);
        $images = [];

        while (($archivo = $dirint->read()) != false)
        {
            if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')){
                $images[] = $directory. $archivo;

            }
        }
        $dirint->close();

        // the template path is the relative file path from `templates/`
=======
>>>>>>> 8e364048dfe7aca3c6aba07233dabd335d627957
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
