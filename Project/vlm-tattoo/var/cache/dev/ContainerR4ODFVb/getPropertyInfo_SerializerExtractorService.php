<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerR4ODFVb/getPropertyInfo_SerializerExtractorService.php
namespace ContainerR4ODFVb;
=======
namespace ContainerN3ePxNS;

>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f:Project/vlm-tattoo/var/cache/dev/ContainerN3ePxNS/getPropertyInfo_SerializerExtractorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_SerializerExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'property-info'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'SerializerExtractor.php';

        return $container->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? $container->load('getSerializer_Mapping_CacheClassMetadataFactoryService')));
    }
}