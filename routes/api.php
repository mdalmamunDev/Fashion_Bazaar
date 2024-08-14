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

Route::get('category/all/get', [\App\Http\Controllers\CategoriesControler::class, 'getAll']);
Route::get('category/{id}/get', [\App\Http\Controllers\CategoriesControler::class, 'getCategory']);
Route::post('category/store', [\App\Http\Controllers\CategoriesControler::class, 'store']);
Route::post('category/{id}/update', [\App\Http\Controllers\CategoriesControler::class, 'update']);
Route::post('category/{id}/delete', [\App\Http\Controllers\CategoriesControler::class, 'delete']);