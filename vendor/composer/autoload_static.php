<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba1cf22b860de3613bae25fb8c13596d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fabio\\' => 6,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fabio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
    );

    public static $classMap = array (
        'Doctrine\\Common\\Annotations\\Annotation' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php',
        'Doctrine\\Common\\Annotations\\AnnotationException' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php',
        'Doctrine\\Common\\Annotations\\AnnotationReader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php',
        'Doctrine\\Common\\Annotations\\AnnotationRegistry' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php',
        'Doctrine\\Common\\Annotations\\Annotation\\Attribute' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attribute.php',
        'Doctrine\\Common\\Annotations\\Annotation\\Attributes' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attributes.php',
        'Doctrine\\Common\\Annotations\\Annotation\\Enum' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Enum.php',
        'Doctrine\\Common\\Annotations\\Annotation\\IgnoreAnnotation' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.php',
        'Doctrine\\Common\\Annotations\\Annotation\\Required' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Required.php',
        'Doctrine\\Common\\Annotations\\Annotation\\Target' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php',
        'Doctrine\\Common\\Annotations\\CachedReader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
        'Doctrine\\Common\\Annotations\\DocLexer' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
        'Doctrine\\Common\\Annotations\\DocParser' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
        'Doctrine\\Common\\Annotations\\FileCacheReader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/FileCacheReader.php',
        'Doctrine\\Common\\Annotations\\IndexedReader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php',
        'Doctrine\\Common\\Annotations\\PhpParser' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/PhpParser.php',
        'Doctrine\\Common\\Annotations\\Reader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
        'Doctrine\\Common\\Annotations\\SimpleAnnotationReader' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
        'Doctrine\\Common\\Annotations\\TokenParser' => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations/TokenParser.php',
        'Doctrine\\Common\\Lexer\\AbstractLexer' => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba1cf22b860de3613bae25fb8c13596d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba1cf22b860de3613bae25fb8c13596d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba1cf22b860de3613bae25fb8c13596d::$classMap;

        }, null, ClassLoader::class);
    }
}
