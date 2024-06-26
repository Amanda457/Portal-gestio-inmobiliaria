<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/inici');
});

Route::get('/inici', function () {
    return view('inici');
});

Route::resource('clients', ClientController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('pisos', PisController::class);


