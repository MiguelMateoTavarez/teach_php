<?php

namespace Inventory\Src\Presentation\Controllers;
use Inventory\Src\BusinessLogic\UserService;

class RegisterController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function register()
    {
        $requestData = json_decode(file_get_contents('php://input'), true);

        if(!isset($requestData['username'], $requestData['password'], $requestData['password_confirmation'])){
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => 'Pleas fill all the required field',
            ]);
            return;
        }

        if($requestData['password'] !== $requestData['password_confirmation']){
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => 'Password do not match',
            ]);
            return;
        }

        $response = $this->userService->register($requestData['username'], $requestData['password']);

        $_SESSION['user_id'] = $response['user']['id'];
        setcookie('session_id', session_id(), time() + 3600, '/api');

        header('Content-type: application/json');
        echo json_encode($response);
    }
}