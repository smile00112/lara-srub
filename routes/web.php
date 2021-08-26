<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StoreController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\SpaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [StoreController::class, 'index']);
Route::get('/{any}', [SpaController::class, 'index'] )->where('any', '.*');

Route::get('/category/', [CategoryController::class, 'index'] )->name('getProgects');
Route::get('/category/{slug}', [StoreController::class, 'getHousesByCategory'])->name('getHousesByCategory');
Route::get('/category/{slug_category}/{slug_post}/', [StoreController::class, 'getHouse'])->name('getHouse');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
