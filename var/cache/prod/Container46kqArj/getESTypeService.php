<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getESTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ESType' shared autowired service.
     *
     * @return \App\Form\ESType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ESType'] = new \App\Form\ESType();
    }
}
