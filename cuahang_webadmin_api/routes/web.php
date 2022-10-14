<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Category\CategoryController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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


Route::get("/", [AdminController::class, "index"]);
Route::get("/logout", [AdminController::class, "logout"]);

Route::group(["prefix" => "product"], function () {
    Route::get("/", [ProductController::class, "index"])->name('product');
    Route::get("/create", [ProductController::class, "create"])->name('add-product');;
    Route::post("/store", [ProductController::class, "store"]);
    Route::get("/edit/{id}", [ProductController::class, "edit"]);
    Route::post("/update/{id}", [ProductController::class, "update"]);
    Route::get("/delete/{id}", [ProductController::class, "delete"]);
});

Route::group(["prefix" => "category"], function () {
    Route::get("/", [CategoryController::class, "index"])->name('category');
    Route::post("/store", [CategoryController::class, "store"]);
    Route::get("/edit/{id}", [CategoryController::class, "edit"]);
    Route::post("/update/{id}", [CategoryController::class, "update"]);
    Route::get("/delete/{id}", [CategoryController::class, "delete"]);
});

Route::group(["prefix"=>"order"], function(){
    Route::get("/", [OrderController::class, "order"])->name('order');
    Route::get("/search/", [OrderController::class, "search"])->name('order-search');
    Route::get("/details/{id}", [OrderController::class, "details"]);

});

Route::group(["prefix"=>"backend"], function(){
    Route::get("order/update-status/{id}/{status}", [OrderController::class, "update"])->name('order-update');
});
Route::group(["prefix" => "user"], function () {
    Route::get("/", [UserController::class, "index"])->name('user');
    Route::get("/create", [UserController::class, "create"])->name('add-user');;
    Route::post("/store", [UserController::class, "store"]);
    Route::get("/edit/{id}", [UserController::class, "edit"]);
    Route::post("/update/{id}", [UserController::class, "update"]);
    Route::get("/delete/{id}", [UserController::class, "delete"]);
});
