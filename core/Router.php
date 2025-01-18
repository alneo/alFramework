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
        $path = trim($path, '/');
        $this->routes['GET']['/'.$path] = $callback;
    }

    public function post($path, $callback):void{
        $path = trim($path, '/');
        $this->routes['POST']['/'.$path] = $callback;
    }

    /**
     * @return Request
     */
    public function dispatch(): mixed{
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        //Получение и проверка callback функции
        $callback = $this->routes[$method]['/'.$path] ?? false;
        if(false === $callback){
            $this->response->setResponseCode(404);
            return view('errors/404');
        }
        if (is_array($callback)){
//            $action = $callback[1];
//            $object = new $callback[0];
//            return  $object->$action();
            $callback[0] = new $callback[0];
        }
        return call_user_func($callback);
    }
}