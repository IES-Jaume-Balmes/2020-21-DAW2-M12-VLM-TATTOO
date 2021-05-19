<?php

namespace ContainerRCW5v2m;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_User_Provider_Concrete_AllUsersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user.provider.concrete.all_users' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\ChainUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'ChainUserProvider.php';

        return $container->privates['security.user.provider.concrete.all_users'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService'));
            yield 1 => ($container->privates['security.user.provider.concrete.tatuador_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_TatuadorProviderService'));
        }, 2));
    }
}
