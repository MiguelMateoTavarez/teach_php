<?php

namespace Inventory\Src\DataManagement\Migrations;

use Inventory\Src\DataManagement\DatabaseConnection;

class MigrationsManager
{
    private \PDO $db;
    private array $migrations;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance()->getConnection();
        $this->migrations = [];
    }

    public function addMigration($migration): void
    {
        $this->migrations[] = $migration;
    }

    public function migrate(): void
    {
        foreach ($this->migrations as $migration) {
            try {
                $migration->createTable();
            } catch (\Exception $e) {
                echo "Migration failed: " . $e->getMessage();
            }
        }
    }
}