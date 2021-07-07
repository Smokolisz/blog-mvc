<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\User;

class CategoriesController extends Controller {

    public function index()
    {
        $categories = Category::get();

        return $this->view('categories/index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        return $this->view('categories/create');
    }

    public function store()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_POST['name'])) {
            header('Location: /kategorie/stworz');
            exit;
        }

        $name = $_POST['name'];

        $category = new Category();
        $category->create($name);

        header('Location: /kategorie');
        exit;
    }

    public function edit()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_GET['id'])) {
            header('Location: /kategorie');
            exit;
        }

        $id = $_GET['id'];

        $category = Category::getOne($id);

        return $this->view('categories/edit', [
            'category' => $category,
        ]);
    }

    public function update()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_POST['name'])) {
            header('Location: /kategorie/zapisz');
            exit;
        }

        $name = $_POST['name'];
        $id = $_GET['id'];

        $category = new Category();
        $category->update($name, $id);

        header('Location: /kategorie');
        exit;
    }

    public function destroy()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_GET['id'])) {
            header('Location: /kategorie/stworz');
            exit;
        }

        $id = $_GET['id'];

        $category = new Category();
        $category->destroy($id);

        header('Location: /kategorie');
        exit;
    }
}