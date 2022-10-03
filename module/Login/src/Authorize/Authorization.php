<?php

namespace Login\Authorize;

use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

include 'vendor/autoload.php';

class Authorization
{
    function checkAllowed($role, $resource, $action)
    {
        $acl = new Acl();
        $acl->addRole(new Role('AD'));
        $acl->addRole(new Role('MN'));
        $acl->addResource(new Resource('admin'));
        $acl->addResource(new Resource('manager'));

        $acl->allow('AD', null, 'admin');
        $acl->allow('MN', null, 'manager');

        $check = $acl->isAllowed($role, $resource, $action);
        return $check;
    }
}
