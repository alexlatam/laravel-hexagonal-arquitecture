<?php

use Illuminate\Support\Facades\Route;
use Src\Example\User\Infrastructure\Controllers\UserFindAllController;

Route::get('/', UserFindAllController::class);
