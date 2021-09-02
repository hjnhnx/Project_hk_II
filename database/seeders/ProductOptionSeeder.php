<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_options')->insert([
            [
                'product_id'=>1,
                'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
                'color_id'=>1,
                'ram'=>8,
                'rom'=>128,
                'quantity'=>30,
                'price'=>100,
                'created_at'=>Carbon::now()
            ],
            [
                'product_id'=>2,
                'thumbnail'=>'https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg',
                'color_id'=>2,
                'ram'=>12,
                'rom'=>256,
                'quantity'=>20,
                'price'=>150,
                'created_at'=>Carbon::now(-1)
            ],
        ]);
    }
}
