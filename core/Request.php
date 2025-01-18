<?php

namespace PHPFramework;

class Request{
    public string $uri;

    public function __construct($uri){
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getPath():string{
        return $this->uri;
    }

    /**
     * Возвращаем метод запроса из REQUEST_METHOD = GET POST
     * @return string
     */
    public function getMethod():string{
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
}