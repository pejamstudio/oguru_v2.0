<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit805d734d42323b1e1250ab33b6e57812
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit805d734d42323b1e1250ab33b6e57812::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit805d734d42323b1e1250ab33b6e57812::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit805d734d42323b1e1250ab33b6e57812::$classMap;

        }, null, ClassLoader::class);
    }
}