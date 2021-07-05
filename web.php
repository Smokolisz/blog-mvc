<?php

$routes = [
    [
        'name' => '/', 
        'class' => \App\Controllers\HomeController::class, 
        'method' => 'index',
    ],
    [
        'name' => '/logowanie', 
        'class' => \App\Controllers\UsersController::class, 
        'method' => 'login',
    ],
    [
        'name' => '/rejestracja', 
        'class' => \App\Controllers\UsersController::class, 
        'method' => 'register',
    ],
    [
        'name' => '/wyloguj', 
        'class' => \App\Controllers\UsersController::class, 
        'method' => 'logout',
    ],
    [
        'name' => '/artykuly', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'index',
    ],
    [
        'name' => '/artykuly/pokaz', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'show',
    ],
    [
        'name' => '/artykuly/stworz', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'create',
    ],
    [
        'name' => '/artykuly/zapisz', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'store',
    ],
    [
        'name' => '/artykuly/edytuj', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'edit',
    ],
    [
        'name' => '/artykuly/update', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'update',
    ],
    [
        'name' => '/artykuly/usun', 
        'class' => \App\Controllers\ArticlesController::class, 
        'method' => 'destroy',
    ],
    [
        'name' => '/kategorie', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'index',
    ],
    [
        'name' => '/kategorie/stworz', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'create',
    ],
    [
        'name' => '/kategorie/zapisz', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'store',
    ],
    [
        'name' => '/kategorie/edytuj', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'edit',
    ],
    [
        'name' => '/kategorie/update', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'update',
    ],
    [
        'name' => '/kategorie/usun', 
        'class' => \App\Controllers\CategoriesController::class, 
        'method' => 'destroy',
    ],
    [
        'name' => '/404', 
        'class' => \App\Controllers\HomeController::class, 
        'method' => 'notFound'
    ],
];