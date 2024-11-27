<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register_consumer', [App\Http\Controllers\HomeController::class, 'registerConsumer'])->name('registerConsumer');
Route::get('/register_farm', [App\Http\Controllers\HomeController::class, 'registerFarm'])->name('registerFarm');

// Route::get('/register-role',[RegisterController::class, 'registerRole'])->name('register_role');