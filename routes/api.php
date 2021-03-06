<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;

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

// Register
Route::post('registration', [LoginController::class, 'create']);
Route::post('logout', [LoginController::class, 'logout']);
Route::post('verifyOtp', [LoginController::class, 'verifyOtp']);
Route::post('getPlantDetails', [LoginController::class, 'getPlantDetails']);
