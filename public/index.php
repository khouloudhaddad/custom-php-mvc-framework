<?php
/**
 * User: Khouloud Haddad Amamou
 */

require __DIR__ . '/../vendor/autoload.php';
use app\core\Application;


$app= new Application();
$app->router->get('/',  function(){
    return "Helllo";
});

$app->router->get('/contact',  'contact');

$app->run();