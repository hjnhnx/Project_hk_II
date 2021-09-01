<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Brand::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('firstname', 'like', '%' . $search . '%')
                ->orWhere('lastname', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('birthday', 'like', '%' . $search . '%');
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
        $the_firm = $query_builder->paginate(10);
        return view('admin.brands.table', ['list' => $the_firm, 'key_search' => $search, 'sort' => $sort]);
    }

    public function destroy($id)
    {
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
        return view('admin.brands.form');
    }

    public function store(Request $request)
    {
        $the_firm = new Brand();
        $the_firm->fill($request->all());
        $the_firm->save();
        return redirect()->route('list_brand');
    }
}
