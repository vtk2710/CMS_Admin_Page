<?php

namespace Login\Authorize;

use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

include 'vendor/autoload.php';

class Authorization
{
    function __construct()
    {
        $this->acl = new Acl();
        $this->acl->addRole(new Role('AD'));
        $this->acl->addRole(new Role('MN'));

        $this->acl->addResource(new Resource('admin'));
        $this->acl->addResource(new Resource('manager'));
        $this->acl->addResource(new Resource('test'));


        $this->acl->allow('MN', 'manager');
        $this->acl->allow('AD', 'admin');
        return $this->acl;
    }

    function checkAllowed($role, $resource, $action)
    {
        $check = $this->acl->isAllowed($role, $resource, $action);
        return $check;
    }
}
