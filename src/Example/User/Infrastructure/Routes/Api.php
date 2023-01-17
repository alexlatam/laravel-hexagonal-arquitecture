<?php

use Illuminate\Support\Facades\Route;
use Src\Example\User\Infrastructure\Controllers\UserFindAllController;
use Src\Example\User\Infrastructure\Controllers\UserFindByIdController;
use Src\Example\User\Infrastructure\Controllers\UserDeleteByIdController;

Route::get('/', UserFindAllController::class);           // Find all users
Route::get('/{id}', UserFindByIdController::class);      // Find user by id
Route::delete('/{id}', UserDeleteByIdController::class); // Delete user
Route::post('/', UserSaveController::class);             // Create user
