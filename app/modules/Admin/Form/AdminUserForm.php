<?php

/**
 * AdminUser
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Admin\Form;

use Application\Form\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\Email as ValidatorEmail;
use Phalcon\Validation\Validator\PresenceOf;

class AdminUserForm extends Form
{

    public function initialize()
    {
        $login = new Text('login', array(
            'required' => true,
        ));
        $login->setLabel($this->helper->translate('Login'));

        $email = new Email('email', array(
            'required' => true,
        ));
        $email->addValidator(new ValidatorEmail(array(
            'message' => $this->helper->translate('Email format required'),
        )));
        $email->addValidator(new PresenceOf(array(
            'message' => $this->helper->translate('Email is required'),
        )));
        $email->setLabel('Email');

        $password = new Password('password');
        $password->setLabel($this->helper->translate('Password'));

        $active = new Check('active');
        $active->setLabel($this->helper->translate('Active'));

        $submit = new Submit('submit', array(
            'class' => 'btn btn-primary',
        ));
        $submit->setDefault($this->helper->translate('Save'));

        $this->add($login);
        $this->add($email);
        $this->add($password);
        $this->add($active);
        $this->add($submit);

    }

    public function initAdding()
    {
        $password = $this->get('password');
        $password->setAttribute('required', true);
        $password->addValidator(new PresenceOf(array(
            'message' => $this->helper->translate('Password is required'),
        )));

        $this->get('submit')->setDefault($this->helper->translate('Add'));

    }

}
