<?php

namespace Inventory\Src\DataManagement;

class UserRepository
{
    private $db;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    public function findUserByUsername($username)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $query->bindParam(":username", $username);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function createUser($username, $password)
    {
        $query = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);
        return $query->execute();
    }
}