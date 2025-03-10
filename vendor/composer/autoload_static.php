<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65edbd08b25d76d1eca19aab4bb9122b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65edbd08b25d76d1eca19aab4bb9122b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65edbd08b25d76d1eca19aab4bb9122b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65edbd08b25d76d1eca19aab4bb9122b::$classMap;

        }, null, ClassLoader::class);
    }
}
