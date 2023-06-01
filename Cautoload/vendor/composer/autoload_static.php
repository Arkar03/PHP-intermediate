<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7f8116f9ebf42be3178bb1a8a08b62f
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Filter' => __DIR__ . '/../..' . '/App/Controller/Sub/Filter/filter.php',
        'Helper' => __DIR__ . '/../..' . '/App/Controller/Sub/Helper.php',
        'Home' => __DIR__ . '/../..' . '/App/Controller/Home.php',
        'Index' => __DIR__ . '/../..' . '/App/index.php',
        'Start' => __DIR__ . '/../..' . '/App/Middleware/Start.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc7f8116f9ebf42be3178bb1a8a08b62f::$classMap;

        }, null, ClassLoader::class);
    }
}
