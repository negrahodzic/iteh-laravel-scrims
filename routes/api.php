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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/results', \App\Http\Controllers\ResultController::class);
Route::apiResource('/scores', \App\Http\Controllers\ScoreController::class);
Route::apiResource('/servers', \App\Http\Controllers\ServerController::class);
Route::apiResource('/scrims', \App\Http\Controllers\ScrimController::class);
