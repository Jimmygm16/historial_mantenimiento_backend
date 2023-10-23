<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/prueba', [App\Http\Controllers\api\v1\ComputerController::class, 'list']);
//ruta para el crud de usuarios
Route::apiResource('/v1/users',App\Http\Controllers\api\v1\UserController::class);

// Category CRUD
//Categories
Route::apiResource('/v1/categories', App\Http\Controllers\api\v1\CategoryController::class);

//Computers
Route::apiResource('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class);

//Observations
Route::apiResource('/v1/computers.observations', App\Http\Controllers\api\v1\ObservationController::class);
Route::get('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@show');
Route::post('v1/computers/{computer_id}/observations', App\Http\Controllers\api\v1\ObservationController::class.'@store');
Route::put('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@update');
Route::delete('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@destroy');
//
Route::apiResource('v1/categories', App\Http\Controllers\api\v1\CategoryController::class);
