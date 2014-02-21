<?php

/**
 * ErrorReporting
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */
namespace Application\Mvc\Helper;

class ErrorReporting extends \Phalcon\Mvc\User\Component
{

    public function error404()
    {
        $this->getDi()->get('response')->setHeader(404, 'Not Found');
        include __DIR__ . '/../../../Index/views/error/404.phtml';
        exit;

    }

    public function error500()
    {
        $this->getDi()->get('response')->setHeader(500, 'Internal Server Error');
        include __DIR__ . '/../../../Index/views/error/500.phtml';
        exit;

    }

}
