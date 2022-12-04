<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderlistController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/product',[ProductController::class, 'APIAllProducts']);
Route::post('/product/addProduct',[ProductController::class, 'APIAddProduct']);

Route::post('/login',[CustomerLoginController::class, 'APIlogin']);
Route::post('/login',[CustomerLogoutController::class, 'APIlogout']);
