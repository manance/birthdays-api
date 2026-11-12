<?php

use App\Http\Controllers\BirthdayController;
// use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('birthday', BirthdayController::class);

// Route::post('register', [AuthController::class, 'register']);
// Route::post('login',    [AuthController::class, 'login'   ]);
// Route::post('logout',   [AuthController::class, 'logout'  ])
//     ->middleware('auth:sanctum');