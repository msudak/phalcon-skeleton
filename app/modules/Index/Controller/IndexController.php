<?php

namespace Index\Controller;

use Application\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        $this->helper->cacheExpire(120);

    }

}
