<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2qEL7x7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2qEL7x7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2qEL7x7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2qEL7x7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2qEL7x7\App_KernelDevDebugContainer([
    'container.build_hash' => '2qEL7x7',
    'container.build_id' => 'e90925e7',
    'container.build_time' => 1621264804,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2qEL7x7');
