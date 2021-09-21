<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use stdClass;

class ShoppingCartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $quantity = 1;
        $id = $request->product_option_id;
        $product_option = Product_option::find($id);
        if ($product_option == null || $product_option->quantity < 1) {
            return response()->json([
                'code' => 404,
                'message' => 'Sản phẩm này đã hết hàng'
            ]);
        }
        if ($request->action) {
            if ($request->quantity > $product_option->quantity) {
                return response()->json([
                    'code' => 401,
                    'quantity_product' => $product_option->quantity,
                    'message' => 'Sản phẩm này đã hết hàng'
                ]);
            }
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        $product = Product::find($product_option->product_id);
        $price = number_format($request->quantity * ($product->price + $product_option->price - ($product->price + $product_option->price) * $product->discount / 100));
        if (!array_key_exists($id, $shoppingCart)) {
            $cartItem = new stdClass();
            $cartItem->id = $product_option->id;
            $cartItem->product_name = $product->name;
            $cartItem->ram = $product_option->ram;
            $cartItem->rom = $product_option->rom;
            $cartItem->color = Color::find($product_option->color_id)->color_code;
            $cartItem->thumbnail = $product_option->thumbnail;
            $cartItem->price = $product->price + $product_option->price - ($product->price + $product_option->price) * $product->discount / 100;
            $cartItem->quantity = $quantity;
        } else {
            $cartItem = $shoppingCart[$id];
            if ($request->action) {
                $quantity = $request->quantity;
                $cartItem->quantity = $quantity;
            } else {
                if ($cartItem->quantity + 1 > $product_option->quantity) {
                    return response()->json([
                        'code' => 401,
                        'quantity_product' => $product_option->quantity,
                        'message' => 'Thêm sản phẩm đã đạt giới hạn'
                    ]);
                } else {
                    $cartItem->quantity += $quantity;
                }
            }
        }
        $shoppingCart[$id] = $cartItem;
        Session::put('shoppingCart', $shoppingCart);
        $list = [];
        if (Session::has('shoppingCart')) {
            $list = array_reverse(Session::get('shoppingCart'));
        }
        $total_price = 0;
        foreach (Session::get('shoppingCart') as $item) {
            $total_price += $item->price * $item->quantity;
        }
        return response()->json([
            'list' => $list,
            'code' => 200,
            'price' => $price,
            'price_'=> $request->quantity * ($product->price + $product_option->price - ($product->price + $product_option->price) * $product->discount / 100),
            'total_price' => number_format($total_price),
            'p_quantity' => sizeof(Session::get('shoppingCart')),
            'message' => 'add to cart success !',
        ]);
    }

    public function show_cart()
    {
        $list = [];
        if (Session::has('shoppingCart')) {
            $list = array_reverse(Session::get('shoppingCart'));
        }
        $total_price = 0;
        if (!Session::has('shoppingCart')) {
            Session::put('shoppingCart', []);
        }

        foreach (Session::get('shoppingCart') as $item) {
            $total_price += $item->price * $item->quantity;
        }
        return view('client.cart', [
            'banner' => null, 'sub_banner' => null,
            'list' => $list,
            'total_price' => $total_price
        ]);
    }

    public function remove(Request $request)
    {
        $id = $request->product_id;
        $shopping_cart = null;
        $shopping_cart = Session::get('shoppingCart');
        unset($shopping_cart[$id]);
        Session::put('shoppingCart', $shopping_cart);
        $total_price = 0;
        foreach (Session::get('shoppingCart') as $item) {
            $total_price += $item->price * $item->quantity;
        }
        return response()->json([
            'code' => 200,
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
            'total_price' => number_format($total_price),
            'p_count' => sizeof(Session::get('shoppingCart')),
        ]);
    }

    public function create_order(Request $request){
        if (!$request->no_cart == 1){
            $shopping_cart = Session::get('shoppingCart');
            $buy_item = [];
            $amount = 0;
            foreach (json_decode($request->all_id) as $key => $item){
                $id_cart = json_decode($request->all_id)[$key];
                array_push($buy_item , $id_cart);
                $amount += $shopping_cart[$id_cart]->price * $shopping_cart[$id_cart]->quantity;
            }

            $order = new Order();
            $order->fill($request->all());
            $order->total_price = $amount;
            if (Auth::check()){
                $order->user_id = Auth::id();
            }
            $order->order_code = random_int(100000000,999999999);
            $order->save();

            foreach ($buy_item as $item){
                $product_option = Product_option::find($item);
                $order_detail = new Order_Detail();
                $order_detail->product_option_id = $product_option->id;
                $order_detail->product_id = $product_option->product_id;
                $order_detail->quantity = $shopping_cart[$item]->quantity;
                $order_detail->unit_price = $shopping_cart[$item]->price;
                $order_detail->order_id = $order->id;
                $order_detail->save();
                $this->delete_cart($item);
            }
        }else{
            $order = new Order();
            $order->fill($request->all());
            $order->total_price = $request->total_price;
            if (Auth::check()){
                $order->user_id = Auth::id();
            }
            $order->order_code = random_int(100000000,999999999);
            $order->save();
            $product_option = Product_option::find(json_decode($request->all_id)[0]);
            $order_detail = new Order_Detail();
            $order_detail->product_option_id = $product_option->id;
            $order_detail->product_id = $product_option->product_id;
            $order_detail->quantity = 1;
            $order_detail->unit_price = $request->total_price;
            $order_detail->order_id = $order->id;
            $order_detail->save();
        }

        return view('client.checkout',[
            'order'=>Order::query()->where('id',$order->id)->with('order_detail')->first(),
            'banner' => null,
            'sub_banner' => null,
        ]);

    }

    public function delete_cart($id){
        $shopping_cart = Session::get('shoppingCart');
        unset($shopping_cart[$id]);
        Session::put('shoppingCart', $shopping_cart);
    }
}
