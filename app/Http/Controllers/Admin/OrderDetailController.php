<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $order_detail = Order_Detail::all();
        return view('admin.order_detail.table',['list'=>$order_detail]);
    }
}
