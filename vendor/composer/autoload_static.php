<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a032c266864a9967d34bfadd054f157
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ImadGn\\SolidInPhp\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ImadGn\\SolidInPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a032c266864a9967d34bfadd054f157::$classMap;

        }, null, ClassLoader::class);
    }
}
