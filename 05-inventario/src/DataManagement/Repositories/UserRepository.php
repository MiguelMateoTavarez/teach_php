<?php

namespace Inventory\Src\DataManagement\Repositories;

use Inventory\Src\DataManagement\DatabaseConnection;

class UserRepository
{
    public function __construct(
        private \PDO $db
    )
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
        try{
            $this->db->beginTransaction();
            $query = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $query->bindParam(":username", $username);
            $query->bindParam(":password", $password);
            $query->execute();
            $this->db->commit();
            return 'User created successfully';
        }catch (\PDOException $e){
            $this->db->rollBack();
            throw new Exception('Transaction failed: ' . $e->getMessage());
        }
    }
}