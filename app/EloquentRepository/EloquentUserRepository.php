<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositorios\UserRepository;

class EloquentUserRepository implements UserRepository
{
    public function getAll()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John Does',
                'email' => 'johndoe@example.com',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
            ],
            // Agregar más usuarios si es necesario
        ];
        return $users;
    }
    
    public function getById($id)
    {
        return User::findOrFail($id);
    }
    
    public function create(array $data)
    {
        return User::create($data);
    }
    
    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}