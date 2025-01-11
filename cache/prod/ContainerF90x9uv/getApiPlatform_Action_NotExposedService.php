<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotExposedService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.action.not_exposed' shared service.
     *
     * @return \ApiPlatform\Action\NotExposedAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'NotExposedAction.php';

        return $container->services['api_platform.action.not_exposed'] = new \ApiPlatform\Action\NotExposedAction();
    }
}
