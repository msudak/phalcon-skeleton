<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Admin\Controller;

use Application\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        $this->view->setMainView(MAIN_VIEW_PATH . 'admin');

        $this->view->title = $this->helper->translate('Admin panel Start page');
        $this->helper->title()->append($this->helper->translate('Start page'));

    }

    public function loginAction()
    {

    }

    public function logoutAction()
    {

    }

}
