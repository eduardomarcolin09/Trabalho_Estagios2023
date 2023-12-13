<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d6f7fb61eb3650ba56b293a01bd1b93
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d6f7fb61eb3650ba56b293a01bd1b93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d6f7fb61eb3650ba56b293a01bd1b93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d6f7fb61eb3650ba56b293a01bd1b93::$classMap;

        }, null, ClassLoader::class);
    }
}