<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Nbgrp\OneloginSamlBundle\Controller\Login' shared service.
     *
     * @return \Nbgrp\OneloginSamlBundle\Controller\Login
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nbgrp'.\DIRECTORY_SEPARATOR.'onelogin-saml-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Login.php';

        return $container->services['Nbgrp\\OneloginSamlBundle\\Controller\\Login'] = new \Nbgrp\OneloginSamlBundle\Controller\Login(($container->privates['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)));
    }
}
