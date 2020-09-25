<?php

namespace Container7mAnE2A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommandesController' shared autowired service.
     *
     * @return \App\Controller\CommandesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\CommandesController.php';

        $container->services['App\\Controller\\CommandesController'] = $instance = new \App\Controller\CommandesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\CommandesController', $container));

        return $instance;
    }
}
