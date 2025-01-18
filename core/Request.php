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

    /**
     * Получение основного метода
     * @return string
     */
    public function removeQueryString(): string{
        if($this->uri){
            $params = explode('&',$this->uri);
            if(false === str_contains($params,'=')){
                return trim($params[0],'/');
            }
        }
        return "";
    }

    public function get($name, $default = null): ?string{
        return $_GET[$name]?? $default;
    }

}