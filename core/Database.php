<?php

namespace app\core;

class Database
{
    public \PDO $pdo;
    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}