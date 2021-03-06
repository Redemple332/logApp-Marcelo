<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0aabe74f6ecd44af51a36e4fbb24e33b
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0aabe74f6ecd44af51a36e4fbb24e33b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0aabe74f6ecd44af51a36e4fbb24e33b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0aabe74f6ecd44af51a36e4fbb24e33b::$classMap;

        }, null, ClassLoader::class);
    }
}
