<?php

<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerB63Yi1g/getDebug_Security_Voter_VoteListenerService.php
namespace ContainerB63Yi1g;

=======
<<<<<<< HEAD:Project/vlm-tattoo/var/cache/dev/ContainerSZ0Dxyn/getDebug_Security_Voter_VoteListenerService.php
namespace ContainerSZ0Dxyn;
=======
namespace ContainerZrYRCRJ;

>>>>>>> 586789fc98509f524d916b90672fda6ec3c6e580:Project/vlm-tattoo/var/cache/dev/ContainerZrYRCRJ/getDebug_Security_Voter_VoteListenerService.php
>>>>>>> 530b90a55807a613df6cf3625a7ab7c37d276ffd:Project/vlm-tattoo/var/cache/dev/ContainerSZ0Dxyn/getDebug_Security_Voter_VoteListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Voter_VoteListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'VoteListener.php';

        return $container->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService()));
    }
}
