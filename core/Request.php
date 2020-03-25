<?php

class Request
{
    protected $routes = [];

    public static function url()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
