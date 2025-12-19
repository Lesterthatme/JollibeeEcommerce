<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', [UserController::class, 'home'])
    ->name('home');

Route::get('/contact', [UserController::class, 'contactor'])
    ->name('mganumero');

Route::get('/route', [UserController::class, 'route'])
    ->name('route');

Route::view('/', 'home');
