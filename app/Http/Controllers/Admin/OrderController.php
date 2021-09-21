<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CheckoutStatus;
use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Nette\Utils\DateTime;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort');
        $query_builder = Order::query();

        $amount = 0;
        foreach (Order::query()->where('is_checkout',CheckoutStatus::PAID)->get() as $item){
            $amount += $item->total_price;
        }

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
        if ($request->member && $request->member == 1){
            $query_builder->where('user_id','!=',null);
        }
        if ($request->member && $request->member == 2){
            $query_builder->where('user_id','=',null);
        }


        if ($request->date_filter && $request->date_filter == 'now'){
            $query_builder->where('created_at','>',Carbon::now()->addDay(-1));
        }

        if ($request->date_filter && $request->date_filter == '7day'){
            $query_builder->where('created_at','>',Carbon::now()->addDay(-7));
        }

        if ($request->date_filter && $request->date_filter == '15day'){
            $query_builder->where('created_at','>',Carbon::now()->addDay(-15));
        }

        if ($request->date_filter && $request->date_filter == '30day'){
            $query_builder->where('created_at','>',Carbon::now()->addDay(-30));
        }





        if ($request->user_name){
            $query_builder->where('ship_name','like','%'.$request->user_name.'%');
        }
        if ($request->user_email){
            $query_builder->where('ship_email','like','%'.$request->user_email.'%');
        }
        if ($request->user_address){
            $query_builder->where('ship_address','like','%'.$request->user_address.'%');
        }
        if ($request->order_code){
            $query_builder->where('order_code',$request->order_code);
        }
        if ($request->user_phone){
            $query_builder->where('ship_phone','like','%'.$request->user_phone.'%');
        }
        if ($request->order_code){
            $query_builder->where('order_code',$request->order_code);
        }






        $orders = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.orders.table', ['amount'=>$amount,'list' => $orders, 'key_search' => '','sort'=>$sort,'status'=>$request->status]);
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
