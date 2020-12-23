<?php

namespace ContainerQXD6qSV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResolveMediaObjectContentUrlSubscriberService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\ResolveMediaObjectContentUrlSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ResolveMediaObjectContentUrlSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'ResolveMediaObjectContentUrlSubscriber.php';

        return $container->privates['App\\EventSubscriber\\ResolveMediaObjectContentUrlSubscriber'] = new \App\EventSubscriber\ResolveMediaObjectContentUrlSubscriber(($container->privates['vich_uploader.storage.file_system'] ?? $container->getVichUploader_Storage_FileSystemService()));
    }
}
