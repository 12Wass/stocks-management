<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFluxRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FluxRepository' shared autowired service.
     *
     * @return \App\Repository\FluxRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FluxRepository'] = new \App\Repository\FluxRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
