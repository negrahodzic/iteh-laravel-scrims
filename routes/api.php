<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Protected routes
Route::group(['middleware'=>['auth:sanctum']], function (){
    Route::resource('/results', \App\Http\Controllers\ResultController::class)->only([
        'store', 'update', 'delete'
    ]);
    Route::apiResource('/servers', \App\Http\Controllers\ServerController::class);
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

//public routes
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::resource('/results', \App\Http\Controllers\ResultController::class)->only([
    'index', 'show'
]);

