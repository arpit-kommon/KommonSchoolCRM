<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassUpdateBulkActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\BulkActions\MassUpdateBulkAction' shared autowired service.
     *
     * @return \App\Process\Service\BulkActions\MassUpdateBulkAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Process'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'BulkActions'.\DIRECTORY_SEPARATOR.'MassUpdateBulkAction.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'RecordMassUpdateServiceInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'MassUpdateHandler.php';

        $a = ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container));
        $b = new \App\Data\LegacyHandler\MassUpdateHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), $a, ($container->privates['App\\Data\\LegacyHandler\\RecordListHandler'] ?? $container->load('getRecordListHandlerService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $c = ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container));

        $b->setLogger($c);

        $container->privates['App\\Process\\Service\\BulkActions\\MassUpdateBulkAction'] = $instance = new \App\Process\Service\BulkActions\MassUpdateBulkAction($a, $b);

        $instance->setLogger($c);

        return $instance;
    }
}
