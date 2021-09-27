<?php

use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\ShoppingCartController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\Service\ImageUploadController;
use App\Http\Controllers\UserController as User;
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

Route::get('/about-us',[Controller::class, 'view_about_us'])->name('view_about_us');

Route::get('/contact-us',[Controller::class,'view_contact'])->name('contactus_view');
Route::post('/contact-us',[Controller::class,'contact'])->name('contactus_send');
Route::get('/send-mail/{id}',[Controller::class,'send_mail'])->name('mail_send');

Route::get('/signin',[Controller::class,'view_login'])->name('login_register');
Route::post('/register',[User::class,'register'])->name('register');
Route::post('/login',[User::class,'login'])->name('user_login');
Route::get('/user/profile',[User::class,'profile'])->name('user_profile');
Route::get('/edit/profile',[User::class,'edit_profile'])->name('edit_profile');
Route::post('/edit/profile',[User::class,'update'])->name('update_profile');
Route::get('/user/logout',[User::class,'logout'])->name('user_logout');

Route::get('/cart',[ShoppingCartController::class,'show_cart'])->name('cart_view');
Route::post('/add-to-cart',[ShoppingCartController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/remove_from_cart',[ShoppingCartController::class,'remove'])->name('remove_cart');

Route::post('/create_order',[ShoppingCartController::class,'create_order'])->name('create_order');
Route::get('/orders',[Controller::class,'list_order'])->name('list_order_client');
Route::get('/{id}/show-order-detail',[OrderDetailController::class,'show_order_detail'])->name('show_order_detail');

Route::get('/payment/{id}',[Controller::class,'payment'])->name('payment');
Route::get('/payment/response',function (){
    return redirect('/');
});

Route::post('/paypal_payment/create',[PaypalController::class,'create_payment'])->name('create_payment');
Route::post('/paypal_payment/execute-payment',[PaypalController::class,'execute_payment'])->name('execute_payment');
Route::get('/paypal_payment/success/{id}',[PaypalController::class,'payment_success'])->name('payment_success');
