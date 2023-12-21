<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeVontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UserHomeController;

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

Route::get('/',[HomeVontroller::class , 'index'])->name('welcome');

// Register User System
Route::get('register-user',[RegisterController::class , 'index'])->name('register_user');
Route::post('store',[RegisterController::class , 'store'])->name('store');

// Login User System
Route::get('login-user',[LoginController::class , 'index'])->name('login_user');
Route::post('login-now',[LoginController::class , 'submit_login'])->name('login_now');

// User Home
Route::middleware(['web:web'])->group(function () { 
    Route::get('home', [UserHomeController::class, 'index'])->name('home');

});
