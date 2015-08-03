<?php
return array(
    'router' => array(
        'routes' => array(
            'transfers' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/transfers',
                    'defaults' => array(
                        'controller' => 'Transfers\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Transfers\Controller\Index' => 'Transfers\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'transfers/index/index' => __DIR__ . '/../view/transfers/index/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
