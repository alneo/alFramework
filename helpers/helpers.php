<?php

function app(): \PHPFramework\Application{
    return \PHPFramework\Application::$app;
}


function view($view = '', $data = [], $layout = ''): string|\PHPFramework\View{
    if ($view) {
        return app()->view->render($view, $data, $layout);
    }
    return app()->view;
}


function request(): \PHPFramework\Request{
    return app()->request;
}

function base_url($path = ''): string{
    return PATH . $path;
}