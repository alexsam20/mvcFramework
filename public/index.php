<?php

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\MainController;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
       'dsn'      => $_ENV['DB_DSN'],
       'user'     => $_ENV['DB_USER'],
       'password' => $_ENV['DB_PASSWORD'],
    ]
];

function dump_pre($var, $s = 0) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($s === 1){exit;}
}

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [MainController::class, 'home']);
$app->router->get('/contact', [MainController::class, 'contact']);
$app->router->post('/contact', [MainController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);


$app->run();
