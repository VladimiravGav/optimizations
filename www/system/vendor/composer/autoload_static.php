<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadbef1fddd74b3dcc3f52d6b51fd46d6
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\TemporaryDirectory\\' => 26,
            'Spatie\\Image\\' => 13,
            'Spatie\\ImageOptimizer\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\MimeTypeDetection\\' => 25,
            'League\\Glide\\' => 13,
            'League\\Flysystem\\' => 17,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\TemporaryDirectory\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/temporary-directory/src',
        ),
        'Spatie\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/image/src',
        ),
        'Spatie\\ImageOptimizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/image-optimizer/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\MimeTypeDetection\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/mime-type-detection/src',
        ),
        'League\\Glide\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/glide/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'v' => 
        array (
            'vendor' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
        'm' => 
        array (
            'modules' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
        'e' => 
        array (
            'expanding' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
        'c' => 
        array (
            'core' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadbef1fddd74b3dcc3f52d6b51fd46d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadbef1fddd74b3dcc3f52d6b51fd46d6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitadbef1fddd74b3dcc3f52d6b51fd46d6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitadbef1fddd74b3dcc3f52d6b51fd46d6::$classMap;

        }, null, ClassLoader::class);
    }
}