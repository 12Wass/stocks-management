<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProviderRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProviderRepository' shared autowired service.
     *
     * @return \App\Repository\ProviderRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProviderRepository'] = new \App\Repository\ProviderRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
