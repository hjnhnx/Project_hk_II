<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product_option;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function index(){
        $product_option = Product_option::all();
        return view('admin.product_options.table',['product_options'=>$product_option]);
    }
    public function edit($id){
        $detail = Product_option::find($id);
        $color = Color::query()->where('status',Status::ACTIVE)->get();
        return view('admin.product_options.form',['detail'=>$detail,'color'=>$color]);
    }
    public function update(Request $request,$id){
        $product_option = Product_option::find($id);
        $product_option->thumbnail = $request->thumbnail;
        $product_option->quantity = $request->quantity;
        $product_option->color_id = $request->color_id;
        $product_option->ram = $request->ram;
        $product_option->rom = $request->rom;
        $product_option->save();
        return redirect()->route('list_product_option');
    }
}
