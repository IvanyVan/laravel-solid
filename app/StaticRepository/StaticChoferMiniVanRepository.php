<?php

namespace App\StaticRepository;

use App\Repositorios\ChoferMiniVanRepository;

class StaticChoferMiniVanRepository implements ChoferMiniVanRepository
{

    public function getChoferesMiniVan()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Ivan El conductor',
                'vehiculo' => 'minivan',
            ],
            [
                'id' => 2,
                'name' => 'Ignacia La conductora',
                'vehiculo' => 'minivan',
            ],
        ];
        return $users;
    }
    
    
}