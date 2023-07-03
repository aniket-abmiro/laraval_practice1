<?php

namespace core;
class Session
{
    public static function has($key)
    {
        return (bool) static::get($key);
    }
    public static function put($key,$value)
    {
        $_SESSION[$key]=$value;
    }

    public static function get($key, $default = null)
    {
        if(isset($_SESSION['_flash'][$key]))
        {
            return $_SESSION['_flash'][$key];
        }
        return $_SESSION[$key] ?? $default;
    }

    public static function flash($key, $value)
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash()
    {
        $_SESSION= [];
    }
}