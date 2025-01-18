<?php
/* @var \PHPFramework\Application $app */
$app->router->get('/', function(){
    return 'Main page';
});
$app->router->get('/about', function(){
    return 'About page';
});
$app->router->get('/contact', [\App\Controllers\ContactController::class, 'index']);
$app->router->post('/contact', [\App\Controllers\ContactController::class, 'send']);

