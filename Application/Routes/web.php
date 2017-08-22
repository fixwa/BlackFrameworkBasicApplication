<?php

$routes = array(
    'home' => array('method' => 'GET|POST',
        'url' => '/',
        'target' => array(
            'module' => 'Main',
            'controller' => 'HomeController',
            'action' => 'indexAction'
        )
    ),
    'about' => array('method' => 'GET',
        'url' => '/about',
        'target' => array(
            'module' => 'Main',
            'controller' => 'HomeController',
            'action' => 'aboutAction'
        )
    ),

    'error' => array('method' => 'GET|POST',
        'url' => '/error',
        'target' => array(
            'module' => 'Main',
            'controller' => 'ErrorController',
            'action' => 'indexAction'
        )
    ),
);

return $routes;
