<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerB63Yi1g/getCalendariControllerService.php
namespace ContainerB63Yi1g;

=======
<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerSZ0Dxyn/getCalendariControllerService.php
namespace ContainerSZ0Dxyn;
=======
namespace ContainerZrYRCRJ;

>>>>>>> 586789fc98509f524d916b90672fda6ec3c6e580:Project/vlm-tattoo/var/cache/dev/ContainerZrYRCRJ/getCalendariControllerService.php
>>>>>>> 530b90a55807a613df6cf3625a7ab7c37d276ffd:Project/vlm-tattoo/var/cache/dev/ContainerSZ0Dxyn/getCalendariControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendariControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CalendariController' shared autowired service.
     *
     * @return \App\Controller\CalendariController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CalendariController.php';

        $container->services['App\\Controller\\CalendariController'] = $instance = new \App\Controller\CalendariController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\CalendariController', $container));

        return $instance;
    }
}
