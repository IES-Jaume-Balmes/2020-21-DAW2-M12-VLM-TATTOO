<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGPk4pIn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGPk4pIn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGPk4pIn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGPk4pIn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGPk4pIn\App_KernelDevDebugContainer([
    'container.build_hash' => 'GPk4pIn',
    'container.build_id' => 'c8af5d0f',
    'container.build_time' => 1622049172,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGPk4pIn');
