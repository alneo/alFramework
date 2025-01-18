<?php

namespace PHPFramework;

class Router{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response){
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Получение маршрутов
     * @return array
     */
    public function getRoutes(){
        return $this->routes;
    }

    public function get($path, $callback):void{
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback):void{
        $this->routes['POST'][$path] = $callback;
    }
}