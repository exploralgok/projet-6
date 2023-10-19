<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita5a5ac7c982dd5b9fc76d7c8362a0156
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

        spl_autoload_register(array('ComposerAutoloaderInita5a5ac7c982dd5b9fc76d7c8362a0156', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita5a5ac7c982dd5b9fc76d7c8362a0156', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita5a5ac7c982dd5b9fc76d7c8362a0156::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInita5a5ac7c982dd5b9fc76d7c8362a0156::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirea5a5ac7c982dd5b9fc76d7c8362a0156($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirea5a5ac7c982dd5b9fc76d7c8362a0156($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
