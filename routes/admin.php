<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductOptionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('list_user');
    Route::get('/{id}/delete', [UserController::class, 'destroy'])->name('delete_user');
    Route::get('/update-status/{id}', [UserController::class, 'update_status'])->name('user_update_status');
    Route::get('/create',[UserController::class,'create'])->name('create_user');
    Route::post('/create',[UserController::class,'store'])->name('save_user');
});
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('list_product');
    Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('/update-status/{id}', [ProductController::class, 'update_status'])->name('product_update_status');
    Route::get('/create',[ProductController::class,'create'])->name('create_product');
    Route::post('/create',[ProductController::class,'store'])->name('save_product');
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('list_category');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete_category'); // chưa hoàn thiện ( 50% )
    Route::get('/update-status/{id}', [CategoryController::class, 'update_status'])->name('category_update_status');
    Route::get('/create',[CategoryController::class,'create'])->name('create_category');
    Route::post('/create',[CategoryController::class,'store'])->name('save_category');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('list_contact');
    Route::get('/{id}/delete', [ContactController::class, 'destroy'])->name('delete_contact');
});



Route::prefix('color')->group(function () {
    Route::get('/', [ColorController::class, 'index'])->name('list_color');
    Route::get('/{id}/delete', [ColorController::class, 'destroy'])->name('delete_color'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [ColorController::class, 'update_status'])->name('color_update_status');
    Route::get('/create',[ColorController::class,'create'])->name('create_color');
    Route::post('/create',[ColorController::class,'store'])->name('save_color');

    Route::get('/{id}/edit',[ColorController::class,'edit'])->name('edit_color');
    Route::post('/{id}/edit',[ColorController::class,'update'])->name('update_color');


});

Route::prefix('banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('list_banner');
    Route::get('/{id}/delete', [BannerController::class, 'destroy'])->name('delete_banner');
    Route::get('/update-status/{id}', [BannerController::class, 'update_status'])->name('banner_update_status');
    Route::get('/create',[BannerController::class,'create'])->name('create_banner');
    Route::post('/create',[BannerController::class,'store'])->name('save_banner');
});




Route::prefix('brand')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('list_brand');
    Route::get('/{id}/delete', [BrandController::class, 'destroy'])->name('delete_brand'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [BrandController::class, 'update_status'])->name('brand_update_status');
    Route::get('/create',[BrandController::class,'create'])->name('create_brand');
    Route::post('/create',[BrandController::class,'store'])->name('save_brand');
});








Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('list_order');
});

Route::prefix('order-detail')->group(function () {
    Route::get('/', [OrderDetailController::class, 'index'])->name('list_order_detail');
});

Route::prefix('product-option')->group(function () {
    Route::get('/', [ProductOptionController::class, 'index'])->name('list_product_option');
});
