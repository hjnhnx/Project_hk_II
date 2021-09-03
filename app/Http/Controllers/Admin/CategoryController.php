<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Categories::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('name','like','%'.$search.'%');
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
        $categories = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.categories.table', ['list' => $categories,'key_search'=>$search,'sort'=>$sort,'status'=>$request->status]);
    }
    public function destroy($id){
        $products = Product::query()->where('category_id',$id)->get();
        foreach ($products as $product){
            Product_option::query()->where('product_id',$product->id)->delete();
            $product->delete();
        }
        Categories::find($id)->delete();
        return back();
    }

    public function update_status($id){
        $category = Categories::find($id);
        if ($category->status == Status::ACTIVE){
            $category->status = Status::IN_ACTIVE;
        }else{
            $category->status = Status::ACTIVE;
        }
        $category->save();
    }
    public function create(){
        $detail = null;
        return view('admin.categories.form',[
            'detail'=>$detail]);
    }
    public function store(Request $request){
        $category = new Categories();
        $category->fill($request->all());
        $category->save();
        return redirect()->route('list_category');
    }
    public function edit($id){
        $detail = Categories::find($id);
        return view('admin.categories.form',['detail'=>$detail]);
    }
    public function update(Request $request,$id){
        $category = Categories::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('list_category');
    }
}
