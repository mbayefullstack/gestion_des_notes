<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e3141674c158046512286942a3fced3
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Validator\\' => 10,
        ),
        'R' => 
        array (
            'Route\\' => 6,
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
        'Validator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/validations',
        ),
        'Route\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/routers',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/modeles',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e3141674c158046512286942a3fced3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e3141674c158046512286942a3fced3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e3141674c158046512286942a3fced3::$classMap;

        }, null, ClassLoader::class);
    }
}
