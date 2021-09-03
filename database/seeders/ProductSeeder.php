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
               'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
               'images'=>'["https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg","https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg","http://kenh14cdn.com/thumb_w/660/2018/5/29/306041951895727784346372303616811700060160n-1527605319565851621152.jpg","https://matkinhcan.com/wp-content/uploads/2021/06/dei-kinh-can-nen-de-kieu-toc-nao.jpg"]',
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
                'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
                'images'=>'["https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg","https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg","http://kenh14cdn.com/thumb_w/660/2018/5/29/306041951895727784346372303616811700060160n-1527605319565851621152.jpg","https://matkinhcan.com/wp-content/uploads/2021/06/dei-kinh-can-nen-de-kieu-toc-nao.jpg"]',
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
                'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
                'images'=>'["https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg","https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg","http://kenh14cdn.com/thumb_w/660/2018/5/29/306041951895727784346372303616811700060160n-1527605319565851621152.jpg","https://matkinhcan.com/wp-content/uploads/2021/06/dei-kinh-can-nen-de-kieu-toc-nao.jpg"]',
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
                'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
                'images'=>'["https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg","https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg","http://kenh14cdn.com/thumb_w/660/2018/5/29/306041951895727784346372303616811700060160n-1527605319565851621152.jpg","https://matkinhcan.com/wp-content/uploads/2021/06/dei-kinh-can-nen-de-kieu-toc-nao.jpg"]',
                'brand_id' => 1,
                'content_detail'=>'<p><span style="font-weight: bold;">Camera : 65 mp</span></p><p><span style="font-weight: bold;">Kháng nước : IP 900</span></p><p><span style="font-weight: 700;">Vi sử lý : SD 888</span></p>',
                'slug' => 'iPhone-8-64GB',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-4)
            ],
        ]);
    }
}
