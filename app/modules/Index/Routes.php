<?php

/**
 * Routes
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Index;

class Routes
{

    public function init($router)
    {
        /*$router->add('/', array(
            'module'     => 'index',
            'controller' => 'index',
            'action'     => 'index',
        ))->setName('home');
        $router->add('/ru/', array(
            'module'     => 'index',
            'controller' => 'index',
            'action'     => 'index',
            'lang'       => 'ru',
        ))->setName('home_ru');
        $router->add('/ru/', array(
            'module'     => 'index',
            'controller' => 'index',
            'action'     => 'index',
            'lang'       => 'ru',
        ))->setName('home_en');*/

        return $router;

    }

}