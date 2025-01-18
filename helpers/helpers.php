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
function response(): \PHPFramework\Response{
    return app()->response;
}

function base_url($path = ''): string{
    return PATH . $path;
}

function h($str):string{
    return htmlspecialchars($str, ENT_QUOTES);
}

function old($fieldname): string{
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function get_errors($fieldname, $errors = []):string{
    $output = '';
    if(isset($errors[$fieldname])){
        $output .= '<div class="invalid-feedback d-block"><ul class="list-unstyled">';
        foreach($errors[$fieldname] as $error){
            $output .= '<li>'. $error. '</li>';
        }
        $output .= '</ul></div>';
    }
    return $output;
}


function get_validation_class($fieldname, $errors = []): string{
    if (empty($errors)) {
        return '';
    }
    return isset($errors[$fieldname]) ? 'is-invalid' : 'is-valid';
}