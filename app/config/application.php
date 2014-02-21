<?php

$env = array(
    'production'  => array(
        'database' => array(
            'host'     => 'localhost',
            'username' => '',
            'password' => '',
            'dbname'   => '',
            'charset'  => 'utf8',
        ),
    ),
    'development' => array(
        'database' => array(
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '111',
            'dbname'   => 'phalcon_skeleton',
            'charset'  => 'utf8',
        ),
    ),
);

$config = array(
    'loader'   => array(
        'namespaces' => array(
            'Application' => APPLICATION_PATH . '/modules/Application',
            'Index'       => APPLICATION_PATH . '/modules/Index',
            'Admin'       => APPLICATION_PATH . '/modules/Admin',
        ),
    ),
    'modules'  => array(
        'index' => array(
            'className' => 'Index\Module',
            'path'      => APPLICATION_PATH . '/modules/Index/Module.php'
        ),
        'admin' => array(
            'className' => 'Admin\Module',
            'path'      => APPLICATION_PATH . '/modules/Admin/Module.php'
        ),
    ),
    'database' => $env[APPLICATION_ENV]['database'],
);

return new \Phalcon\Config($config);
