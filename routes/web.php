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
Route::get('/theme', [UserController::class, 'showThemeData'])->name('theme.index');

Route::post('/theme', [UserController::class, 'store'])->name('theme.store');
