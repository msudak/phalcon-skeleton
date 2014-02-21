<?php

$env = array(
    'production'  => array(
        'database' => array(
            'host'     => 'localhost',
            'username' => '',
            'password' => '',
            'name'     => '',
            'charset'  => 'utf8',
        ),
    ),
    'development' => array(
        'database' => array(
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '111',
            'name'     => 'petroline',
            'charset'  => 'utf8',
        ),
    ),
);

$config = array(
    'loader'   => array(
        'namespaces' => array(
            'Application' => APPLICATION_PATH . '/modules/Application',
            'Admin'       => APPLICATION_PATH . '/modules/Admin',
        ),
    ),
    'modules'  => array(
        'index' => array(
            'className' => 'Index\Module',
            'path'      => APPLICATION_PATH . '/modules/Index/Module.php'
        ),
    ),
    'database' => array(
        $env[APPLICATION_ENV]['database'],
    ),
);

return new \Phalcon\Config($config);
