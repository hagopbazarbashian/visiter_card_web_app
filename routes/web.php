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
use App\Http\Controllers\User\SingleCardController;
use App\Http\Controllers\User\DuplicateController;
use App\Http\Controllers\FirstCardGetcardController;
// Admin System
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
// User System
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Customer\CustomerRegisterController;

use App\Http\Controllers\NFCController;

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
    //Get Your First card Page And Get Card
        Route::get('welcome-user' , [FirstCardGetcardController::class , 'welcome'])->name('welcome_user');
        Route::get('welcome-user-get-card' , [FirstCardGetcardController::class , 'getcard'])->name('get_card');
    /////
    //Get Your First card Page And Get Card

    Route::get('home', [UserHomeController::class, 'index'])->name('home');
    Route::get('logout', [UserHomeController::class, 'logout'])->name('logout');
    //  User Add Visiter Card

    // Card System
    Route::get('full-visiter-card/{id}', [ShowFullVisiterCardController::class, 'index'])->name('full_visiter_card');
    Route::post('full-visiter-card-update/{id}', [ShowFullVisiterCardController::class, 'update'])->name('full_visiter_card_update');
    Route::get('delete-card/{id}', [ShowFullVisiterCardController::class, 'delete'])->name('delete_card');
    Route::get('new-card', [UserFormController::class, 'index'])->name('new_card'); 
    Route::post('add-card', [UserFormController::class, 'store'])->name('add_card');
    //Delete Logo File Profile Image
    Route::get('delete-file/{id}', [ShowFullVisiterCardController::class, 'deletefileinfo'])->name('delete_file');
    Route::get('delete-profile-image/{id}', [ShowFullVisiterCardController::class, 'deleteprofileimage'])->name('delete_profile');
    Route::get('delete-logo/{id}', [ShowFullVisiterCardController::class, 'deleteprologo'])->name('delete_logo');
    //Duplicate System
    Route::get('/cardforms/{id}/duplicate', [DuplicateController::class, 'duplicate'])->name('duplicate');

});

// public view card
Route::get('single-card/{id}', [SingleCardController::class, 'index'])->name('single_card');
// public view card

// Admin System
Route::get('admin/login' , [AdminLoginController::class ,'index'])->name('admin_login');
Route::post('login_submit' , [AdminLoginController::class ,'login_submit'])->name('login_submit');
//Route::get('logout' , [AdminLoginController::class ,'logout'])->name('logout');
// Customer Register
Route::resource('register', CustomerRegisterController::class);
// Admin Home

Route::middleware(['admin:admin'])->group(function () {
    Route::get('admin_home' , [AdminHomeController::class , 'index'])->name('admin_home');
    // User System
    Route::resource('user-admin', AdminUserController::class);
    // User Update Admin
    Route::get('/user-admin/update/{id}', [AdminUserController::class , 'update'])->name('user-admin.update');

    // track-visitor
    Route::group(['middleware' => 'trackVisitor'], function () {
        Route::get('visitor', [VisitorController::class, 'showVisitorCount'])->name('visitor');
    });
});


// nfc
Route::get('nfc' , [NFCController::class , 'index']);
