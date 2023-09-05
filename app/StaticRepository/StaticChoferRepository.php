<?php

namespace App\StaticRepository;

use App\Repositorios\ChoferRepository;

class StaticChoferRepository implements ChoferRepository
{



    public function getChoferes()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'vehiculo' => 'bus',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'vehiculo' => 'bus',
            ],
            // Agregar más usuarios si es necesario
        ];
        return $users;
    }
    
    
}