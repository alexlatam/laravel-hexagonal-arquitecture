<?php

use Illuminate\Support\Facades\Route;
use Src\Example\User\Infrastructure\Controllers\UserFindAllController;
use Src\Example\User\Infrastructure\Controllers\UserFindByIdController;
use Src\Example\User\Infrastructure\Controllers\UserDeleteByIdController;

Route::get('/', UserFindAllController::class);
Route::get('/{id}', UserFindByIdController::class);
Route::delete('/{id}', UserDeleteByIdController::class);
