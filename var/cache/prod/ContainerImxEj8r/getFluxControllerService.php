<?php

namespace ContainerImxEj8r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFluxControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FluxController' shared autowired service.
     *
     * @return \App\Controller\FluxController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FluxController'] = $instance = new \App\Controller\FluxController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\FluxController', $container));

        return $instance;
    }
}
