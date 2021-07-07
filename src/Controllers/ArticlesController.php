<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;

class ArticlesController extends Controller {

    public function index()
    {
        $articles = Article::get();

        return $this->view('articles/index', [
            'articles' => $articles
        ]);
    }

    public function show()
    {
        if(!isset($_GET['id']) || $_GET['id'] == null || $_GET['id'] == '') {
            header('Location: /artykuly');
            exit;
        }

        $id = $_GET['id'];
        $article = Article::getOne($id);
        $author = User::getOne($article['user_id']);
        $category = Category::getOne($article['category_id']);

        return $this->view('articles/show', [
            'article' => $article,
            'author' => $author,
            'category' => $category,
        ]);
    }

    public function create()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }


        $categories = Category::get();
        return $this->view('articles/create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        $article = new Article();
        if($article->create($title, $text, $category, $status)) {
            header('Location: /artykuly/pokaz?id='.$article->id);
            exit;
        }

    }

    public function edit()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_GET['id'])) {
            header('Location: /articles');
            exit;
        }

        $id = $_GET['id'];

        $article = Article::getOne($id);
        $users = User::get();
        $categories = Category::get();

        return $this->view('articles/edit', [
            'article' => $article,
            'users' => $users,
            'categories' => $categories
        ]);
    }

    public function update()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_GET['id'])) {
            header('Location: /artykuly');
            exit;
        }

        $id = $_GET['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $user = $_POST['user'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        $article = new Article();
        $article->update($id, $title, $text, $user, $category, $status);

        header('Location: /artykuly/pokaz?id='.$id);
        exit;
    }

    public function destroy()
    {
        if(!User::isLoggedIn()) {
            header('Location: /logowanie');
            exit;
        }

        if(!isset($_GET['id'])) {
            header('Location: /articles');
            exit;
        }

        $id = $_GET['id'];

        $article = new Article();
        $article->destroy($id);

        header('Location: /artykuly');
        exit;
    }
}