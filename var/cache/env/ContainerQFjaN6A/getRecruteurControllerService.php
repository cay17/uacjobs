<?php

namespace ContainerQFjaN6A;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecruteurControllerService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'App\Controller\recruteurController' shared autowired service.
     *
     * @return \App\Controller\recruteurController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\recruteurController.php';

        $container->services['App\\Controller\\recruteurController'] = $instance = new \App\Controller\recruteurController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\recruteurController', $container));

        return $instance;
    }
}
