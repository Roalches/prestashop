<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNkx0zwb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNkx0zwb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerNkx0zwb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerNkx0zwb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerNkx0zwb\appProdProjectContainer(array(
    'container.build_hash' => 'Nkx0zwb',
    'container.build_id' => 'a21d07dc',
    'container.build_time' => 1536074777,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNkx0zwb');