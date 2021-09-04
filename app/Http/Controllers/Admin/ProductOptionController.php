<?php

namespace App\Http\Controllers\Admin;
use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product_option;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Product_option::query();

        if ($search && strlen($search) > 0) {
            $query_builder->whereHas('product',function ($query) use ($search){
                $query->where('name', 'like', '%' . $search . '%');
            });
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
        if ($sort && $sort == Sort::SORT_PRICE_ASC) {
            $query_builder->orderBy('price', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_DESC) {
            $query_builder->orderBy('price', 'DESC')->get();
        }
        if ($request->color_s){
            $query_builder->where('color_id',$request->color_s);
        }
        $product_option = $query_builder->orderBy('id','DESC')->paginate(10);
        $colors = Color::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();


        return view('admin.product_options.table', [
            'product_options' => $product_option,
            'key_search'=>$search,
            'sort'=>$sort,
            'colors'=>$colors,
            'color_s'=>$request->color_s
        ]);
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
        $product_option->price = $request->price;
        $product_option->ram = $request->ram;
        $product_option->rom = $request->rom;
        $product_option->save();
        return redirect()->route('list_product_option');
    }
}
