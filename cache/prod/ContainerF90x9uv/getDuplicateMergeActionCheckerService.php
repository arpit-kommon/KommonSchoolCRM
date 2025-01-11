<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDuplicateMergeActionCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker' shared autowired service.
     *
     * @return \App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ActionAvailabilityChecker'.\DIRECTORY_SEPARATOR.'ActionAvailabilityCheckerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'ActionAvailabilityChecker'.\DIRECTORY_SEPARATOR.'Checkers'.\DIRECTORY_SEPARATOR.'DuplicateMergeActionChecker.php';

        return $container->privates['App\\Engine\\LegacyHandler\\ActionAvailabilityChecker\\Checkers\\DuplicateMergeActionChecker'] = new \App\Engine\LegacyHandler\ActionAvailabilityChecker\Checkers\DuplicateMergeActionChecker(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)));
    }
}
