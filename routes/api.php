<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\provinceController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->group( function(){
    Route::get('/users', [UserController::class , 'list'])->name('userslist');
});

Route::post('/register' , [RegisterController::class , 'register'])->name('register');

Route::post('/login' , [LoginController::class , 'login'])->name('login');

Route::get('/provinces' , [provinceController::class, 'index']);

