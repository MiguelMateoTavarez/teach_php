<?php

require 'vendor/autoload.php';

try {
    $migrationManager = new \Inventory\Src\DataManagement\Migrations\MigrationsManager();

    $migrationManager->addMigration(new \Inventory\Src\DataManagement\Migrations\CreateUsersTable());

    $migrationManager->migrate();
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
