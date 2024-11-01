<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Post;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::get('/shop/login', [AuthController::class, 'showShopLoginForm'])->name('shop.login');
Route::post('/shop/login', [AuthController::class, 'shopLogin']);
Route::get('/shop/registration', [AuthController::class, 'showShopRegistrationForm'])->name('shop.registration');
Route::post('/shop/registration', [AuthController::class, 'shopRegister']);
Route::post('/shop/logout', [AuthController::class, 'shopLogout'])->name('shop.logout');

//Email Verification
/*Route::get('/email/verify',[AuthController::class, 'verifyNotice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [AuthController::class, 'verifyHandler'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
*/ // Reset Password
Route::view('/forgot-password', 'auth.forgot-password')->middleware('guest')->name('password.request');
Route::post('/forgot-password',[ResetPasswordController::class, 'passwordEmail']);
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->middleware('guest')->name('password.update');


  