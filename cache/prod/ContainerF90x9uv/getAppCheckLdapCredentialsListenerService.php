<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppCheckLdapCredentialsListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\Ldap\AppCheckLdapCredentialsListener' shared autowired service.
     *
     * @return \App\Security\Ldap\AppCheckLdapCredentialsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ldap'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'CheckLdapCredentialsListener.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Ldap'.\DIRECTORY_SEPARATOR.'AppCheckLdapCredentialsListener.php';

        return $container->privates['App\\Security\\Ldap\\AppCheckLdapCredentialsListener'] = new \App\Security\Ldap\AppCheckLdapCredentialsListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Component\\Ldap\\Ldap' => #[\Closure(name: 'Symfony\\Component\\Ldap\\Ldap')] fn () => ($container->privates['Symfony\\Component\\Ldap\\Ldap'] ?? $container->load('getLdapService'))]));
    }
}
