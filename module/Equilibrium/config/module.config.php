<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Equilibrium\Controller\Equilibrium' => 'Equilibrium\Controller\EquilibriumController',
        ),
    ),
       
    'router' => array(
        'routes' => array(
            'equilibriuma' => array(
                'type'=> 'segment',
                'options' => array(
                    'route'=> '/equilibrium-index[-][:action][/:id]',
                        'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9,-]+',
                        ),
                    'defaults' => array(
                        'controller' => 'Equilibrium\Controller\Equilibrium',
                        'action'=> 'index',
                        ),
                ),
            ),             
        ),
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout_admin' => __DIR__ . '/../view/layout/layout_equilibrium.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'admin' => __DIR__ . '/../view',
        ),
    ),
);