<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\MainController;

function dump_pre($var, $s = 1) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($s === 1){
        exit;
    }
}

$app = new Application(dirname(__DIR__));

$app->router->get('/', [MainController::class, 'home']);
$app->router->get('/contact', [MainController::class, 'contact']);
$app->router->post('/contact', [MainController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);


$app->run();
