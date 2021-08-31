<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Banner::query();
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
        $banners = $query_builder->paginate(10);
        return view('admin.banners.table', ['list' => $banners,'key_search'=>$search,'sort'=>$sort]);
    }

    public function destroy($id){
        Banner::find($id)->delete();
        return back();
    }

    public function update_status($id){
        $banner = Banner::find($id);
        if ($banner->status == Status::ACTIVE) {
            $banner->status = Status::IN_ACTIVE;
        } else {
            $banner->status = Status::ACTIVE;
        }
        $banner->save();
    }

}
