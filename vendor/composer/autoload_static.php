<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cd09125d32c298a17132058baa42cd5
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nusagates\\Laraipaymu\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nusagates\\Laraipaymu\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cd09125d32c298a17132058baa42cd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cd09125d32c298a17132058baa42cd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cd09125d32c298a17132058baa42cd5::$classMap;

        }, null, ClassLoader::class);
    }
}
