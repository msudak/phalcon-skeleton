<?php

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

chdir(dirname(__DIR__));

if (APPLICATION_ENV == 'development') {
    $appDir = __DIR__ . '/../app';
} else {
    $appDir = __DIR__ . '/../private/app';
}
define(APPLICATION_PATH, $appDir);

include APPLICATION_PATH . '/config/defines.php';

require_once APPLICATION_PATH . '/Bootstrap.php';
Bootstrap::run();