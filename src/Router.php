<?php

namespace Src;

class Router
{
    protected $routes = [];
    protected $basePath = '/projects/info';

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if (strpos($uri, $this->basePath) === 0) {
            $uri = substr($uri, strlen($this->basePath));
        }

        $uri = $uri ?: '/';

        if (!isset($this->routes[$method][$uri])) {
            return 'Route not found';
        }

        $controller = explode('@', $this->routes[$method][$uri]);
        $controllerName = "App\\Controllers\\" . $controller[0];
        $methodName = $controller[1];

        if (!class_exists($controllerName)) {
            return 'Controller not found';
        }

        $controllerInstance = new $controllerName();
        if (!method_exists($controllerInstance, $methodName)) {
            return 'Method not found';
        }

        echo $controllerInstance->$methodName();
    }
}
