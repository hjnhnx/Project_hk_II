<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = Color::query();
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
        $colors = $query_builder->orderBy('id','DESC')->paginate(10);
        return view('admin.colors.table', ['list' => $colors,'key_search'=>$search,'sort'=>$sort,'status'=>$request->status]);

    }

    public function destroy($id){
        $product_option = Product_option::query()->where('color_id',$id)->get();

        foreach ($product_option as $option){
            if (sizeof(Product_option::query()->where('product_id',$option->product_id)->get()) == 1) {
                Product::find($option->product_id)->delete();
            }
            $option->delete();
        }
        Color::find($id)->delete();
        return back();
    }

    public function update_status($id){
        $color = Color::find($id);
        if ($color->status == Status::ACTIVE) {
            $color->status = Status::IN_ACTIVE;
        } else {
            $color->status = Status::ACTIVE;
        }
        $color->save();
    }
    public function create(){
        $detail = null;
        return view('admin.colors.form',['detail'=>$detail]);
    }

    public function store(ColorRequest $request){
        $user = new Color();
        $user->fill($request->all());
        $user->save();
        return redirect()->route('list_color');
    }




    public function edit($id){
        $detail = Color::find($id);
        return view('admin.colors.form',['detail'=>$detail]);
    }

    public function update(Request $request,$id){
        $color = Color::find($id);
        $color->name = $request->name;
        $color->color_code = $request->color_code;
        $color->save();
        return redirect()->route('list_color');
    }


}
