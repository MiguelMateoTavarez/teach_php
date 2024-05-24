<?php

namespace Inventory\Src\Presentation\Controllers;
use Inventory\Src\BusinessLogic\UserService;

class LoginController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function login()
    {
        $requestData = json_decode(file_get_contents("php://input"), true);

        if(!isset($requestData['username'], $requestData['password'])) {
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => 'Missing username or password'
            ]);
            return;
        }

        $response = $this->userService->authenticate($requestData['username'], $requestData['password']);

        if($response['status'] === 'success') {
            session_start();
            $_SESSION['user_id'] = $response['user_id'];
            setcookie('session_id', session_id(), time() + 3600, '/api');
        }

        header('Content-Type: application/json');
        return json_encode($response);
    }

    public function logout()
    {
        session_start();
        session_destroy();

        setcookie('session_id', '', time() - 3600, '/api');

        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => 'Logged out'
        ]);
    }
}