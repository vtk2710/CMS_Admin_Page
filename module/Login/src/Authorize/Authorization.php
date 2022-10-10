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
        
        return $this->acl->addRole(new Role('AD'))
                         ->addRole(new Role('MN'))
                         ->addResource(new Resource('admin'))
                         ->addResource(new Resource('manager'))
                         ->addResource(new Resource('test'))
                         ->allow('MN', 'manager')
                         ->allow('AD', 'admin');
    }

    public function checkAdminAllowed($role)
    {
        return $this->acl->isAllowed($role, 'admin', 'admin');
    }

    public function checkManagerAllowed($role) 
    {
        return $this->acl->isAllowed($role, 'manager', 'manager');
    }
}
