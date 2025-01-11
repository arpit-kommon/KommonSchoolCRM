<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AppSecretGeneratorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'security.app_secret_generator' shared autowired service.
     *
     * @return \App\Security\AppSecretGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'AppSecretGenerator.php';

        return $container->services['security.app_secret_generator'] = new \App\Security\AppSecretGenerator();
    }
}
