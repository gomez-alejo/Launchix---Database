<?php

use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios',[UserController::class, 'saludar']);
