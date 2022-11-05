<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


//Admin
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
Route::get('/admin/customers', [AdminHomeController::class, 'viwe_customer'])->name('viwe_customer');

//Customer
Route::get('/customer/dash', [CustomerHomeController::class, 'index'])->name('customer_home')->middleware('customer:customer');
Route::get('/login', [CustomerLoginController::class, 'index'])->name('customer_login');
Route::post('/customer/login-submit', [CustomerLoginController::class, 'login_submit'])->name('customer_login_submit');
Route::get('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer_logout');
Route::get('/customer/forget-password', [CustomerLoginController::class, 'forget_password'])->name('customer_forget_password');
Route::post('/customer/forget-password-submit', [CustomerLoginController::class, 'forget_password_submit'])->name('customer_forget_password_submit');
Route::get('/customer/reset-password/{token}/{email}', [CustomerLoginController::class, 'reset_password'])->name('customer_reset_password');
Route::post('/customer/reset-password-submit', [CustomerLoginController::class, 'reset_password_submit'])->name('customer_reset_password_submit');
Route::get('/customer/edit-profile', [CustomerProfileController::class, 'index'])->name('customer_profile')->middleware('customer:customer');
Route::post('/customer/edit-profile-submit', [CustomerProfileController::class, 'profile_submit'])->name('customer_profile_submit');
Route::get('/registration', [CustomerLoginController::class, 'signup'])->name('customer_signup');
Route::post('/signup-submit', [CustomerLoginController::class, 'signup_submit'])->name('customer_signup_submit');
Route::get('/signup-verify/{email}/{token}', [CustomerLoginController::class, 'signup_verify'])->name('customer_signup_verify');


//Product
Route::get('/product/product',[ProductController::class, 'myProducts'])->name('myProducts');
Route::get('/product/addProduct',[ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/product/addProduct',[ProductController::class, 'addProduct_submit'])->name('addProduct_submit');
Route::get('/product/editProduct/{id}',[ProductController::class, 'editProduct'])->name('editProduct');
Route::post('/product/editProduct',[ProductController::class, 'editProduct_submit'])->name('editProduct_submit');
Route::get('/product/deleteProduct/{id}',[ProductController::class, 'deleteProduct'])->name('deleteProduct');

