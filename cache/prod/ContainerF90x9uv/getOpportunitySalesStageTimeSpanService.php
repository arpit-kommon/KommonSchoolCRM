<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpportunitySalesStageTimeSpanService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Opportunities\Statistics\OpportunitySalesStageTimeSpan' shared autowired service.
     *
     * @return \App\Module\Opportunities\Statistics\OpportunitySalesStageTimeSpan
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'StatisticsProviderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'StatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'DateTimeStatisticsHandlingTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'AuditQueryingTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'modules'.\DIRECTORY_SEPARATOR.'Opportunities'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'OpportunitySalesStageTimeSpan.php';

        return $container->privates['App\\Module\\Opportunities\\Statistics\\OpportunitySalesStageTimeSpan'] = new \App\Module\Opportunities\Statistics\OpportunitySalesStageTimeSpan(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
