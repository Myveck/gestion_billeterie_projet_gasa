<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRxX6Lp9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRxX6Lp9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRxX6Lp9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRxX6Lp9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRxX6Lp9\App_KernelDevDebugContainer([
    'container.build_hash' => 'RxX6Lp9',
    'container.build_id' => 'ba1712d8',
    'container.build_time' => 1705909650,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRxX6Lp9');