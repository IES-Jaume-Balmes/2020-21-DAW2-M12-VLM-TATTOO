<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\ContainerR4ODFVb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR4ODFVb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR4ODFVb.legacy');
=======
if (\class_exists(\ContainerN3ePxNS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN3ePxNS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN3ePxNS.legacy');
>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\ContainerR4ODFVb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR4ODFVb\App_KernelDevDebugContainer([
    'container.build_hash' => 'R4ODFVb',
    'container.build_id' => 'faf2197f',
    'container.build_time' => 1620915474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR4ODFVb');
=======
    \class_alias(\ContainerN3ePxNS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN3ePxNS\App_KernelDevDebugContainer([
    'container.build_hash' => 'N3ePxNS',
    'container.build_id' => '7d4f77c8',
    'container.build_time' => 1620913646,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN3ePxNS');
>>>>>>> 6ae457d271c7f3c314f2df70c39bf165840aa72f
