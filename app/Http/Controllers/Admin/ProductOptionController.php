<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function index(){
        return view('admin.product_options.table');
    }
}
