<?php

namespace ContainerGl9wnij;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O0jxhruService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o0jxhru' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o0jxhru'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'blague' => ['privates', '.errored..service_locator.o0jxhru.App\\Entity\\Blagues', NULL, 'Cannot autowire service ".service_locator.o0jxhru": it needs an instance of "App\\Entity\\Blagues" but this type has been excluded in "config/services.yaml".'],
        ], [
            'blague' => 'App\\Entity\\Blagues',
        ]);
    }
}
