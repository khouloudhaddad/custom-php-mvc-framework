<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{

    public function home()
    {
        echo  Application::$app->router->renderView('home');
    }
    public function contact()
    {
        echo  Application::$app->router->renderView('contact');
    }
    public function handleContact()
    {
        echo  'handling submitted data';
    }
}