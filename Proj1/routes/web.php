<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navigation;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', [navigation::class, 'register'])->name('landing.registration');
Route::get('/welcome', [navigation::class, 'landing'])->name('landing.home');
