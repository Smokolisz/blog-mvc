<?php

namespace App\Models;

use Exception;

class User extends Model {

    public static $tablename = 'users';

    public static function isLoggedIn()
    {
        if(isset($_SESSION['id']) && $_SESSION['id'] != null) {
            return true;
        }

        return false;
    }

    public function login($email, $password)
    {
        $stmt = self::$db->prepare('SELECT * FROM users WHERE email=:email');
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if(count($result) == 1) {
            $user = $result[0];
            if(password_verify($password, $user['password'])) {

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                return true;
            }
        }

        $_SESSION['loginErr'] = 'Niepoprawne dane';
        return false;
    }

    public function validateRegister($username, $email, $password)
    {
        //minimum password length
        if(strlen($password) < 6) {
            $_SESSION['passRegErr'] = 'Hasło musi mieć minimum 6 znaków';
            return false;
        }

        //is email free
        $stmt = self::$db->prepare('SELECT COUNT(email) as email FROM users WHERE email=:email');
        $stmt->execute(array('email' => $email));
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
        if($result['email'] > 0) {
            $_SESSION['emailRegErr'] = 'Ten adres email jest już zajęty';
            return false;
        }

        //is username free
        $stmt = self::$db->prepare('SELECT COUNT(username) as username FROM users WHERE username=:username');
        $stmt->execute(array('username' => $username));
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
        if($result['username'] > 0) {
            $_SESSION['usernameRegErr'] = 'Ta nazwa użytkownika jest już zajęta';
            return false;
        }


        return true;
    }

    public function register($username, $email, $password)
    {
        if(!$this->validateRegister($username, $email, $password)) {
            return false;
        }

        //after successful validation register user
        try {
            $stmt = self::$db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
            $stmt->execute(array('username' => $username, 'email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)));

            $_SESSION['id'] = self::$db->lastInsertId();
            $_SESSION['username'] = $username;
            
            return true;

        } catch(Exception $e) {
            echo $e;
        }

        return false;
    }
}