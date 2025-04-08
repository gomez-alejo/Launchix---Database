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

Route::get('/usuario',[UserController::class,'usuario'])->name('usuario');

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/registro', [UserController::class, 'create'])->name('users.create');
Route::post('/registro', [UserController::class, 'store'])->name('users.store');
