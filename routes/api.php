<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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

Route::post('orderStore', [OrderController::class, 'orderStore']);
Route::post('practisePost',[OrderController::class,'practisePost']);
Route::post('practisePostModel',[OrderController::class,'practisePostModel']);
Route::get('listTarget', [OrderController::class, 'listTarget']);
Route::get('shopslist', [OrderController::class, 'shopslist']);
Route::get('sendMsg', [OrderController::class, 'sendMsg']);