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

Route::get('/', function () {
    return view('admin.dashboard.dashboard');
});
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('list_user');
    Route::get('/logout',[UserController::class,'logout'])->name('user_logout');
    Route::get('/{id}/delete', [UserController::class, 'destroy'])->name('delete_user');
    Route::get('/update-status/{id}', [UserController::class, 'update_status'])->name('user_update_status');
    Route::get('/create',[UserController::class,'create'])->name('create_user');
    Route::post('/create',[UserController::class,'store'])->name('save_user');
    Route::get('/{id}/edit',[UserController::class,'edit'])->name('edit_user');
    Route::post('/{id}/edit',[UserController::class,'update'])->name('update_user');
    Route::get('/{id}/profile',[UserController::class,'detail'])->name('show_profile');
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('list_product');
    Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('/update-status/{id}', [ProductController::class, 'update_status'])->name('product_update_status');
    Route::get('/create', [ProductController::class, 'create'])->name('create_product');
    Route::post('/create', [ProductController::class, 'store'])->name('save_product');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit_product');
    Route::post('/{id}/edit', [ProductController::class, 'update'])->name('update_product');
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('list_category');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete_category');
    Route::get('/update-status/{id}', [CategoryController::class, 'update_status'])->name('category_update_status');
    Route::get('/create', [CategoryController::class, 'create'])->name('create_category');
    Route::post('/create', [CategoryController::class, 'store'])->name('save_category');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit_category');
    Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('update_category');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('list_contact');
    Route::get('/{id}/delete', [ContactController::class, 'destroy'])->name('delete_contact');
});


Route::prefix('color')->group(function () {
    Route::get('/', [ColorController::class, 'index'])->name('list_color');
    Route::get('/{id}/delete', [ColorController::class, 'destroy'])->name('delete_color');
    Route::get('/update-status/{id}', [ColorController::class, 'update_status'])->name('color_update_status');
    Route::get('/create', [ColorController::class, 'create'])->name('create_color');
    Route::post('/create', [ColorController::class, 'store'])->name('save_color');
    Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('edit_color');
    Route::post('/{id}/edit', [ColorController::class, 'update'])->name('update_color');
});

Route::prefix('banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('list_banner');
    Route::get('/{id}/delete', [BannerController::class, 'destroy'])->name('delete_banner');
    Route::get('/update-status/{id}', [BannerController::class, 'update_status'])->name('banner_update_status');
    Route::get('/create', [BannerController::class, 'create'])->name('create_banner');
    Route::post('/create', [BannerController::class, 'store'])->name('save_banner');
    Route::get('/{id}/edit', [BannerController::class, 'edit'])->name('edit_banner');
    Route::post('/{id}/edit', [BannerController::class, 'update'])->name('update_banner');
});


Route::prefix('brand')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('list_brand');
    Route::get('/{id}/delete', [BrandController::class, 'destroy'])->name('delete_brand'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [BrandController::class, 'update_status'])->name('brand_update_status');
    Route::get('/create', [BrandController::class, 'create'])->name('create_brand');
    Route::post('/create', [BrandController::class, 'store'])->name('save_brand');
    Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('edit_brand');
    Route::post('/{id}/edit', [BrandController::class, 'update'])->name('update_brand');
});

Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('list_order');
});

Route::prefix('order-detail')->group(function () {
    Route::get('/', [OrderDetailController::class, 'index'])->name('list_order_detail');
});

Route::prefix('product-option')->group(function () {
    Route::get('/', [ProductOptionController::class, 'index'])->name('list_product_option');
    Route::get('/{id}/edit',[ProductOptionController::class,'edit'])->name('edit_product_option');
    Route::post('/{id}/edit',[ProductOptionController::class,'update'])->name('update_product_option');
});
