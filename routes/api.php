<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\CategoryController;
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

Route::get('/product/rentproduct',[ProductController::class, 'APIAllProducts']);
Route::post('/product/addProduct',[ProductController::class, 'APIAddProduct']);
Route::get('/product/deleteProduct/{id}',[ProductController::class, 'APIDeleteProduct'])->middleware("APIAuth");
Route::get('/product/toggleProduct/{id}',[ProductController::class, 'APIToggleProduct'])->middleware("APIAuth");
Route::get('/product/myProduct',[ProductController::class, 'APIMyProducts'])->middleware("APIAuth");

Route::get('/product/categories',[CategoryController::class, 'APIAllCategories'])->middleware("APIAuth");

Route::get('/product/rentProduct',[ProductController::class,'APIList']);

Route::post('/login',[CustomerLoginController::class, 'APIlogin']);
Route::post('/logout',[CustomerLoginController::class, 'APIlogout']);
Route::post('/signUp',[CustomerLoginController::class, 'APIsignUp']);

