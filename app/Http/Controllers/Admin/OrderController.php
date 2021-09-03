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
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Order::query();
        $query_builder->whereHas('users', function ($query) use ($search) {
            $query->where('firstname', 'like', '%' . $search . '%')
                ->orWhere('lastname', 'like', '%' . $search . '%')
                ->orWhere('ship_phone', 'like', '%' . $search . '%')
                ->orWhere('ship_email', 'like', '%' . $search . '%')
                ->orWhere('ship_address', 'like', '%' . $search . '%');
        });
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
        return view('admin.orders.table', ['list' => $orders, 'key_search' => $search,'sort'=>$sort,'status'=>$request->status]);
    }
}
