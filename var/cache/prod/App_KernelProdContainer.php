<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container46kqArj\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container46kqArj/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container46kqArj.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container46kqArj\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container46kqArj\App_KernelProdContainer([
    'container.build_hash' => '46kqArj',
    'container.build_id' => '6424dd4e',
    'container.build_time' => 1617350324,
], __DIR__.\DIRECTORY_SEPARATOR.'Container46kqArj');
