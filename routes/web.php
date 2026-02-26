<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComidaEquipo4Controller;
use App\Http\Controllers\TipoComidaEquipo4Controller;

Route::get('/', function () {
    return view('comida_equipo4.index');
});

Route::get('/', function () {
    return redirect()->route('comida_equipo4.index');
});

Route::resource(
    'comida_equipo4',
    ComidaEquipo4Controller::class
);

Route::resource(
    'tipo_comida_equipo4',
    TipoComidaEquipo4Controller::class
);