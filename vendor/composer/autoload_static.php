<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee4125379dae4177f6e4118ec889b1cf
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee4125379dae4177f6e4118ec889b1cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee4125379dae4177f6e4118ec889b1cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}