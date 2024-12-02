<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register_consumer', [App\Http\Controllers\HomeController::class, 'registerConsumer'])->name('registerConsumer');
Route::get('/register_Farm', [App\Http\Controllers\HomeController::class, 'registerFarm'])->name('registerFarm');
Route::get('/register_home', [App\Http\Controllers\HomeController::class, 'registerHome'])->name('registerHome');

# ADMIN
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});