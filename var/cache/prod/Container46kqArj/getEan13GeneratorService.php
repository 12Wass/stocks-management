<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEan13GeneratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\Ean13Generator' shared autowired service.
     *
     * @return \App\Service\Ean13Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\Ean13Generator'] = new \App\Service\Ean13Generator();
    }
}