<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerR4ODFVb/getClienteControllerService.php
namespace ContainerR4ODFVb;
=======
namespace ContainerN3ePxNS;

>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f:Project/vlm-tattoo/var/cache/dev/ContainerN3ePxNS/getClienteControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClienteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ClienteController' shared autowired service.
     *
     * @return \App\Controller\ClienteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ClienteController.php';

        $container->services['App\\Controller\\ClienteController'] = $instance = new \App\Controller\ClienteController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ClienteController', $container));

        return $instance;
    }
}
