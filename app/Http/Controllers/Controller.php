<?php

namespace App\Http\Controllers;

use App\Enums\BannerType;
use App\Enums\Status;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home(){
        $brands = Brand::query()->with('product')->orderBy('name','ASC')->get();
        $banner = Banner::query()->where('type',BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type',BannerType::SUBBANNER)->take(3)->get();
        return view('client.index',['brands'=>$brands,'banner'=>$banner,'sub_banner'=>$sub_banner]);
    }

    public function product_detail($slug){
        $banner = Banner::query()->where('type',BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type',BannerType::SUBBANNER)->take(3)->get();
        $product = Product::query()->where('slug',$slug)->with('product_option')->first();
        return view('client.product_detail',['detail'=>$product,'banner'=>$banner,'sub_banner'=>$sub_banner]);
    }







    public function product(Request $request){
        $brand_s = $request->brand_s;
        $price_s = $request->price_s;




        $query_builder = Product::query();
        if ($brand_s){
            $query_builder->orderBy('price','DESC')->where('status',Status::ACTIVE)->where('brand_id',Brand::query()->where('name',$brand_s)->first()->id);
        }


        if ($price_s && $price_s == 't->c'){
            $query_builder->orderBy('price','ASC')->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == 'c->t'){
            $query_builder->orderBy('price','DESC')->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '<2tr'){
            $query_builder->where('price','<',2000000)->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '2tr->5tr'){
            $query_builder->where('price','>=',2000000)->where('price','<',5000000)->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '5tr->10tr'){
            $query_builder->where('price','>=',5000000)->where('price','<',10000000)->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '10tr->15tr'){
            $query_builder->where('price','>=',10000000)->where('price','<',15000000)->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '15tr->20tr'){
            $query_builder->where('price','>=',15000000)->where('price','<',20000000)->where('status',Status::ACTIVE);
        }
        elseif ($price_s && $price_s == '>20tr'){
            $query_builder->where('price','>=',20000000)->where('status',Status::ACTIVE);
        }






        $product_new = Product::query()->orderBy('id','DESC')->where('status',Status::ACTIVE)->take(5)->get();
        $product_sale = Product::query()->orderBy('discount','DESC')->where('status',Status::ACTIVE)->take(5)->get();
        $brands = Brand::query()->where('status',Status::ACTIVE)->get();

        $products = $query_builder->paginate(20);

        return view('client.products',[
            'list'=>$products,
            'banner'=>null,
            'sub_banner'=>null,
            'product_sale'=>$product_sale,
            'product_new'=>$product_new,
            'brands'=>$brands
        ]);
    }
}
