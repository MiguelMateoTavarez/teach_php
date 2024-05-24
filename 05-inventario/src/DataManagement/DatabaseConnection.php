<?php

namespace Inventory\Src\DataManagement;

class DatabaseConnection
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        try {
            $this->pdo = new \PDO('sqlite:'.dirname(dirname(__DIR__))."\database.sqlite");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}