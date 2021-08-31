<?php

namespace App\Http\Controllers\admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = SubCategories::query();
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
        $subcategories = $query_builder->paginate(10);
        return view('admin.subcategories.table', ['list' => $subcategories,'key_search'=>$search,'sort'=>$sort]);
    }

    public function destroy($id){
        SubCategories::find($id)->delete();
        return back();
    }

    public function update_status($id){
        $subCategory = SubCategories::find($id);
        if ($subCategory->status == Status::ACTIVE) {
            $subCategory->status = Status::IN_ACTIVE;
        } else {
            $subCategory->status = Status::ACTIVE;
        }
        $subCategory->save();
    }
    public function create(){
        $categories = Categories::query()->where('status',Status::ACTIVE)->get();
        return view('admin.subcategories.form',[
            'categories'=>$categories
        ]);
    }
    public function store(Request $request){
        $sub = new SubCategories();
        $sub->fill($request->all());
        $sub->save();
        return redirect()->route('list_subcategory');
    }

}
