<?php
/**
 * Created by PhpStorm.
 * User: timsi
 * Date: 25.05.2019
 * Time: 22:48
 */
class DatabaseConnector {

    private $pdo;
    private $user = "root";
    private $password = null;
    private $dsn = "sqlite:" . __DIR__ . "database.db";
    public function connect() {
        try {
            if($this->pdo == null) {
                $this->pdo = new PDO($this->dsn, $this->user, $this->password);
            }
            return $this->pdo;
        } catch (PDOException $e) {
            echo 'Fehler: ' . htmlspecialchars($e->getMessage());
            exit();
        }
    }
}