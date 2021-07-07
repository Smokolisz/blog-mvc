<?php

namespace App\Models;

use App\Database\Database;

class Model extends Database {
    
    public static $tablename;

    public static function get()
    {
        $stmt = self::$db->prepare('SELECT * FROM '.static::$tablename);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getOne($id)
    {
        $stmt = self::$db->prepare('SELECT * FROM '.static::$tablename.' WHERE id=:id LIMIT 1');
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if($result != null) {
            $result = $result[0];
        }

        return $result;
    }
}