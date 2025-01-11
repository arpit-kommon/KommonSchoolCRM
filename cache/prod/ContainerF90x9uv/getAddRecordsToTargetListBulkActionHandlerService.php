<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddRecordsToTargetListBulkActionHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\LegacyHandler\AddRecordsToTargetListBulkActionHandler' shared autowired service.
     *
     * @return \App\Process\LegacyHandler\AddRecordsToTargetListBulkActionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'AddRecordsToTargetListBulkActionHandler.php';

        $container->privates['App\\Process\\LegacyHandler\\AddRecordsToTargetListBulkActionHandler'] = $instance = new \App\Process\LegacyHandler\AddRecordsToTargetListBulkActionHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)));

        $instance->setLogger(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        return $instance;
    }
}
