<?php

namespace ContainerTPGZLA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZUQ8hHYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zUQ8hHY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zUQ8hHY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categorie' => ['privates', '.errored..service_locator.zUQ8hHY.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.zUQ8hHY": it needs an instance of "App\\Entity\\Categories" but this type has been excluded in "config/services.yaml".'],
        ], [
            'categorie' => 'App\\Entity\\Categories',
        ]);
    }
}
