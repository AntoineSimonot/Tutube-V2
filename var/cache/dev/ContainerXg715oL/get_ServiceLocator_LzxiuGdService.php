<?php

namespace ContainerXg715oL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LzxiuGdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LzxiuGd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LzxiuGd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.LzxiuGd.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.LzxiuGd": it references class "App\\Entity\\Comment" but no such service exists.'],
            'video' => ['privates', '.errored..service_locator.LzxiuGd.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.LzxiuGd": it references class "App\\Entity\\Video" but no such service exists.'],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'video' => 'App\\Entity\\Video',
        ]);
    }
}
