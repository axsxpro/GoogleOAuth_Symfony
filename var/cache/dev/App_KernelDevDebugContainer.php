<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMtWE3aQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMtWE3aQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMtWE3aQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMtWE3aQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMtWE3aQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'MtWE3aQ',
    'container.build_id' => 'a640a1f6',
    'container.build_time' => 1707521279,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMtWE3aQ');
