<?php
require_once __DIR__.'/../config/init.php';
require_once ROOT.'/vendor/autoload.php';

$app = new \PHPFramework\Application();
require_once CONFIG.'/routes.php';
$app->run();