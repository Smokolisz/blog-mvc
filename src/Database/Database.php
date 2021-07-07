<?php

namespace App\Database;

class Database {

    public static $db;

    public function __construct()
    {
        require "config.php";
        self::$db = new \PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
    }
}