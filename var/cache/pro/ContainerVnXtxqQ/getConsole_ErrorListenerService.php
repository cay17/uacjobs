<?php

namespace ContainerVnXtxqQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_ErrorListenerService extends App_KernelProDebugContainer
{
    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushHandler(($container->privates['monolog.handler.null_internal'] ?? ($container->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())));

        return $container->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }
}
