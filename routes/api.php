<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/ola', function(){
    return "API UP!";
});

Route::post('/clientes', [ClienteController::class, 'store']);
