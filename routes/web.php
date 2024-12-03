<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopSetupController;
use App\Http\Controllers\ShopCatalogController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ShopProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsServiceProvider;
use App\Http\Middleware\IsNotServiceProvider;
use App\Http\Middleware\Admin;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;

// Routes
Route::view('/user/profile', 'user.userProfile')->name('user.profile');
Route::get('/', [SidebarController::class, 'index'])->name('index');
Route::get('/popular', [SidebarController::class, 'popular'])->name('popular');
Route::get('/explore', [SidebarController::class, 'explore'])->name('explore');
Route::get('/barbershops', [SidebarController::class, 'barbershops'])->name('barbershops');
Route::get('/beauty-salons', [SidebarController::class, 'beautySalons'])->name('beauty-salons');
Route::get('/nail-salons', [SidebarController::class, 'nailSalons'])->name('nail-salons');
Route::get('/hair-salons', [SidebarController::class, 'hairSalons'])->name('hair-salons');
Route::get('/faqs', [SidebarController::class, 'faqs'])->name('faqs');

Route::get('/view/shop/{id}/{branchId}', [SidebarController::class, 'view'])->name('shop.view');


//AJAX content routes
// Route::get('/home', [SidebarController::class, 'homeContent'])->name('home.content');
// Route::get('/appointments/upcoming-content', [SidebarController::class, 'appointmentsContent'])->name('appointments.content');
// Route::get('/explore-content', [SidebarController::class, 'exploreContent'])->name('explore.content');

//Routes that are only accessible to guests
Route::middleware('guest')->group(function () {
    Route::get('/user/login', [AuthController::class, 'showUserLoginForm'])->name('login');
    Route::post('/user/login', [AuthController::class, 'userLogin']);
    Route::get('/user/registration', [AuthController::class, 'showUserRegistrationForm'])->name('user.registration');
    Route::post('/user/registration', [AuthController::class, 'userRegister']);



    // User Reset Password
    //Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('auth.forgot-password');
    Route::view('/forgot-password', 'auth.forgot-password')->middleware('guest')->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'passwordEmail']);
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');
});

//Routes that are only accessible to authenticated users
Route::middleware('auth')->group(function () {
    Route::post('/user/logout', [AuthController::class, 'userLogout'])->name('user.logout');
    Route::get('/book/shop/{id}/{branchId}', [AppointmentController::class, 'bookNow'])->name('book-appointment');
    Route::get('/book2/shop/{id}/{branchId}', [AppointmentController::class, 'bookNow2'])->name('book-appointment2');
    Route::get('/book3/shop/{id}/{branchId}', [AppointmentController::class, 'bookNow3'])->name('book-appointment3');
    Route::get('/book4/shop/{id}/{branchId}', [AppointmentController::class, 'bookNow4'])->name('book-appointment4');
    Route::post('/book/shop/{id}/{branchId}', [AppointmentController::class, 'firstProcess'])->name('first-process');
    Route::put('/book2/shop/{id}/{branchId}', [AppointmentController::class, 'secondProcess'])->name('second-process');
    Route::put('/book3/shop/{id}/{branchId}', [AppointmentController::class, 'thirdProcess'])->name('third-process');
    Route::put('/book4/shop/{id}/{branchId}', [AppointmentController::class, 'lastProcess'])->name('last-process');

    Route::get('/appointments', [SidebarController::class, 'appointments'])->name('appointments');
    Route::get('/send-feedback', [SidebarController::class, 'sendFeedback'])->name('send-feedback');
    Route::get('/report', [SidebarController::class, 'reportIssue'])->name('report-issue');

    // Only allow non-service providers to access registration routes
    Route::middleware(IsNotServiceProvider::class)->group(function () {
        Route::get('/shop/registration', [AuthController::class, 'showShopRegistrationForm'])->name('shop.registration');
        Route::post('/shop/registration', [ShopSetupController::class, 'shopRegister'])->name('shop.register');
    });
});


//Routes for Shop Pages Only Accessible to Service Providers
Route::middleware(IsServiceProvider::class)->group(function () {
    Route::get('/shop/dashboard', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/shop', function () {
        return redirect()->route('shop.index');
    });
    Route::get('/shop/profile', [ShopProfileController::class, 'index'])->name('shop.profile');
    Route::post('/shop/profile/image-upload', [ShopProfileController::class, 'uploadImages'])->name('shop.upload-images');
    Route::get('/shop/catalog', [ShopCatalogController::class, 'catalog'])->name('shop.catalog');
    Route::get('/shop/branches', [ShopController::class, 'manageBranches'])->name('shop.manage-branches');
    Route::get('/shop/appointment', [ShopController::class, 'appointment'])->name('shop.appointment');
});

Route::middleware(Admin::class)->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/shops', [AdminController::class, 'shops'])->name('admin.shops');
    Route::get('/admin/manageUsers', [AdminController::class, 'customers'])->name('admin.customers');
    Route::get('/admin/appointments', [AdminController::class, 'appointments'])->name('admin.appointments');
    Route::get('/admin/manageBranches', [AdminController::class, 'manageBranches'])->name('admin.manage-branches');
    Route::get('/admin/invoice', [AdminController::class, 'invoice'])->name('admin.invoice');
    Route::get('/admin/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    Route::get('/admin/customerService', [AdminController::class, 'customerService'])->name('admin.customer-service');
    Route::get('/admin/userFeedback', [AdminController::class, 'userFeedback'])->name('admin.user-feedback');
    Route::get('/admin/restrictions', [AdminController::class, 'restrictions'])->name('admin.restrictions');
    Route::get('/admin/platformStaff', [AdminController::class, 'platformStaff'])->name('admin.platform-staff');
    Route::get('/admin/manageAccounts', [AdminController::class, 'manageAccounts'])->name('admin.manage-accounts');
    Route::get('/admin', function () {
        return redirect()->route('admin.dashboard');
    });
});
