<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerSetupTransportsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SetupTransportsCommand.php';

        $container->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($container->privates['messenger.receiver_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), []);

        $instance->setName('messenger:setup-transports');
        $instance->setDescription('Prepare the required infrastructure for the transport');

        return $instance;
    }
}
