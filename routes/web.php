<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resources(['users' => UserController::class,]);
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::resources(['products' => ProductController::class,]);
    Route::resources(['user_products' => UserProductController::class,]);
});
