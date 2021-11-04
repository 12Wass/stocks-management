<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JeTwYn4Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.JeTwYn4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JeTwYn4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
