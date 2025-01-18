<?php

namespace PHPFramework;

class Request{
    public string $uri;

    public function __construct($uri){
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getPath():string{
        return $this->removeQueryString();
    }

    /**
     * Возвращаем метод запроса из REQUEST_METHOD = GET POST
     * @return string
     */
    public function getMethod():string{
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function isGet():bool{
        return $this->getMethod() == 'GET';
    }
    public function isPost():bool{
        return $this->getMethod() == 'POST';
    }

    /**
     * Получение основного метода
     * @return string
     */
    public function removeQueryString(): string{
        if($this->uri){
            $params = explode('&',$this->uri);
            if(false === str_contains($params[0],'=')){
                return trim($params[0],'/');
            }
        }
        return "";
    }

    public function get($name, $default = null): ?string{
        return $_GET[$name]?? $default;
    }
    public function post($name, $default = null): ?string{
        return $_POST[$name]?? $default;
    }

    /**
     * Обрабатываем пришедшие данные
     * @return array
     */
    public function getData():array{
        $data = [];
        $request_data = $this->isGet() ? $_GET : $_POST;
        foreach ($request_data as $k => $v) {
            $data[$k] = trim($v);
        }
        return $data;
    }
}