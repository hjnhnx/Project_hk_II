<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(Request $request){
        $sort = $request->query('sort');
        $query_builder = Order_Detail::query();
        if ($sort && $sort == Sort::SORT_CREATED_AT_ASC) {
            $query_builder->whereHas('order')->orderBy('created_at', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_DESC) {
            $query_builder->whereHas('order')->orderBy('created_at', 'DESC')->get();
        }
        $order_detail = $query_builder->with('product_option')->with('order')->paginate(10);
        return view('admin.order_detail.table',['list'=>$order_detail,'sort'=>$sort]);
        return view('admin.order_detail.table',['list'=>$order_detail]);
    }
}
