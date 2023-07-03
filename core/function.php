<?php

use core\Response;
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }

function authorize($condition, $status = Response::FORBIDDEN)
{
    if($condition != true)
    {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/'.$path);
}

function redirect($path)
{
    header("location:{$path}");
    exit();
}

function old($key, $default = '')
{
    return core\Session::get('old')[$key] ?? $default;
}

