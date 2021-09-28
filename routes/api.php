<?php

use App\Http\Controllers\Admin\ShoppingCartController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get-data-product/{id}',[Controller::class,'get_data_product'])->name('get_data_product');

Route::get('/brand',[Controller::class,'get_data_brand']);
Route::post('/filter',[Controller::class,'get_data_filter']);


Route::get('/test',[Controller::class,'totalRevenue'])->name('hello');
Route::post('/filter-money',[Controller::class,'filter_money'])->name('hello');
