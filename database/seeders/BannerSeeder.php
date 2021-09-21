<?php

namespace Database\Seeders;

use App\Enums\BannerType;
use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'image'=>'https://1.bp.blogspot.com/-OcMJ0MzkMts/YR9U3cKqbPI/AAAAAAAAIyY/TSfKKTyMRTMQIaB9a3lRcnIocZM6RI9YQCLcBGAsYHQ/s16000/Xiaomi%2BMI%2BMix%2BAlpha%2B5G.png',
                'content'=>'Mở bán iphone Xiaomi Mi Mix Alpha nhanh tay săn siêu phẩm',
                'video'=>'https://www.youtube.com/embed/VRGSz5ZaIZU',
                'link_to_product'=>'http://localhost:8000/product/xiaomi-mi-mix-alpha',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'https://www.xtmobile.vn/vnt_upload/news/08_2019/19/iphone-12-pro-xtmobile_-banner.jpg',
                'content'=>'Săn ngay siêu phẩm iphone 12 pro max , super sale',
                'video'=>'https://www.youtube.com/embed/HQor17IzsjQ',
                'link_to_product'=>'http://localhost:8000/product/Iphone-12-Pro-Max',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'http://cdn.shopify.com/s/files/1/1352/5175/collections/NOTE20_Facebook_BANNER_ed93795e-6943-4319-8ca4-64b91ee2f00c_1200x1200.jpg?v=1596717106',
                'content'=>'Đặt hàng Samsung galaxy note 20 ultra để nhận nhiều ưu đãi',
                'video'=>'https://www.youtube.com/embed/HbxgawS7IYY',
                'link_to_product'=>'http://localhost:8000/product/Samsung-Galaxy-Note-20-ultra',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],


            [
                'image'=>'https://1.bp.blogspot.com/-OcMJ0MzkMts/YR9U3cKqbPI/AAAAAAAAIyY/TSfKKTyMRTMQIaB9a3lRcnIocZM6RI9YQCLcBGAsYHQ/s16000/Xiaomi%2BMI%2BMix%2BAlpha%2B5G.png',
                'content'=>'Mở bán iphone Xiaomi Mi Mix Alpha nhanh tay săn siêu phẩm',
                'video'=>'https://www.youtube.com/embed/VRGSz5ZaIZU',
                'link_to_product'=>'http://localhost:8000/product/xiaomi-mi-mix-alpha',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'https://www.xtmobile.vn/vnt_upload/news/08_2019/19/iphone-12-pro-xtmobile_-banner.jpg',
                'content'=>'Săn ngay siêu phẩm iphone 12 pro max , super sale',
                'video'=>'https://www.youtube.com/embed/HQor17IzsjQ',
                'link_to_product'=>'http://localhost:8000/product/Iphone-12-Pro-Max',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'http://cdn.shopify.com/s/files/1/1352/5175/collections/NOTE20_Facebook_BANNER_ed93795e-6943-4319-8ca4-64b91ee2f00c_1200x1200.jpg?v=1596717106',
                'content'=>'Đặt hàng Samsung galaxy note 20 ultra để nhận nhiều ưu đãi',
                'video'=>'https://www.youtube.com/embed/HbxgawS7IYY',
                'link_to_product'=>'http://localhost:8000/product/Samsung-Galaxy-Note-20-ultra',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
        ]);
    }
}
