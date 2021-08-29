<?php


use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('user/list',[UserController::class,'index'])->name('list_user');

Route::get('category/list',[CategoryController::class,'index'])->name('list_category');
Route::get('contact/list',[ContactController::class,'index'])->name('list_contact');

Route::get('configuration/list',[ConfigurationController::class,'index'])->name('list_configuration');

