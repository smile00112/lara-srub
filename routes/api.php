<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\ServiceController;
use \App\Http\Controllers\Api\V1\HouseController;
use \App\Http\Controllers\Api\V1\OrderController;

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


Route::resource('services', ServiceController::class)->only([
    'index', 'show'
]);

Route::resource('houses', HouseController::class)->only([
    'index', 'show'
]);

Route::resource('order', OrderController::class)->only([
    'store'
]);

// Route::apiResources([
//     'services' => ServiceController::class,
//     'services/{id}' => ServiceController::class,

//     'houses' => HouseController::class,
//     'houses/{id}' => HouseController::class,
// ]);
