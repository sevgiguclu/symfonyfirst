<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4UGp6fz' shared service.

return $this->privates['.service_locator.4UGp6fz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'car' => ['privates', '.errored..service_locator.4UGp6fz.App\\Entity\\Car', NULL, 'Cannot autowire service ".service_locator.4UGp6fz": it references class "App\\Entity\\Car" but no such service exists.'],
    'commentRepository' => ['privates', 'App\\Repository\\Admin\\CommentRepository', 'getCommentRepositoryService.php', true],
    'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService.php', true],
], [
    'car' => 'App\\Entity\\Car',
    'commentRepository' => 'App\\Repository\\Admin\\CommentRepository',
    'imageRepository' => 'App\\Repository\\ImageRepository',
]);
