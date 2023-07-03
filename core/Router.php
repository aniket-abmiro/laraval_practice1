<?php


namespace core;
// use core\Middleware\Auth;
// use core\Middleware\Guest;
use core\Middleware\Middleware;
class Router
{

    protected $routes = [];

    public function add($method,$uri,$controller)
    {
        $this->routes[] =[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>$method,
            'middleware' => null
        ];
        return $this;
    }
    Public function get($uri,$controller)
    {
        return $this->add('GET',$uri,$controller);
    }

    Public function post($uri,$controller)
    {
        return $this->add('POST',$uri,$controller);
    }

    Public function delete($uri,$controller)
    {
        return $this->add('DELETE',$uri,$controller);
    }

    Public function put($uri,$controller)
    {
        return $this->add('PUT',$uri,$controller);
    }
    Public function patch($uri,$controller)
    {
        return $this->add('PATCH',$uri,$controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        // dd($this->routes);
        return $this;
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    public function route($uri, $method)
    {
        foreach($this->routes as $route)
        {
            if($route['uri'] === $uri && $route['method'] === strtoupper($method) )
            {
                Middleware::resolve($route['middleware']);
                return require base_path('Http/controllers/'.$route['controller']);
            }
        }
        // dd($uri);
        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }
}

