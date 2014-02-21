<?php

namespace Admin\Controller;

use Application\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        $this->view->setMainView(MAIN_VIEW_PATH . 'admin');

    }

    public function loginAction()
    {

    }

    public function logoutAction()
    {

    }

}
