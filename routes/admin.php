<?php


use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user/list',[UserController::class,'index'])->name('list_user');
Route::get('configuration/list',[ConfigurationController::class,'index'])->name('list_configuration');
