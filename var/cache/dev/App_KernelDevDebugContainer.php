<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPSmN4xb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPSmN4xb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPSmN4xb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPSmN4xb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPSmN4xb\App_KernelDevDebugContainer([
    'container.build_hash' => 'PSmN4xb',
    'container.build_id' => '6208da82',
    'container.build_time' => 1608676747,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPSmN4xb');