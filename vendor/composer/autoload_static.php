<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ced5b75c13ed34d99528394d26f4a78
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ced5b75c13ed34d99528394d26f4a78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ced5b75c13ed34d99528394d26f4a78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}