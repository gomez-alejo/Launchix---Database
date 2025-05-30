<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//alejandro
Route::get('/Launchix', function () {return view('inicio');})->name('inicio');
Route::get('/Products', function () {return view('products');})->name('productos');
Route::get('/usuario',[UserController::class,'usuario'])->name('usuario');
Route::get('/productos', function () {return view('productos');})->name('productos');
Route::get('/registro', [UserController::class, 'create'])->name('users.create');
Route::post('/registro', [UserController::class, 'store'])->name('users.store');
Route::get('/consulta5', [OrmController::class, 'consulta5']);
Route::get('/prueba', [UserController::class, 'prueba'])->name('users.prueba');
Route::get('/categories', [CategoryController::class, 'consulta'])->name('categories.consulta');


