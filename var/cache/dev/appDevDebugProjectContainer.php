<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWebc8hl\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWebc8hl/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWebc8hl.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWebc8hl\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerWebc8hl\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Webc8hl',
    'container.build_id' => '4a841324',
    'container.build_time' => 1519650709,
));
