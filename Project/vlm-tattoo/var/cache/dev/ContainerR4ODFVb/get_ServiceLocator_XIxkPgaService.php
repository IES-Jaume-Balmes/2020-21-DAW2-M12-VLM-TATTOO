<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerR4ODFVb/get_ServiceLocator_XIxkPgaService.php
namespace ContainerR4ODFVb;
=======
namespace ContainerN3ePxNS;

>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f:Project/vlm-tattoo/var/cache/dev/ContainerN3ePxNS/get_ServiceLocator_XIxkPgaService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XIxkPgaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xIxkPga' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xIxkPga'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reserva' => ['privates', 'App\\Repository\\ReservaRepository', 'getReservaRepositoryService', true],
        ], [
            'reserva' => 'App\\Repository\\ReservaRepository',
        ]);
    }
}