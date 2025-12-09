<?php

use App\Http\Controllers\Api\PostController;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/hello', function () {
    return 'Hello from API route';
});
Route::get('/menu', function () {
    $menu=Product::all();
    return $menu; 
});

Route::apiResource('posts', PostController::class);