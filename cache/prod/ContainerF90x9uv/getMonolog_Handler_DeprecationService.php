<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Handler_DeprecationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'monolog.handler.deprecation' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.handler.deprecation'] = $instance = new \Monolog\Handler\StreamHandler($container->getEnv('default:log.dir:env.logs:LOG_DIR').'/'.$container->getEnv('string:default:log.deprecation.default:DEPRECATION_LOG_FILE_NAME'), $container->getEnv('DEPRECATION_LOG_LEVEL'), true, NULL, false);

        $instance->pushProcessor(($container->privates['monolog.processor.psr_log_message'] ??= new \Monolog\Processor\PsrLogMessageProcessor()));

        return $instance;
    }
}
