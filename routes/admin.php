<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ChipSetController;
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
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('list_category');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete_category'); // chưa hoàn thiện ( 50% )
    Route::get('/update-status/{id}', [CategoryController::class, 'update_status'])->name('category_update_status');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('list_contact');
    Route::get('/{id}/delete', [ContactController::class, 'destroy'])->name('delete_contact');
});

Route::prefix('configuration')->group(function () {
    Route::get('/', [ConfigurationController::class, 'index'])->name('list_configuration');
    Route::get('/{id}/delete', [ConfigurationController::class, 'destroy'])->name('delete_configuration');
    Route::get('/update-status/{id}', [ConfigurationController::class, 'update_status'])->name('configuration_update_status');
});

Route::prefix('subcategory')->group(function () {
    Route::get('/', [SubCategoryController::class, 'index'])->name('list_subcategory');
    Route::get('/{id}/delete', [SubCategoryController::class, 'destroy'])->name('delete_subcategory'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [SubCategoryController::class, 'update_status'])->name('subcategory_update_status');
});

Route::prefix('color')->group(function () {
    Route::get('/', [ColorController::class, 'index'])->name('list_color');
    Route::get('/{id}/delete', [ColorController::class, 'destroy'])->name('delete_color'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [ColorController::class, 'update_status'])->name('color_update_status');
});

Route::prefix('banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('list_banner');
    Route::get('/{id}/delete', [BannerController::class, 'destroy'])->name('delete_banner');
    Route::get('/update-status/{id}', [BannerController::class, 'update_status'])->name('banner_update_status');
});

Route::prefix('Chip-set')->group(function () {
    Route::get('/', [ChipSetController::class, 'index'])->name('list_chip_set');
    Route::get('/{id}/delete', [ChipSetController::class, 'destroy'])->name('delete_chip_set'); // chưa hoàn thành ( 50% )
    Route::get('/update-status/{id}', [ChipSetController::class, 'update_status'])->name('chip_set_update_status');
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
