<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/theme', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/products', [UserController::class, 'products']);
Route::get('/single-product', [UserController::class, 'singleproduct']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/test', [UserController::class, 'test']);

