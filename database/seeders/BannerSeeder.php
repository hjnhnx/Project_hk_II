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
                'image'=>'https://mobisoftinfotech.com/resources/wp-content/uploads/2017/09/Highlights-From-Apple%E2%80%99s-Keynote-Event-2017-Banner-1.png',
                'content'=>'Mở bán iphone X Nhanh tay đặt hàng để sở hữu siêu phẩm',
                'video'=>'https://www.youtube.com/embed/dgJ33gBAq3c',
                'link_to_product'=>'http://localhost:8000/product/iPhone-X-64GB',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'http://www.jjelectrocity.com/uploads/news/news-banner-eaf27ede-9115-4ddf-9cef-cf88e77f180c.jpg',
                'content'=>'Mở bán Samsung galaxy S9 Chỉ từ 5 triệu',
                'video'=>'https://www.youtube.com/embed/r4eJN-7GOsQ',
                'link_to_product'=>'http://localhost:8000/product/Samsung-Galaxy-S9',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'https://i01.appmifile.com/webfile/globalimg/0320/TO-B/New-Product-Banner/note-10pro-pc-banner-global.jpg',
                'content'=>'Mở bán redmi note 10 pro Chỉ từ 5 triệu',
                'video'=>'https://www.youtube.com/embed/E1le7r3DO48',
                'link_to_product'=>'http://localhost:8000/product/Xiaomi-Redmi-Note-10-Pro',
                'type'=>BannerType::BANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],


            [
                'image'=>'https://mobisoftinfotech.com/resources/wp-content/uploads/2017/09/Highlights-From-Apple%E2%80%99s-Keynote-Event-2017-Banner-1.png',
                'content'=>'Mở bán iphone X Nhanh tay đặt hàng để sở hữu siêu phẩm',
                'video'=>'https://www.youtube.com/embed/E1le7r3DO48',
                'link_to_product'=>'http://localhost:8000/product/iPhone-X-64GB',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'http://www.jjelectrocity.com/uploads/news/news-banner-eaf27ede-9115-4ddf-9cef-cf88e77f180c.jpg',
                'content'=>'Mở bán Samsung galaxy S9 Chỉ từ 5 triệu',
                'video'=>'https://www.youtube.com/embed/E1le7r3DO48',
                'link_to_product'=>'http://localhost:8000/product/Samsung-Galaxy-S9',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
            [
                'image'=>'https://i01.appmifile.com/webfile/globalimg/0320/TO-B/New-Product-Banner/note-10pro-pc-banner-global.jpg',
                'content'=>'Mở bán redmi note 10 pro Chỉ từ 5 triệu',
                'video'=>'https://www.youtube.com/embed/E1le7r3DO48',
                'link_to_product'=>'http://localhost:8000/product/Xiaomi-Redmi-Note-10-Pro',
                'type'=>BannerType::SUBBANNER,
                'status'=> Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1),
            ],
        ]);
    }
}
