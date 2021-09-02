<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [
               'name' => 'iPhone 12 64GB',
               'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
               'discount' => '50',
               'category_id' => 1,
               'thumbnail'=>'http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg',
               'images'=>'["http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg","http://localhost:8000/images/admin_data/images/20210902014917-440439101ec85748f1a0c2f19b3f0680130ec3.jpg","http://localhost:8000/images/admin_data/images/20210902014917-30952515085502_591915637681021_5420424684372040797_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-71906193571796_1586094581538169_7520446001098784768_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-7318981600100264_Tong-hop-hinh-anh-gai-xinh-trieu-like-tren-FaceBook.jpg"]',
               'brand_id' => 1,
               'content_detail'=>'<p><span style="font-weight: bold;">Camera : 65 mp</span></p><p><span style="font-weight: bold;">Kháng nước : IP 900</span></p><p><span style="font-weight: 700;">Vi sử lý : SD 888</span></p>',
               'slug' => 'iPhone-12-64GB',
               'status'=>Status::ACTIVE,
               'created_at'=>Carbon::now()->addDay(-1)
           ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone 11 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'category_id' => 1,
                'thumbnail'=>'http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg',
                'images'=>'["http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg","http://localhost:8000/images/admin_data/images/20210902014917-440439101ec85748f1a0c2f19b3f0680130ec3.jpg","http://localhost:8000/images/admin_data/images/20210902014917-30952515085502_591915637681021_5420424684372040797_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-71906193571796_1586094581538169_7520446001098784768_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-7318981600100264_Tong-hop-hinh-anh-gai-xinh-trieu-like-tren-FaceBook.jpg"]',
                'brand_id' => 1,
                'content_detail'=>'<p><span style="font-weight: bold;">Camera : 65 mp</span></p><p><span style="font-weight: bold;">Kháng nước : IP 900</span></p><p><span style="font-weight: 700;">Vi sử lý : SD 888</span></p>',
                'slug' => 'iPhone-11-64GB',
                'status'=>Status::IN_ACTIVE,
                'created_at'=>Carbon::now()->addDay(-2)
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone X 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'category_id' => 1,
                'thumbnail'=>'http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg',
                'images'=>'["http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg","http://localhost:8000/images/admin_data/images/20210902014917-440439101ec85748f1a0c2f19b3f0680130ec3.jpg","http://localhost:8000/images/admin_data/images/20210902014917-30952515085502_591915637681021_5420424684372040797_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-71906193571796_1586094581538169_7520446001098784768_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-7318981600100264_Tong-hop-hinh-anh-gai-xinh-trieu-like-tren-FaceBook.jpg"]',
                'brand_id' => 1,
                'content_detail'=>'<p><span style="font-weight: bold;">Camera : 65 mp</span></p><p><span style="font-weight: bold;">Kháng nước : IP 900</span></p><p><span style="font-weight: 700;">Vi sử lý : SD 888</span></p>',
                'slug' => 'iPhone-X-64GB',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-3)
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone 8 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'category_id' => 1,
                'thumbnail'=>'http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg',
                'images'=>'["http://localhost:8000/images/admin_data/images/20210902014917-10908966b6de496ddad46b1ce4244321d9616d.jpg","http://localhost:8000/images/admin_data/images/20210902014917-440439101ec85748f1a0c2f19b3f0680130ec3.jpg","http://localhost:8000/images/admin_data/images/20210902014917-30952515085502_591915637681021_5420424684372040797_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-71906193571796_1586094581538169_7520446001098784768_n.jpg","http://localhost:8000/images/admin_data/images/20210902014917-7318981600100264_Tong-hop-hinh-anh-gai-xinh-trieu-like-tren-FaceBook.jpg"]',
                'brand_id' => 1,
                'content_detail'=>'<p><span style="font-weight: bold;">Camera : 65 mp</span></p><p><span style="font-weight: bold;">Kháng nước : IP 900</span></p><p><span style="font-weight: 700;">Vi sử lý : SD 888</span></p>',
                'slug' => 'iPhone-8-64GB',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-4)
            ],
        ]);
    }
}
