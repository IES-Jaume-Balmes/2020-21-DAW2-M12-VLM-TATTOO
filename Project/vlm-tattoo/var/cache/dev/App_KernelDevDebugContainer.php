<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB63Yi1g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB63Yi1g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB63Yi1g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB63Yi1g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB63Yi1g\App_KernelDevDebugContainer([
    'container.build_hash' => 'B63Yi1g',
    'container.build_id' => '78a43320',
    'container.build_time' => 1621345479,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB63Yi1g');
