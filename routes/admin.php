<?php


use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user/list',[UserController::class,'index'])->name('list_user');
Route::get('product/list',[ProductController::class,'index'])->name('list_product');
