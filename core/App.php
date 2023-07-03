<?php

namespace core;
class App{
    protected static $container;
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public function bind($key, $resolver)
    {
        static::container()->bind($key,$resolver);
    }

    public static function resolve($key)
    {
        // require base_path('bootstrap.php');
        return static::container()->resolve($key);
    }
}