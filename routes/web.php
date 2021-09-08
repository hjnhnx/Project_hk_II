<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\ImageUploadController;
use App\Http\Middleware\CheckIsAdmin;
use Illuminate\Support\Facades\Route;

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

//Route::prefix('admin')->group(function (){
Route::prefix('admin')->middleware(['auth',CheckIsAdmin::class])->group(function (){
    require_once __DIR__ . '/admin.php';
});
Route::get('admin/user/login', [UserController::class, 'login'])->name('admin_login');
Route::post('admin/user/login', [UserController::class, 'process_login'])->name('admin_process_login');



Route::post('/image/upload',[ImageUploadController::class,'upload'])->name('upload_image');
Route::post('/image/uploads',[ImageUploadController::class,'uploads'])->name('upload_images');


Route::get('/',[Controller::class,'home'])->name('home_page');
Route::get('/product',[Controller::class,'product'])->name('product');
Route::get('/product/{slug}',[Controller::class,'product_detail'])->name('product_detail');


