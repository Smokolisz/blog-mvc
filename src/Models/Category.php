<?php

namespace App\Models;

class Category extends Model {
    
    public static $tablename = 'categories';

    public $id;

    public function validate($name) {
        
        if(!is_string($name) || $name == null || $name == '') {
            return false;
        }

        return true;
    }

    public function create($name) {

        if(!$this->validate($name)) {
            return false;
        }

        $stmt = self::$db->prepare('INSERT INTO categories (name) VALUES (:name)');
        $stmt->execute(['name' => $name]);

        $this->id = self::$db->lastInsertId();

        return true;
    }

    public function update($name, $id) {

        if(!$this->validate($name)) {
            return false;
        }

        $stmt = self::$db->prepare('UPDATE categories SET name=:name WHERE id=:id');
        $stmt->execute(['name' => $name, 'id' => $id]);

        return true;
    }
    
    public function destroy($id) {
        $stmt = self::$db->prepare('DELETE FROM categories WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }
}