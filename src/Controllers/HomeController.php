<?php

namespace App\Controllers;

class HomeController extends Controller {

    public function index() {
        
        return $this->view('home/index');
    }

    public function notFound() {
        
        return $this->view('404');
    }
}