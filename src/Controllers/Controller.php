<?php

namespace App\Controllers;

class Controller {

    public function view($view, $data=null)
    {
        $isLoggedIn = \App\Models\User::isLoggedIn();
        require_once __DIR__.'/../Views/layouts/template.php';
    }
}