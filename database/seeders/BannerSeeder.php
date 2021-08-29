<?php

namespace Database\Seeders;

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
            'image'=>'https://taoanhonline.com/wp-content/uploads/2019/07/anh-nen-thien-nhien-118.jpg',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> 1,
            'created_at'=>Carbon::now()->addDay(-1),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://itcafe.vn/wp-content/uploads/2021/01/anh-gai-xinh-4.jpg',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> 2,
            'created_at'=>Carbon::now()->addDay(-2),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/05/gai-xinh-toc-ngan-facebook.jpg',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> 1,
            'created_at'=>Carbon::now()->addDay(-3),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://i.ytimg.com/vi/hBm76i9jV9c/hqdefault.jpg',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> 2,
            'created_at'=>Carbon::now()->addDay(-4),
        ]);
    }
}
