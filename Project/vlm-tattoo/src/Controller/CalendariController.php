<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Form\ClienteType;
use App\Repository\ReservaRepository;
use App\Controller\ReservaController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CalendariController extends AbstractController
{
    /**
     * @Route("/calendari", name="calendari")
     */
    public function index(ReservaRepository $reserva){

        $events = $reserva->findAll();
        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'talla' => $event->getTalla(),
                'imatge' => $event->getImagen(),
                'cliente_nombre' => $event->getCliente()->getNombre(),
                'cliente_apellido' => $event->getCliente()->getApellidos(),
                'cliente_telefono' => $event->getCliente()->getTelefono(),
                'cliente_email' => $event->getCliente()->getEmail(),
                'des' => $event->getDescripcion(),
                'title' => $event->getCliente()->getNombre(),
                'tamano' => $event->getTalla(),

                'start' => $event->getFechaInicio()->format('Y-m-d H:i:s'),
                'end' => $event->getFechaFinal()->format('Y-m-d H:i:s'),
                'backgroundColor' => '#007bff',
                'update' => '/reserva/edit/'. $event->getId(),
                'delete' => '/reserva/delete/'. $event->getId(),
            ];
        }
        $data = json_encode($rdvs);
        return $this->render('calendari/index.html.twig', compact('data'));
    }
}
