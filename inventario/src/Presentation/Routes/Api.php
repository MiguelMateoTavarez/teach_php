<?php

namespace Inventory\Src\Presentation\Routes;
use Inventory\Src\Presentation\Controllers\LoginController;
use Inventory\Src\Presentation\Controllers\RegisterController;

class Api
{
    private $registerController;
    private $loginController;

    public function __construct()
    {
        $this->registerController = new RegisterController();
        $this->loginController = new LoginController();
    }

    private function routeNotFound()
    {
        http_response_code(404);

        return json_encode([
            'status' => 'error',
            'message' => 'Route not found'
        ]);
    }

    public function route($path)
    {
        return match ($path) {
            '/api/register' => $this->registerController->register(),
            '/api/login' => $this->loginController->login(),
            '/api/logout' => $this->loginController->logout(),
            default => $this->routeNotFound()
        };
    }
}