<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYe833LP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYe833LP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYe833LP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYe833LP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYe833LP\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ye833LP',
    'container.build_id' => 'cc903227',
    'container.build_time' => 1638630579,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYe833LP');
