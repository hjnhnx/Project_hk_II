<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Chip_set;
use Illuminate\Http\Request;

class ChipSetController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Chip_set::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('name','like','%'.$search.'%')
                ->orWhere('process','=',$search)
                ->orWhere('manufacturer','like','%'.$search.'%')
            ;
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
        $chip_sets = $query_builder->paginate(10);
        return view('admin.chip_sets.table',['list'=>$chip_sets,'key_search'=>$search,'sort'=>$sort]);
    }

    public function destroy($id){
        Chip_set::find($id)->delete();
        return back();
    }

    public function update_status($id){
        $chip_set = Chip_set::find($id);
        if ($chip_set->status == Status::ACTIVE) {
            $chip_set->status = Status::IN_ACTIVE;
        } else {
            $chip_set->status = Status::ACTIVE;
        }
        $chip_set->save();
    }
    public function create(){
        return view('admin.chip_sets.form');
    }
    public function store(Request $request){
        $chip_set = new Chip_set();
        $chip_set->fill($request->all());
        $chip_set->save();
        return redirect()->route('list_chip_set');
    }
}
