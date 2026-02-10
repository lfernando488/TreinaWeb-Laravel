<?php

use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/rastreamento', RastreamentoController::class)->name('frete.rastreamento');

route::get('/historico', HistoricoController::class)->name('frete.historico');
