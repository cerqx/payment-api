<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(function() {
    Route::get('/users', [\App\Http\Controllers\Api\V1\UserController::class, 'index']);
    Route::get('/users/{userId}', [\App\Http\Controllers\Api\V1\UserController::class, 'show']);
    Route::get('/payments', [\App\Http\Controllers\Api\V1\PaymentController::class, 'index']);
    Route::get('/payments/{paymentId}', [\App\Http\Controllers\Api\V1\PaymentController::class, 'show']);
    Route::post('/payments', [\App\Http\Controllers\Api\V1\PaymentController::class, 'store']);
});
