<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);

//? We need to protect the logout route with the sanctum middleware so that only authenticated users can log out. https://laravel.com/docs/12.x/sanctum#protecting-routes
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');

