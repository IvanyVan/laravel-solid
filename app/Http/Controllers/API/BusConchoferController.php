<?php

namespace App\Http\Controllers\API;

use App\Repositorios\ChoferRepository;

class BusConchoferController extends BusController
{
    protected $userService;
    protected $choferService;
    
    public function __construct( ChoferRepository $choferService)
    {
        $this->choferService = $choferService;
    }
    
    public function getChoferesBuses()
    {
        $choferes = $this->choferService->getChoferes();
        return response()->json($choferes);
    }
    
    
}