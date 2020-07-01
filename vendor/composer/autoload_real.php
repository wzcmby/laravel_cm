<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6d1f51396174f8992f37d84d53ca2f7f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            //var_dump($class);
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        //这里只是注册
        spl_autoload_register(array('ComposerAutoloaderInit6d1f51396174f8992f37d84d53ca2f7f', 'loadClassLoader'), true, true);
        //new 的时候会自动执行 spl_autoload_register
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        //var_dump($loader);exit();
        spl_autoload_unregister(array('ComposerAutoloaderInit6d1f51396174f8992f37d84d53ca2f7f', 'loadClassLoader'));
        //die('PHP_VERSION_ID'.PHP_VERSION_ID);
        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            //echo "1";exit();
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\Composer\Autoload\ComposerStaticInit6d1f51396174f8992f37d84d53ca2f7f::getInitializer($loader));
        } else {
            //echo "2";exit();
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
            $includeFiles = Composer\Autoload\ComposerStaticInit6d1f51396174f8992f37d84d53ca2f7f::$files;
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire6d1f51396174f8992f37d84d53ca2f7f($fileIdentifier, $file);
        }

        return $loader;
    }
}

function composerRequire6d1f51396174f8992f37d84d53ca2f7f($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
