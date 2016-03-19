<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class MicroKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new JmLeroux\AppBundle\AppBundle(),
        ];

        return $bundles;
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->mount('/', $routes->import(__DIR__ . '/config/routing.yml'));
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__) . '/var/cache/' . $this->environment;
    }

    public function getLogDir()
    {
        return dirname(__DIR__) . '/var/logs';
    }
}
