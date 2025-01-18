<?php
/* @var \PHPFramework\Application $app */
$app->router->get('/', function(){//Если не нужен контроллер
    return view('main');
});
$app->router->get('/about', function(){//Если не нужен контроллер
    return view('about');
});
$app->router->get('/contact', [\App\Controllers\ContactController::class, 'index']);
$app->router->post('/contact', [\App\Controllers\ContactController::class, 'send']);

