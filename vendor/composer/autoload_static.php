<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72770934e6a68965d47cd4f761d57576
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72770934e6a68965d47cd4f761d57576::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72770934e6a68965d47cd4f761d57576::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72770934e6a68965d47cd4f761d57576::$classMap;

        }, null, ClassLoader::class);
    }
}
