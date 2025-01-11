<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppListStringsStateProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Languages\DataProvider\AppListStringsStateProvider' shared autowired service.
     *
     * @return \App\Languages\DataProvider\AppListStringsStateProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Languages'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'AppListStringsStateProvider.php';

        return $container->privates['App\\Languages\\DataProvider\\AppListStringsStateProvider'] = new \App\Languages\DataProvider\AppListStringsStateProvider(($container->privates['App\\Languages\\LegacyHandler\\AppListStringsHandler'] ?? $container->load('getAppListStringsHandlerService')));
    }
}
