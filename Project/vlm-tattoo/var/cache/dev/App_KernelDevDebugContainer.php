<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMlHay5W\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMlHay5W/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMlHay5W.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMlHay5W\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMlHay5W\App_KernelDevDebugContainer([
    'container.build_hash' => 'MlHay5W',
    'container.build_id' => '907ae154',
    'container.build_time' => 1622137818,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMlHay5W');
