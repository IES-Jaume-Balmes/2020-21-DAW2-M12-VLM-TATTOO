<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerR4ODFVb/getFragment_Renderer_InlineService.php
namespace ContainerR4ODFVb;
=======
namespace ContainerHdy9UWs;

>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f:Project/vlm-tattoo/var/cache/dev/ContainerHdy9UWs/getFragment_Renderer_InlineService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_InlineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'InlineFragmentRenderer.php';

        $container->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($container->services['http_kernel'] ?? $container->getHttpKernelService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}
