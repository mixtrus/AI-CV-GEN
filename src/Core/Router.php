<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, array $handler): void
    {
        $this->addRoute('GET', $path, $handler);
    }

    public function post(string $path, array $handler): void
    {
        $this->addRoute('POST', $path, $handler);
    }

    private function addRoute(string $method, string $path, array $handler): void
    {
        $this->routes[$method][$path] = $handler;
    }

    public function dispatch(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        $handler = $this->routes[$method][$path] ?? null;

        if (!$handler) {
            http_response_code(404);
            echo "<h1>404 Not Found</h1><p>The page you requested could not be found.</p>";
            return;
        }

        [$class, $methodName] = $handler;

        if (class_exists($class)) {
            $controller = new $class();
            if (method_exists($controller, $methodName)) {
                // Call the handler method
                $controller->$methodName();
            } else {
                http_response_code(500);
                echo "<h1>500 - Internal Server Error</h1><p>Controller method not found.</p>";
            }
        } else {
            http_response_code(500);
            echo "<h1>500 - Internal Server Error</h1><p>Controller class not found.</p>";
        }
    }
}