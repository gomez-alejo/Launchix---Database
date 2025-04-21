<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Launchix', function () {return view('inicio');})->name('inicio');


Route::get('/registro', [UserController::class, 'create'])->name('users.create');
Route::post('/registro', [UserController::class, 'store'])->name('users.store');

Route::get('/hola', [CategoryController::class, 'hola']);

