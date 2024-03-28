<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/user/{id}', [UserController::class, 'getUser']);
Route::post('/user', [UserController::class, 'createUser']);
Route::patch('/user/{id}', [UserController::class, 'updateUser']);
Route::delete('/user/{id}', [UserController::class, 'deleteUser']);
