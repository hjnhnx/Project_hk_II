<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort');
        $query_builder = Order::query();
        if ($sort && $sort == Sort::SORT_ID_ASC) {
            $query_builder->orderBy('id', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_ID_DESC) {
            $query_builder->orderBy('id', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_ASC) {
            $query_builder->orderBy('created_at', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_DESC) {
            $query_builder->orderBy('created_at', 'DESC')->get();
        }
        if ($request->status){
            $query_builder->where('status',$request->status);
        }
        $orders = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.orders.table', ['list' => $orders, 'key_search' => '','sort'=>$sort,'status'=>$request->status]);
    }

    public function update_status(Request $request){
        foreach (json_decode($request->array_id) as $item){
            $order = Order::find($item);
            $order->status = $request->desire;
            $order->save();
        }
        return back();
    }
}
