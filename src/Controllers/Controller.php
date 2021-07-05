<?php

namespace App\Controllers;

use App\Database\Database;

class Controller extends Database {

    public function view($view, $data=null) {
        $isLoggedIn = \App\Models\User::isLoggedIn();
        require_once __DIR__.'/../Views/layouts/template.php';
    }
}