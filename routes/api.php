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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('list/{cate_id?}',[App\Http\Controllers\ApiController::class,'list']);
Route::post('data/{id}',[App\Http\Controllers\ApiController::class,'getdata']);
Route::post('vendor/product/{id}', [App\Http\Controllers\ApiController::class, 'vgetdata']);