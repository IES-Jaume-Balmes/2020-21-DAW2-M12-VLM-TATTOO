<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerR4ODFVb/getSluggerService.php
namespace ContainerR4ODFVb;
=======
namespace ContainerN3ePxNS;

>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f:Project/vlm-tattoo/var/cache/dev/ContainerN3ePxNS/getSluggerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSluggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'slugger' shared service.
     *
     * @return \Symfony\Component\String\Slugger\AsciiSlugger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        return $container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en');
    }
}
