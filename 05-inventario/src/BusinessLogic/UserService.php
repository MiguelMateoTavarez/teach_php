<?php

namespace Inventory\Src\BusinessLogic;

use Inventory\Src\DataManagement\Repositories\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function authenticate($username, $password)
    {
        $user = $this->userRepository->findUserByUsername($username);

        if($user && password_verify($password, $user['password'])){
            return [
                'status' => 'success',
                'user_id' => $user['id'],
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Invalid username or password',
            ];
        }
    }

    public function register($username, $password)
    {
        $existingUser = $this->userRepository->findUserByUsername($username);
        if($existingUser) {
            return [
                'status' => 'error',
                'message' => 'Username already exists'
            ];
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $success = $this->userRepository->createUser($username, $hashedPassword);

        if($success) {
            return [
                'status' => 'success',
                'message' => 'User created successfully',
                'user' => $this->userRepository->findUserByUsername($username)
            ];
        }else {
            return [
                'status' => 'error',
                'message' => 'Error creating user'
            ];
        }
    }
}