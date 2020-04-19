<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET'  => [],
        'POST' => [],
    ];

    public function get($url, $controller)
    {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller)
    {
        $this->routes['POST'][$url] = $controller;
    }

    public function direct($url, $requestType)
    {
        if (array_key_exists($url, $this->routes[$requestType])) {
            $this->callAction(...explode('@', $this->routes[$requestType][$url]));
        }

        throw new Exception("No Route Define");
    }

    protected function callAction($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $method)) {
          throw new \Exception("{$controller} Does Not Responsed To The {$method} method");
        }

        return $controller->$method();
    }

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
}
