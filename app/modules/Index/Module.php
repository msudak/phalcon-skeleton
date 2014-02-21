<?php

use Phalcon\Mvc\ModuleDefinitionInterface;

namespace Index;

class Module implements ModuleDefinitionInterface
{

    public function registerAutoloaders()
    {

    }

    public function registerServices($di)
    {
        $dispatcher = $di->get('dispatcher');
        $dispatcher->setDefaultNamespace("Index\Controller");
        $di->set('dispatcher', $dispatcher);

        /**
         * Setting up the view component
         */
        $view = $di->get('view');
        $view->setViewsDir(__DIR__ . '/views/');
        $di->set('view', $view);

    }

}