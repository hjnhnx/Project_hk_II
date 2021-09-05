<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Color;
use App\Models\Configuration;
use App\Models\Product;
use App\Models\Product_option;
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
        if ($request->brand_s && strlen($request->brand_s) > 0){
            $query_builder->where('brand_id',$request->brand_s);
        }
        if ($request->category_s && strlen($request->category_s) > 0){
            $query_builder->where('category_id',$request->category_s);
        }
        if ($request->status){
            $query_builder->where('status',$request->status);
        }


        $products = $query_builder->orderBy('id','DESC')->paginate(10);
        $brands = Brand::query()->orderBy('name','ASC')->where('status',Status::ACTIVE)->get();
        $categories = Categories::query()->orderBy('name','ASC')->where('status',Status::ACTIVE)->get();
        return view('admin.products.table', ['list' => $products,
            'key_search' => $search,
            'sort' => $sort,
            'brands'=>$brands,
            'brand_s'=>$request->brand_s,
            'categories'=>$categories,
            'category_s'=>$request->category_s,
            'status'=>$request->status
            ]);
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        Product_option::query()->where('product_id',$id)->delete();
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
        $detail = null;
        $category = Categories::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $colors = Color::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $brand = Brand::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        return view('admin.products.form',['categories'=>$category,'colors'=>$colors,'brands'=>$brand,'detail'=>$detail]);
    }

    public function store(Request $request){
        $product = new Product();
        $product->fill($request->all());
        if (sizeof(Product::query()->where('slug',$product->slug)->get()) > 0){
            $product->slug = $request->slug .'-'. random_int(1000,9999);
        }
        $product->save();

        $option_images = json_decode($request->sm_option_images);
        $option_quanties = json_decode($request->sm_option_quantity);
        $option_prices = json_decode($request->sm_option_price);
        $option_colors = json_decode($request->sm_option_color);
        $option_rams = json_decode($request->sm_option_ram);
        $option_roms = json_decode($request->sm_option_rom);

        for ($i = 0 ; $i < sizeof($option_images); $i++){
            $product_option = new Product_option();
            $product_option->product_id = $product->id;
            $product_option->thumbnail = $option_images[$i];
            $product_option->quantity = $option_quanties[$i];
            $product_option->price = $option_prices[$i];
            $product_option->color_id = $option_colors[$i];
            $product_option->ram = $option_rams[$i];
            $product_option->rom = $option_roms[$i];
            $product_option->save();
        }
        return redirect()->route('list_product');
    }
    public function edit($id){
        $detail = Product::query()->where('id',$id)->with('product_option')->first();
        $category = Categories::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $colors = Color::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        $brand = Brand::query()->where('status',Status::ACTIVE)->orderBy('name','ASC')->get();
        return view('admin.products.form',['categories'=>$category,'colors'=>$colors,'brands'=>$brand,'detail'=>$detail]);
    }

    public function update(Request $request,$id){
        Product_option::query()->where('product_id',$id)->delete();
        $option_images = json_decode($request->sm_option_images);
        $option_quanties = json_decode($request->sm_option_quantity);
        $option_prices = json_decode($request->sm_option_price);
        $option_colors = json_decode($request->sm_option_color);
        $option_rams = json_decode($request->sm_option_ram);
        $option_roms = json_decode($request->sm_option_rom);
        for ($i = 0 ; $i < sizeof($option_images); $i++){
            $product_option = new Product_option();
            $product_option->product_id = $id;
            $product_option->thumbnail = $option_images[$i];
            $product_option->quantity = $option_quanties[$i];
            $product_option->price = $option_prices[$i];
            $product_option->color_id = $option_colors[$i];
            $product_option->ram = $option_rams[$i];
            $product_option->rom = $option_roms[$i];
            $product_option->save();
        }
        $product = Product::find($id);
        $name = $product->name;
        $slug = $product->slug;
        $product->fill($request->all());
        if ($name != $request->name && sizeof(Product::query()->where('slug',$product->slug)->where('id','!=',$id)->get()) > 0){
            $product->slug = $request->slug .'-'. random_int(1000,9999);
        }else {
            $product->slug = $slug;
        }
        $product->save();
        return redirect()->route('list_product');
    }


}
