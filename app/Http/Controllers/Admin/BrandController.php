<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Brand::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('name', 'like', '%' . $search . '%');
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
        if ($sort && $sort == Sort::SORT_NAME_ASC) {
            $query_builder->orderBy('name', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_NAME_DESC) {
            $query_builder->orderBy('name', 'DESC')->get();
        }
        if ($request->status){
            $query_builder->where('status',$request->status);
        }
        $the_firm = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.brands.table', ['list' => $the_firm, 'key_search' => $search, 'sort' => $sort,'status'=>$request->status]);
    }
    public function destroy($id)
    {
        $products = Product::query()->where('brand_id',$id)->get();
        foreach ($products as $product){
            Product_option::query()->where('product_id',$product->id)->delete();
            $product->delete();
        }
        Brand::find($id)->delete();
        return back();
    }

    public function update_status($id)
    {
        $theFirm = Brand::find($id);
        if ($theFirm->status == Status::ACTIVE) {
            $theFirm->status = Status::IN_ACTIVE;
        } else {
            $theFirm->status = Status::ACTIVE;
        }
        $theFirm->save();
    }

    public function create()
    {
        $detail = null;
        return view('admin.brands.form',['detail'=>$detail]);
    }

    public function store(BrandRequest $request)
    {
        $the_firm = new Brand();
        $the_firm->fill($request->all());
        $the_firm->save();
        return redirect()->route('list_brand');
    }
    public function edit($id){
        $detail = Brand::find($id);
        return view('admin.brands.form',['detail'=>$detail]);
    }
    public function update(Request $request,$id){
        $brand = Brand::find($id);
        $brand->fill($request->all());
        $brand->save();
        return redirect()->route('list_brand');
    }
}
