<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{page}', [UserController::class, 'showpage'])
    ->where('page', 'index|about|products|single-product|contact')
    ->name('theme.show');
Route::get('/theme', [UserController::class, 'showThemeData'])->name('theme.index');
Route::get('/theme', [UserController::class, 'show'])->name('theme.index');
Route::post('/theme', [UserController::class, 'store'])->name('theme.store');

