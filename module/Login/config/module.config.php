<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'login' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/login',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'login',
                    ],
                ],
            ],

            'manager' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/manager',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'manager',
                    ],
                ],
            ],

            'login-failed' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/failed',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'failed',
                    ],
                ],
            ],

            'admin' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/admin',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'admin',
                    ],
                ],
            ],

            'admin2' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/admin2',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'admin2',
                    ],
                ],
            ],

            'admin3' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/login/admin3',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'admin3',
                    ],
                ],
            ],

            'check' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/login/check',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'check',
                    ],
                ],
            ],

            'test' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/login/test',
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'test',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\LoginController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
