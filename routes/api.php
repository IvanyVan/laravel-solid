<?php

use App\Http\Controllers\API\BusController;
use Illuminate\Support\Facades\Route;


Route::get('/choferes', [BusController::class, 'getBuses']);
Route::get('/choferesMiniVan', [BusController::class, 'getMiniVan']);

