<?php

namespace Database\Seeders;

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
               'subcategory_id' => 1,
               'slug' => 'iPhone-12-64GB',
               'created_at'=>Carbon::now()->addDay(-1)
           ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone 11 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'subcategory_id' => 2,
                'slug' => 'iPhone-11-64GB',
                'created_at'=>Carbon::now()->addDay(-2)
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone X 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'subcategory_id' => 3,
                'slug' => 'iPhone-X-64GB',
                'created_at'=>Carbon::now()->addDay(-3)
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'iPhone 8 64GB',
                'description' => 'Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.',
                'discount' => '50',
                'subcategory_id' => 4,
                'slug' => 'iPhone-8-64GB',
                'created_at'=>Carbon::now()->addDay(-4)
            ],
        ]);
    }
}
