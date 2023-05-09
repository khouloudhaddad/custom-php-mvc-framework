<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{

    public function login()
    {
        $this->setLayout('auth');
        echo $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        if($request->isPost()){
            echo "Submit data";
        }else{
            echo $this->render('register');
        }

    }

}