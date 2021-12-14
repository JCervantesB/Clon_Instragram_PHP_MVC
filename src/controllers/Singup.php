<?php

namespace Usuario\ClonInstragram\controllers;

use Usuario\ClonInstragram\lib\Controller;

class Singup extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function register() {
        $username = $this->post('username');
        $password = $this->post('password');
        $profile = $this->file('profile');

        if(!is_null($username)) {
            
        }
    }
}