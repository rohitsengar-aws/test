<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1aee06be5fdde006cad967a109fa26be
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1aee06be5fdde006cad967a109fa26be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1aee06be5fdde006cad967a109fa26be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1aee06be5fdde006cad967a109fa26be::$classMap;

        }, null, ClassLoader::class);
    }
}
