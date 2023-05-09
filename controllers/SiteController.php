<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            "name" => "John",
            "surname" => "Doe"
        ];
        echo $this->render('home', $params);
    }
    public function contact()
    {
        echo  $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
    }
}