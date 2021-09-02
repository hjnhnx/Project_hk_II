<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_option;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function index(){
        $product_option = Product_option::all();
        return view('admin.product_options.table',['product_options'=>$product_option]);
    }
}
