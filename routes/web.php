<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|------------------c--------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/contact', [HomeController::class, "contact"]);

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get('/admin', [AdminHomeController::class,"index"])->name("ad_home");

Route::prefix("/admin")->name("admin.")->middleware('auth')->group(function () {
    Route::prefix("/products")->name("products.")->group(function () {
        Route::get('/', [AdminProductsController::class, "index"])->name("index");
        Route::get('/create-products', [AdminProductsController::class, "create"])->name("create");
        Route::get('/{id}/edit-products', [AdminProductsController::class, "edit"])->name("edit");
        Route::post('/upsert/{id?}', [AdminProductsController::class, "upsert"])->name("upsert");
        Route::post('/destroy/{id}', [AdminProductsController::class, "destroy"])->name("destroy");
    });
});

Route::prefix('/admin')->name("admin.")->group(function(){
    Route::prefix('/account')->name("account.")->group(function(){
    Route::get('/register', [AdminAccountController::class, "register"])->name("register");
    Route::post('/register', [AdminAccountController::class, "save"])->name("save");
    Route::get('/login', [AdminAccountController::class, "login"])->name("login");
    Route::post('/login', [AdminAccountController::class, "auth"])->name("auth");
    Route::get('/logout', [AdminAccountController::class, "logout"])->name("logout");
    });
});


Route::prefix('/account')->name("account.")->group(function(){
    Route::get('/register', [AccountController::class, "register"])->name("register");
    Route::post('/register', [AccountController::class, "save"])->name("save");
    Route::get('/login', [AccountController::class, "login"])->name("login");
    Route::post('/login', [AccountController::class, "auth"])->name("auth");
    Route::get('/logout', [AccountController::class, "logout"])->name("logout");
});


Route::prefix('/products')->name("products.")->group(function(){
    Route::get('/{id}/details', [ProductsController::class, "detailsClient"])->name("detailsClient");
    Route::get('/special-offers', [ProductsController::class, "special_offers"])->name("special_offers");
});