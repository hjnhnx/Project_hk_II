<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Color;
use App\Models\Configuration;
use App\Models\Product;
use App\Models\TheFirm;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Product::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
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
        $products = $query_builder->paginate(10);
        return view('admin.products.table', ['list' => $products, 'key_search' => $search, 'sort' => $sort]);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return back();
    }

    public function update_status($id)
    {
        $product = Product::find($id);
        if ($product->status == Status::ACTIVE) {
            $product->status = Status::IN_ACTIVE;
        } else {
            $product->status = Status::ACTIVE;
        }
        $product->save();
    }

    public function create(){
        $category = Categories::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $the_firms = TheFirm::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $colors = Color::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $configuration = Configuration::query()->where('status',Status::ACTIVE)->orderBy('ram','ASC')->get();
        return view('admin.products.form',['categories'=>$category,'the_firms'=>$the_firms,'colors'=>$colors,'configuration'=>$configuration]);
    }


}
