<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller {

    public function login() {

        if(isset($_POST['email']) && isset($_POST['password'])) {
            $user = new User();
            if($user->login($_POST['email'], $_POST['password'])) {
                header('Location: /');
                exit;
            }
        }

        return $this->view('users/login');
    }

    public function register() {

        if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
            $user = new User();
            if($user->register($_POST['login'], $_POST['email'], $_POST['password'])) {
                header('Location: /');
                exit;
            }
        }

        return $this->view('users/register');
    }

    public function logout() {

        session_destroy();
        header('Location: /');
        exit;
    }

}