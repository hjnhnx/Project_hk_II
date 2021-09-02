<?php

namespace Database\Seeders;

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
            'image'=>'https://didongviet.vn/pub/media/catalog/product//s/a/samsung-galaxy-a52-8gb-128gb-didongviet.jpg',
            'content'=>'content 1',
            'video'=>'https://www.youtube.com/embed/3dJVOZtMLso',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::ACTIVE,
            'created_at'=>Carbon::now()->addDay(-1),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://hoanghamobile.com/i/preview/Uploads/2021/03/10/a72.png',
            'content'=>'content 2',
            'video'=>'https://www.youtube.com/embed/_pMkCPs4QnA',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::ACTIVE,
            'created_at'=>Carbon::now()->addDay(-2),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://www.duchuymobile.com/images/detailed/35/dong_lfr0-e7.jpg',
            'content'=>'content 3',
            'video'=>'https://www.youtube.com/embed/1iL715ByLNk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::ACTIVE,
            'created_at'=>Carbon::now()->addDay(-3),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-z-5g-oversea/listpage/Phone-List-product-list-Aurora-427-x-600.png',
            'content'=>'content 4',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-4),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://cdn.tgdd.vn/Products/Images/42/237103/oppo-a95-5g-600x600.jpg',
            'content'=>'content 5',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-5),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://phucanhcdn.com/media/product/39111_oppo__a31_6gb__white__2.jpg',
            'content'=>'content 6',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-6),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://didongviet.vn/pub/media/wysiwyg/Dien-Thoai/OPPO/man-hinh-dt-oppo-reno-3-pro-didongviet.jpg',
            'content'=>'content 7',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-7),
        ]);
        DB::table('banners')->insert([
            'image'=>'data:image/jpeg;base64,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',
            'content'=>'content 8',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-8),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://cdn01.dienmaycholon.vn/filewebdmclnew/public//picture/product/product17727/product_17727_9.png',
            'content'=>'content 9',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-9),
        ]);
        DB::table('banners')->insert([
            'image'=>'https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/286885732.jpeg',
            'content'=>'content 10',
            'video'=>'https://www.youtube.com/embed/CwgFOJYjkRk',
            'link_to_product'=>'http://facebook.com',
            'status'=> Status::IN_ACTIVE,
            'created_at'=>Carbon::now()->addDay(-10),
        ]);
    }
}
