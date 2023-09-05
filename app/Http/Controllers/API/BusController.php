<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositorios\ChoferMiniVanRepository;
use App\Repositorios\ChoferRepository;

class BusController extends Controller
{
    protected $userService;
    protected $choferService;
    protected $choferMiniVanService;
    
    public function __construct( ChoferRepository $choferService, ChoferMiniVanRepository $choferMiniVanService)
    {
        $this->choferService = $choferService;
        $this->choferMiniVanService = $choferMiniVanService;
    }
    
    public function getBuses()
    {
        $choferes = $this->choferService->getChoferes();
        return response()->json($choferes);
    }
    
    public function getMiniVan()
    {
        $choferes = $this->choferMiniVanService->getChoferesMiniVan();
        return response()->json($choferes);
    }

    
}