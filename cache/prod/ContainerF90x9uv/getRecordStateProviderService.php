<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordStateProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\DataProvider\RecordStateProvider' shared autowired service.
     *
     * @return \App\Data\DataProvider\RecordStateProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'RecordStateProvider.php';

        return $container->privates['App\\Data\\DataProvider\\RecordStateProvider'] = new \App\Data\DataProvider\RecordStateProvider(($container->privates['App\\Data\\LegacyHandler\\RecordHandler'] ?? $container->load('getRecordHandlerService')));
    }
}
