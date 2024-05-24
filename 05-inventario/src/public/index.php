<?php

require_once dirname(__DIR__).'/../vendor/autoload.php';

$requestUri = $_SERVER['REQUEST_URI'];

$route = new Inventory\Src\Presentation\Routes\Api();

echo $route->route($requestUri);