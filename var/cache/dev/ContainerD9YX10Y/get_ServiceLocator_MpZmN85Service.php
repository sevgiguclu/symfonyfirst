<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.mpZmN85' shared service.

return $this->privates['.service_locator.mpZmN85'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'advertisement' => ['privates', '.errored..service_locator.mpZmN85.App\\Entity\\Admin\\Advertisement', NULL, 'Cannot autowire service ".service_locator.mpZmN85": it references class "App\\Entity\\Admin\\Advertisement" but no such service exists.'],
], [
    'advertisement' => 'App\\Entity\\Admin\\Advertisement',
]);
