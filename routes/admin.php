<?php


use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user/list',[UserController::class,'index'])->name('list_user');
