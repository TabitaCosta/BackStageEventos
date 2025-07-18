<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PatrocinadorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);

Route::resource('patrocinadores', PatrocinadorController::class);


