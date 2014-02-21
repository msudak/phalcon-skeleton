<?php

/**
 * Bootstrap
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */
class Bootstrap
{

    public static function run()
    {
        if (in_array(APPLICATION_ENV, array('development'))) {
            $debug = new \Phalcon\Debug();
            $debug->listen();
        }


        $config = include APPLICATION_PATH . '/config/application.php';


        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces($config->loader->namespaces->toArray());


        $di = new \Phalcon\DI\FactoryDefault();


        $db = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host"     => $config->database->host,
            "username" => $config->database->username,
            "password" => $config->database->password,
            "dbname"   => $config->database->dbname,
            "charset"  => $config->database->charset,
        ));
        $di->set('db', $db);


        $view = new \Phalcon\Mvc\View();

        $view->setLayoutsDir(APPLICATION_PATH . '/layouts/'); // директория с layout
        $view->setPartialsDir(APPLICATION_PATH . '/partials/'); // директория с partial
        $view->setLayout('main');

        $volt = new \Application\Mvc\ViewEngine\Volt($view, $di);
        $volt->setOptions(array('compiledPath' => APPLICATION_PATH . '/cache/volt/'));
        $volt->initCompiler();

        $view->registerEngines(array(
            ".volt" => $volt,
        ));
        $di->set('view', $view);


        $url = new \Phalcon\Mvc\Url();
        $url->setBasePath('/');
        $url->setBaseUri('/');


        $application = new \Phalcon\Mvc\Application($di);


        $application->registerModules($config->modules);


        echo $application->handle()->getContent();

    }

}
