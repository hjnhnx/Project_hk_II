<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CheckoutStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index(){
        $total_price = 0;
        $order_payment = Order::query()->where('is_checkout',CheckoutStatus::PAID)->get();

        foreach ($order_payment as $item){
            $total_price += $item->total_price;
        }

        return view('admin.dashboard.dashboard',[
            'total_order' => sizeof(Order::all()),
            'order_payment'=> sizeof($order_payment),
            'total_price'=>$total_price,
            'total_user'=>sizeof(User::all())
        ]);
    }
}
