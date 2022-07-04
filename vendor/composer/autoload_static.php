<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4598d4c218abd4d5861b9ee867cff17
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ns\\Mypakages\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ns\\Mypakages\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4598d4c218abd4d5861b9ee867cff17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4598d4c218abd4d5861b9ee867cff17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf4598d4c218abd4d5861b9ee867cff17::$classMap;

        }, null, ClassLoader::class);
    }
}
