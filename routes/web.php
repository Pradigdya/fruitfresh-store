<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ReviewController::class, 'index'])->name('dashboard');
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');
});




Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return view('pages.welcome');
    });

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');
