<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit157fcceab15c900b3736bba6eb395086
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit157fcceab15c900b3736bba6eb395086::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}