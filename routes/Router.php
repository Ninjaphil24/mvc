<?php
class Router {
    private $routes = [];

    public function addRoute($route, $controller, $method) {
        $this->routes[$route] = ["controller" => $controller, "method" => $method];
    }

    public function dispatch($route) {
        // $route = rtrim($route, '/'); // remove trailing slashes
        if (array_key_exists($route, $this->routes)) {
            $controller = $this->routes[$route]["controller"];
            $method = $this->routes[$route]["method"];
            $obj = new $controller;
            if ($method && method_exists($obj, $method)) {
                $obj->$method();
            } else {
                echo "No method found for this route.";
            }
        } else {
            echo "No route found for this URI.";
        }
    }
}
