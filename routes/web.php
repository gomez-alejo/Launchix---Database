<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('inicio');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/usuario',[UserController::class,'usuario'])->name('usuario');


