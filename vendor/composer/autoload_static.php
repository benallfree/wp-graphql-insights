<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e12acd0d8d678fe7190ac4fe7971f29
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\Extensions\\Insights\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\Extensions\\Insights\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGraphQL\\Extensions\\Insights\\InstrumentSchema' => __DIR__ . '/../..' . '/src/InstrumentSchema.php',
        'WPGraphQL\\Extensions\\Insights\\Tracing' => __DIR__ . '/../..' . '/src/Tracing.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e12acd0d8d678fe7190ac4fe7971f29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e12acd0d8d678fe7190ac4fe7971f29::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e12acd0d8d678fe7190ac4fe7971f29::$classMap;

        }, null, ClassLoader::class);
    }
}
