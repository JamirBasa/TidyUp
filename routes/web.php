<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Middleware\IsServiceProvider;
use App\Http\Middleware\IsNotServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;

// Static pages
Route::get('/', [HomeController::class, 'index'])->name('index');

// User Authentication



//Routes that are only accessible to guests
Route::middleware('guest')->group(function () {
    Route::get('/user/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
    Route::post('/user/login', [AuthController::class, 'userLogin']);
    Route::get('/user/registration', [AuthController::class, 'showUserRegistrationForm'])->name('user.registration');
    Route::post('/user/registration', [AuthController::class, 'userRegister']);


    // User Reset Password
    //Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('auth.forgot-password');
    Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail'])->name('password.email'); // Ensure this is defined
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');
});

//Routes that are only accessible to authenticated users
Route::middleware('auth')->group(function () {
    Route::post('/user/logout', [AuthController::class, 'userLogout'])->name('user.logout');

    // Only allow non-service providers to access registration routes
    Route::middleware(IsNotServiceProvider::class)->group(function () {
        Route::get('/shop/registration', [AuthController::class, 'showShopRegistrationForm'])->name('shop.registration');
        Route::post('/shop/registration', [AuthController::class, 'shopRegister']);
    });
});

//Routes for Shop Pages Only Accessible to Service Providers
Route::middleware(IsServiceProvider::class)->group(function () {
    Route::get('/shop/dashboard', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/shop', function () {
        return redirect()->route('shop.index');
    });
});
