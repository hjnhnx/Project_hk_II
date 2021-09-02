<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'product_option_id'=>1,
                'order_id'=>1,
                'quantity'=>2,
                'unit_price'=>100,
            ],
            [
                'product_option_id'=>2,
                'order_id'=>2,
                'quantity'=>1,
                'unit_price'=>150,
            ],
        ]);
    }
}
