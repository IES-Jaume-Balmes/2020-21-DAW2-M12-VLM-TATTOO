<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PagamientoController extends AbstractController
{
    #[Route('/pagamiento', name: 'pagamiento')]
    public function index(): Response
    {
        return $this->render('pagamiento/index.html.twig', [
            'controller_name' => 'PagamientoController',
        ]);
    }


    #[Route('/success', name: 'success')]
    public function success(): Response
    {

        return $this->render('pagamiento/success.html.twig', [

        ]);
    }

    #[Route('/error', name: 'error')]
    public function error(): Response
    {
        return $this->render('pagamiento/error.html.twig', [

        ]);
    }


    #[Route('/create-checkout-session', name: 'checkout')]
    public function checkout(): Response
    {
        \Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success',[], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error',[], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return new JsonResponse(([ 'id' => $session->id ]));
    }
}
