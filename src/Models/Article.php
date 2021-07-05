<?php

namespace App\Models;

class Article extends Model {

    public static $tablename = 'articles';

    public $id;
    
    public function validate($title, $text, $category, $status) {
        
        if(!is_string($title) || !is_string($text) || $category==null || $status == null) {
            return false;
        }

        return true;
    }

    public function create($title, $text, $category, $status) {

        if(!$this->validate($title, $text, $category, $status)) {
            return false;
        }

        $stmt = self::$db->prepare('INSERT INTO articles (user_id, category_id, title, text, status) VALUES (:user_id, :category_id, :title, :text, :status)');
        $stmt->execute(['user_id' => $_SESSION['id'], 'category_id' => $category, 'title' => $title, 'text' => $text, 'status' => $status]);

        $this->id = self::$db->lastInsertId();

        return true;
    }

    public function update($id, $title, $text, $user, $category, $status) {

        if(!$this->validate($title, $text, $category, $status)) {
            return false;
        }

        $stmt = self::$db->prepare('UPDATE articles SET user_id=:user_id, category_id=:category_id, title=:title, text=:text, status=:status WHERE id=:id');
        $stmt->execute(['user_id' => $user, 'category_id' => $category, 'title' => $title, 'text' => $text, 'status' => $status, 'id' => $id]);

        $this->id = self::$db->lastInsertId();

        return true;
    }

    public function destroy($id) {
        $stmt = self::$db->prepare('DELETE FROM articles WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }
}