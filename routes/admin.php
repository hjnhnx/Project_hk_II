<?php
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;



Route::prefix('user')->group(function (){
    Route::get('/list',[UserController::class,'index'])->name('list_user');
});
Route::prefix('product')->group(function (){
    Route::get('/list',[ProductController::class,'index'])->name('list_product');
});
Route::prefix('category')->group(function (){
    Route::get('/list',[CategoryController::class,'index'])->name('list_category');
});
Route::prefix('contact')->group(function (){
    Route::get('/list',[ContactController::class,'index'])->name('list_contact');
});
Route::prefix('configuration')->group(function (){
    Route::get('/list',[ConfigurationController::class,'index'])->name('list_configuration');
});



