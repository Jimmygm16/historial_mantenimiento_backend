<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


    Route::middleware('auth:sanctum')->group(function(){
        //computer
        Route::post('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class.'@store');
        Route::put('/v1/computers/{computer_id}', App\Http\Controllers\api\v1\ComputerController::class.'@update');
        Route::delete('/v1/computers/{computer_id}', App\Http\Controllers\api\v1\ComputerController::class.'@destroy');

        //Users
        Route::put('/v1/users/{user_id}', App\Http\Controllers\api\v1\UserController::class.'@update');
        Route::delete('/v1/users/{user_id}', App\Http\Controllers\api\v1\UserController::class.'@destroy');

        //logout
        Route::post('/v1/logout', App\Http\Controllers\api\v1\AuthController::class.'@logout');

        //profile
        Route::get('/v1/profile', App\Http\Controllers\api\v1\AuthController::class.'@getProfile');
        Route::put('/v1/profile', App\Http\Controllers\api\v1\AuthController::class.'@updateProfile');

        //observations
        Route::post('v1/computers/{computer_id}/observations', App\Http\Controllers\api\v1\ObservationController::class.'@store');
        Route::put('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@update');
        Route::delete('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@destroy');

        //category
        Route::post('v1/categories', App\Http\Controllers\api\v1\CategoryController::class.'@store');
        Route::put('v1/categories/{category_id}', App\Http\Controllers\api\v1\CategoryController::class.'@update');
        Route::delete('v1/categories/{category_id}', App\Http\Controllers\api\v1\CategoryController::class.'@destroy');
    });

Route::get('/v1/prueba', [App\Http\Controllers\api\v1\ComputerController::class, 'list']);

//register_public
Route::post('/v1/register', App\Http\Controllers\api\v1\UserController::class.'@store');
Route::get('/v1/users', App\Http\Controllers\api\v1\UserController::class.'@index');
Route::get('/v1/users/{user_id}', App\Http\Controllers\api\v1\UserController::class.'@show');

//Categories_public
Route::get('v1/categories', App\Http\Controllers\api\v1\CategoryController::class.'@index');
Route::get('v1/categories/{category_id}', App\Http\Controllers\api\v1\CategoryController::class.'@show');

//Computers_public
Route::get('/v1/computers', App\Http\Controllers\api\v1\ComputerController::class.'@index');
Route::get('/v1/computers/{computer_id}', App\Http\Controllers\api\v1\ComputerController::class.'@show');



//Observations_public
Route::get('v1/computers/{computer_id}/observations', App\Http\Controllers\api\v1\ObservationController::class.'@index');
Route::get('v1/computers/{computer_id}/observations/{observation_id}', App\Http\Controllers\api\v1\ObservationController::class.'@show');

//login
Route::post('/v1/login',
 [App\Http\Controllers\api\v1\AuthController::class,
 'login'])->name('api.login');

