<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\MainController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [MainController::class, 'home']);
$app->router->get('/contact', [MainController::class, 'contact']);
$app->router->post('/contact', [MainController::class, 'handleContact']);

$app->run();
