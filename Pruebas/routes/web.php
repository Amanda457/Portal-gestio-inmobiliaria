<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return "Testeando hello";
});

Route::resource('clients', ClientController::class);
Route::resource('pisos', PisController::class);
