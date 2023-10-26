<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit900f4ee621cef78a5828b0f61b8e3897
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit900f4ee621cef78a5828b0f61b8e3897', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit900f4ee621cef78a5828b0f61b8e3897', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit900f4ee621cef78a5828b0f61b8e3897::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
