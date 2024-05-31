<?php

namespace Inventory\Src\DataManagement\Migrations\Shared;

use Inventory\Src\DataManagement\DatabaseConnection;

abstract class BaseCreateTable
{
    protected \PDO $db;
    private string $tableName;
    private string $fields;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    protected function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setTableFields(array $fields): void
    {
        $this->fields = implode(', ', $fields);
    }

    public function createTable(): void
    {
        try {
            $this->db->beginTransaction();
            $this->db->exec(
                "CREATE TABLE IF NOT EXISTS `$this->tableName` 
                ($this->fields)"
            );
            $this->db->commit();
            echo "$this->tableName's table created successfully";
        } catch (\PDOException $e) {
            $this->db->rollBack();
            throw new Exception('Transaction failed: ' . $e->getMessge());
        }
    }
}