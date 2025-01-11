<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckPackageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Upgrade\Steps\CheckPackage' autowired service.
     *
     * @return \App\Install\Service\Upgrade\Steps\CheckPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'UpgradeStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'Steps'.\DIRECTORY_SEPARATOR.'CheckPackage.php';

        $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\CheckPackage'] = function ($container) {
            return new \App\Install\Service\Upgrade\Steps\CheckPackage(($container->privates['App\\Install\\Service\\Upgrade\\UpgradePackageHandler'] ?? $container->load('getUpgradePackageHandlerService')));
        };

        return $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\CheckPackage']($container);
    }
}
