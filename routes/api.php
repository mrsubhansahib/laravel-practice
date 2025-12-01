<?php

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/hello', function () {
    return 'Hello from API route';
});
Route::get('/all/admins', function () {
    $admins=Admin::all();
    return $admins; 
});