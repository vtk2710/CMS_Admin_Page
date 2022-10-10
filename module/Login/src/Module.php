<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\MvcEvent;
use Zend\Permissions\Acl\Acl;

class Module implements ConfigProviderInterface
{
    const VERSION = '3.1.4dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    // public function onBoostrap(MvcEvent $e)
    // {
    //     $this->initAcl($e);
    //     $e->getApplication()->getEventManager()->attach('route', array($this, 'checkAcl'));
    // }

    // public function initAct(MvcEvent $e)
    // {
    //     $acl = new \Zend\Permissions\Acl\Acl();
    //     $role = include __DIR__ . '/../config/module.acl.roles.php';
    //     $allResources = array();
    //     foreach ($roles as $role => $resource) {
    //         $role = new \Zend\Permissions\Acl\Role\GenericRole($role);
    //         $acl->addRole($role);

    //         $allResources = array_merge($resources, $allResources);

    //         foreach ($resources as $resource) {
    //             if (!$acl->hasResource($resource)) {
    //                 $acl->addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
    //             }
    //         }

    //         foreach($allResources as $resource) {
    //             $acl->allow($role, $resource);
    //         }
    //     }

    //     $e->getViewModel()->acl = $acl;
    // }

    // public function checkAcl(MvcEvent $e) {
    //     $route = $e -> getRouteMatch() -> getMatchedRouteName();
    //     $userRole = 'guest';
    //     if(!$e -> getViewModel() -> acl -> isAllowed($userRole, $route)) {
    //         $response = $e -> getResponse();
    //         $response -> getHeaders() -> addHeaderLine('Location', $e -> getRequest() -> getBaseUrl() . '/login');
    //         $response -> setStatusCode(302);
    //     }
    // }
}
