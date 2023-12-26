<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeVontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserFormController;
use App\Http\Controllers\User\UserEditCardController;
use App\Http\Controllers\User\ShowFullVisiterCardController;
// Admin System
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
// User System
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Customer\CustomerRegisterController;
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
//  Reset Password system
Route::get('reset',[ResetPasswordController::class , 'index'])->name('reset_password');
Route::post('reset-now',[ResetPasswordController::class , 'forget_password_company_submit'])->name('reset_password_now');
Route::get('reset-password/user/{token}/{email}', [ResetPasswordController::class, 'reset_password_user']);
Route::post('reset-password-submit-user/{token}/{email}', [ResetPasswordController::class, 'reset_password_user_submit'])->name('resetpassword_user_submit');

// User Home
Route::middleware(['web:web'])->group(function () {
    Route::get('home', [UserHomeController::class, 'index'])->name('home');
    Route::get('logout', [UserHomeController::class, 'logout'])->name('logout');
    //  User Add Visiter Card
    Route::post('add-card', [UserFormController::class, 'store'])->name('add_card');
    // User Edit System
    Route::resource('user-edit', UserEditCardController::class);
    Route::get('full-visiter-card/{id}', [ShowFullVisiterCardController::class, 'index'])->name('full_visiter_card');

});

// Admin System
Route::get('admin/login' , [AdminLoginController::class ,'index'])->name('admin_login');
Route::post('login_submit' , [AdminLoginController::class ,'login_submit'])->name('login_submit');
Route::get('logout' , [AdminLoginController::class ,'logout'])->name('logout');
// Customer Register
Route::resource('register', CustomerRegisterController::class);
// Admin Home

Route::middleware(['admin:admin'])->group(function () {
    Route::get('admin_home' , [AdminHomeController::class , 'index'])->name('admin_home');
    // User System
    Route::resource('user', AdminUserController::class);

    // track-visitor
    Route::group(['middleware' => 'trackVisitor'], function () {
        Route::get('visitor', [VisitorController::class, 'showVisitorCount'])->name('visitor');
    });
});
