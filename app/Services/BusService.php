<?php

namespace App\Services;

use App\Repositorios\UserRepository;

class UserService
{
    protected $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }
    
    public function getUserById($id)
    {
        return $this->userRepository->getById($id);
    }
    
    public function createUser(array $data)
    {
        return $this->userRepository->create($data);
    }
    
    public function updateUser($id, array $data)
    {
        return $this->userRepository->update($id, $data);
    }
    
    public function deleteUser($id)
    {
        $this->userRepository->delete($id);
    }
}