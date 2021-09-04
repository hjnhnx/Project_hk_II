<?php

namespace App\Http\Controllers;

use App\Enums\BannerType;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home(){
        $brands = Brand::query()->with('product')->orderBy('name','ASC')->get();
        $banner = Banner::query()->where('type',BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type',BannerType::SUBBANNER)->take(2)->get();
        return view('client.index',['brands'=>$brands,'banner'=>$banner,'sub_banner'=>$sub_banner]);
    }

    public function product_detail($slug){
        $banner = Banner::query()->where('type',BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type',BannerType::SUBBANNER)->take(2)->get();
        $product = Product::query()->where('slug',$slug)->with('product_option')->first();
        return view('client.product_detail',['detail'=>$product,'banner'=>$banner,'sub_banner'=>$sub_banner]);
    }
}
