<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductOptionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    Route::get('/list', [UserController::class, 'index'])->name('list_user');
});

Route::prefix('product')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('list_product');
});

Route::prefix('category')->group(function () {
    Route::get('/list', [CategoryController::class, 'index'])->name('list_category');
});

Route::prefix('contact')->group(function () {
    Route::get('/list', [ContactController::class, 'index'])->name('list_contact');
});

Route::prefix('configuration')->group(function () {
    Route::get('/list', [ConfigurationController::class, 'index'])->name('list_configuration');
});

Route::prefix('order-detail')->group(function () {
    Route::get('/list', [OrderDetailController::class, 'index'])->name('list_order_detail');
});

Route::prefix('subcategory')->group(function () {
    Route::get('/list', [SubCategoryController::class, 'index'])->name('list_subcategory');
});

Route::prefix('order')->group(function () {
    Route::get('/list', [OrderController::class, 'index'])->name('list_order');
});

Route::prefix('product-option')->group(function () {
    Route::get('/list', [ProductOptionController::class, 'index'])->name('list_product_option');
});

Route::prefix('color')->group(function () {
    Route::get('/list', [ColorController::class, 'index'])->name('list_color');
});

Route::prefix('banner')->group(function () {
    Route::get('/list', [BannerController::class, 'index'])->name('list_banner');
});
