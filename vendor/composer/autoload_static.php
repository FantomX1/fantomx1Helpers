<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64be7a916da410fc8ca8f64d39b5b5d0
{
    public static $prefixesPsr0 = array (
        'f' => 
        array (
            'fantomx1Helpers' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit64be7a916da410fc8ca8f64d39b5b5d0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
