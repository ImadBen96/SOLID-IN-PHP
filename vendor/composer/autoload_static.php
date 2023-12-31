<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a032c266864a9967d34bfadd054f157
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Players\\' => 8,
        ),
        'I' => 
        array (
            'Interfaces\\' => 11,
            'ImadGn\\SolidInPhp\\' => 18,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Players\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Players',
        ),
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interfaces',
        ),
        'ImadGn\\SolidInPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$classMap;

        }, null, ClassLoader::class);
    }
}
