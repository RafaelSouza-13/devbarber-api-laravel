<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFavoriteController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\UserFavorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/refresh', [AuthController::class, 'refresh']);

    Route::get('/user', [UserController::class, 'findAll']);
    Route::get('/user/favorites', [UserFavoriteController::class, 'findAll']);
    Route::post('/user/favorites', [UserFavoriteController::class, 'create']);

    Route::get('/user/appointments', [UserAppointmentController::class, 'findAll']);

    Route::get('/barbers', [BarberController::class, 'findAll']);
    Route::get('/barber/{id}', [BarberController::class, 'findById']);

    Route::post('/barber/{id}/appointment', [UserAppointmentController::class, 'create']);



    Route::get('/search', [BarberController::class, 'search']);

});

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/user', [UserController::class, 'create']);
