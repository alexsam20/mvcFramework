<?php

use app\core\Application;
use app\core\Database;

function dump_pre($var, $s = 1) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($s === 1){exit;}
}

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
