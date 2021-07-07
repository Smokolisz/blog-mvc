<?php

session_start();

require_once realpath("vendor/autoload.php");
require_once "web.php";

new \App\Database\Database;

$url_route = explode('?', $_SERVER['REQUEST_URI'])[0];


$found = false;
foreach($routes as $route) {

    if($route['name'] == $url_route) {
        $found = true;
        $class = new $route['class'];

        $action = $route['method'];

        if(is_callable(array($class, $action))){
            $class->$action();
        } else {
            echo "Error, method not callable.";
            header('HTTP/1.1 500 Internal Server Error');
            exit(500);
        }
    }
}

// 404
if(!$found) {
    header('Location: /404');
    exit;
}
