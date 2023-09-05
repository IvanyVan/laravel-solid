<?php

namespace App\Services;

use App\Repositorios\ChoferRepository;

class ChoferService
{
    protected $choferRepository;
    
    public function __construct(ChoferRepository $choferRepository)
    {
        $this->choferRepository = $choferRepository;
    }
    
    public function getChoferes()
    {
        return $this->choferRepository->getChoferes();
    }

}