<?php

namespace App\Http\Controllers;

use App\Enums\Sort;
use App\Models\Categories;
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
        $categories = $query_builder->paginate(10);
        return view('admin.categories.table', ['list' => $categories,'key_search'=>$search,'sort'=>$sort]);
    }
}
