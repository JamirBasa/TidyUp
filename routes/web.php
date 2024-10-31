<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

// Static pages
Route::view('/', 'index')->name('index');
Route::view('/choose', 'choose')->name('choose');

// User Authentication
Route::get('/user/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/user/login', [AuthController::class, 'userLogin']);
Route::get('/user/registration', [AuthController::class, 'showUserRegistrationForm'])->name('user.registration');
Route::post('/user/registration', [AuthController::class, 'userRegister']);
Route::post('/user/logout', [AuthController::class, 'userLogout'])->name('user.logout');

// Shop Authentication
// Route::get('/shop/login', [AuthController::class, 'showShopLoginForm'])->name('shop.login');
// Route::post('/shop/login', [AuthController::class, 'shopLogin']);
// Route::post('/shop/logout', [AuthController::class, 'shopLogout'])->name('shop.logout');

Route::get('/shop/registration', [AuthController::class, 'showShopRegistrationForm'])->name('shop.registration');
Route::post('/shop/registration', [AuthController::class, 'shopRegister']);

//Shop Pages
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
