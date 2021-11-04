<?php

namespace Container46kqArj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aqud7U5Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Aqud7U5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Aqud7U5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'authChecker' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
