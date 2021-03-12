<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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
// Service Page
Route::get('/product1', [ServiceController::class, 'getAllCategory1']);
Route::get('/product2', [ServiceController::class, 'getAllCategory2']);
Route::get('/product3', [ServiceController::class, 'getAllCategory3']);
Route::get('/product4', [ServiceController::class, 'getAllCategory4']);