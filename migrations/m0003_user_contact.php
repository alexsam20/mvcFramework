<?php

class m0003_user_contact
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `user_contact` (
                `id` INT(10) AUTO_INCREMENT PRIMARY KEY,
                `subject` VARCHAR(255) NOT NULL,
                `email` VARCHAR(255) NOT NULL,
                `body` TEXT NOT NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE `user_contact`;";
        $db->pdo->exec($SQL);
    }
}