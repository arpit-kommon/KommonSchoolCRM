<?php

namespace ContainerF90x9uv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMetadataService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Nbgrp\OneloginSamlBundle\Controller\Metadata' shared service.
     *
     * @return \Nbgrp\OneloginSamlBundle\Controller\Metadata
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nbgrp'.\DIRECTORY_SEPARATOR.'onelogin-saml-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Metadata.php';

        return $container->services['Nbgrp\\OneloginSamlBundle\\Controller\\Metadata'] = new \Nbgrp\OneloginSamlBundle\Controller\Metadata();
    }
}
