<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntrepreneurController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
















































































//julian
Route::get('categoria', [CategoryController::class, 'saludo']);
Route::get('emprendedor', [EntrepreneurController::class, 'saludo']);
Route::get('orden', [OrderController::class, 'saludo']);
Route::get('orden-producto', [OrderProductController::class, 'saludo']);
Route::get('pago', [PaymentController::class, 'saludo']);
Route::get('producto', [ProductController::class, 'saludo']);
Route::get('vista', [ReviewController::class, 'saludo']);
Route::get('servicio', [ServiceController::class, 'saludo']);
Route::get('envio', [ShipmentController::class, 'saludo']);
Route::get('carrito-compras', [ShoppingCartController::class, 'saludo']);
Route::get('usuario', [UserController::class, 'saludo']);


