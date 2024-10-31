<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

use App\Http\Middleware\IsServiceProvider;
use App\Http\Middleware\IsNotServiceProvider;
use Illuminate\Support\Facades\Auth;

// Static pages
Route::view('/', 'index')->name('index');

// User Authentication



//Routes that are only accessible to guests
Route::middleware('guest')->group(function () {
    Route::get('/user/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
    Route::post('/user/login', [AuthController::class, 'userLogin']);
    Route::get('/user/registration', [AuthController::class, 'showUserRegistrationForm'])->name('user.registration');
    Route::post('/user/registration', [AuthController::class, 'userRegister']);
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





