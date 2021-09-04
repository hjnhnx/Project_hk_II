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
}
