<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQQLA2K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQQLA2K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYQQLA2K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYQQLA2K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYQQLA2K\App_KernelDevDebugContainer([
    'container.build_hash' => 'YQQLA2K',
    'container.build_id' => 'd8d2558c',
    'container.build_time' => 1621884535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQQLA2K');
