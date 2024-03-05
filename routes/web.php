<?php

use App\Http\Controllers\signUpController;
use App\Http\Controllers\userListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('newReg',[signUpController::class,'newReg'])->name('newReg');
Route::post('storeuser',[signUpController::class,'storeuser'])->name('storeuser');
Route::get('login',[signUpController::class,'login'])->name('login');
Route::get('logout',[signUpController::class,'logout']);
Route::post('auth',[signUpController::class,'auth']);
Route::get('dash',[signUpController::class,'dash']);
Route::get('users',[userListController::class,'users']);