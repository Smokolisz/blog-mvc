<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67c7bac45c5cf297e19a6e58e857da50
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ArticlesController' => __DIR__ . '/../..' . '/src/Controllers/ArticlesController.php',
        'App\\Controllers\\CategoriesController' => __DIR__ . '/../..' . '/src/Controllers/CategoriesController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/src/Controllers/Controller.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/src/Controllers/HomeController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/src/Controllers/UsersController.php',
        'App\\Database\\Database' => __DIR__ . '/../..' . '/src/Database/Database.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/src/Models/Article.php',
        'App\\Models\\Category' => __DIR__ . '/../..' . '/src/Models/Category.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/src/Models/Model.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67c7bac45c5cf297e19a6e58e857da50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67c7bac45c5cf297e19a6e58e857da50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67c7bac45c5cf297e19a6e58e857da50::$classMap;

        }, null, ClassLoader::class);
    }
}