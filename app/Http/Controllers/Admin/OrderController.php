<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CheckoutStatus;
use App\Enums\Sort;
use App\Http\Controllers\Controller;
use App\Jobs\SendMailUpdate;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort');
        $search = $request->query('search');
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
        if ($search) {
            $query_builder->where('ship_phone','like','%'.$search.'%')
                ->orWhere('ship_name','like','%'.$search.'%')
                ->orWhere('ship_email','like','%'.$search.'%')
                ->orWhere('ship_address','like','%'.$search.'%')
                ->orWhere('total_price','like','%'.$search.'%')
            ;
        }


        if ($request->status){
            $query_builder->where('status',$request->status);
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
        if ($request->ship_address){
            $query_builder->where('ship_address','like','%'.$request->ship_address.'%');
        }
        if ($request->order_code){
            $query_builder->where('order_code',$request->order_code);
        }
        if ($request->user_phone){
            $query_builder->where('ship_phone','like','%'.$request->user_phone.'%');
        }
        $orders = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.orders.table', [
            'amount'=>$amount,
            'list' => $orders,
            'key_search' => $search,
            'sort'=>$sort,
            'status'=>$request->status,
            'date_filter'=>$request->date_filter,
            'user_name'=>$request->user_name,
            'ship_address'=>$request->ship_address,
            'order_code'=>$request->order_code,
            'user_phone'=>$request->user_phone,
        ]);
    }

    public function update_status(Request $request){
        $order_id = [];
        foreach (json_decode($request->array_id) as $item){
            $order = Order::find($item);
            $order->status = $request->desire;
            $order->save();
            array_push($order_id,$order->id);
        }
        $this->dispatch(new SendMailUpdate(collect($order_id)->toArray()));
        return back();
    }
}
