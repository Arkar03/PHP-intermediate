<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d5ed05d581a7287f2ed747f6568de53
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d5ed05d581a7287f2ed747f6568de53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d5ed05d581a7287f2ed747f6568de53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d5ed05d581a7287f2ed747f6568de53::$classMap;

        }, null, ClassLoader::class);
    }
}
