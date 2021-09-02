<?php

use App\Http\Controllers\Service\ImageUploadController;
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

Route::prefix('admin')->group(function (){
    require_once __DIR__ . '/admin.php';
});





Route::get('/', function () {
    return view('welcome');
});

Route::post('/image/upload',[ImageUploadController::class,'upload'])->name('upload_image');
Route::post('/image/uploads',[ImageUploadController::class,'uploads'])->name('upload_images');
