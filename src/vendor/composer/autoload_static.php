<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b4bb704d4f5e96a4cbe1a26f5920d6b
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opqclick\\Calculator\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opqclick\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b4bb704d4f5e96a4cbe1a26f5920d6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b4bb704d4f5e96a4cbe1a26f5920d6b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b4bb704d4f5e96a4cbe1a26f5920d6b::$classMap;

        }, null, ClassLoader::class);
    }
}
