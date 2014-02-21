<?php

/**
 * Controller
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Application\Mvc;

class Controller extends \Phalcon\Mvc\Controller
{

    public function redirect($url, $code = 302)
    {
        switch ($code) {
            case 301 :
                header('HTTP/1.1 301 Moved Permanently');
                break;
            case 302 :
                header('HTTP/1.1 302 Moved Temporarily');
                break;
        }
        header('Location: ' . $url);
        exit;

    }

    public function returnJSON($response)
    {
        $this->response->setContentType('application/json', 'UTF-8');
        $this->view->disable();
        echo json_encode($response);
        exit;

    }

}