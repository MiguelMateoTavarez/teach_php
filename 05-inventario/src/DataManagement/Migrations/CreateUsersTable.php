<?php

namespace Inventory\Src\DataManagement\Migrations;

use Exception;
use Inventory\Src\DataManagement\DatabaseConnection;
use Inventory\Src\DataManagement\Migrations\Contracts\CreateTableInterface;
use Inventory\Src\DataManagement\Migrations\Shared\BaseCreateTable;

class CreateUsersTable extends BaseCreateTable
{
    private string $tableName;
    public function __construct()
    {
        parent::__construct();
        self::setTableName('users');
        self::setTableFields([
            'id INTEGER PRIMARY KEY AUTOINCREMENT',
            'usersname TEXT NOT NULL UNIQUE',
            'password TEXT NOT NULL',
        ]);
    }
}