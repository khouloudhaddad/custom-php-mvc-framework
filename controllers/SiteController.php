<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{

    public function home()
    {
        $params = [
            "name" => "John",
            "surname" => "Doe"
        ];
        echo  Application::$app->router->renderView('home', $params);
    }
    public function contact()
    {
        echo  Application::$app->router->renderView('contact');
    }
    public function handleContact()
    {
        echo 'handling submitted data';
    }
}