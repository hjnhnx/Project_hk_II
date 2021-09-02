<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'users_id'=>1,
                'total_price'=>12345,
                'ship_phone'=>'0987987789',
                'ship_email'=>'demo@gmail.com',
                'ship_address'=>'kim quan thach that ha noi',
                'note'=>'demo note order',
                'created_at'=>Carbon::now()
            ],
            [
                'users_id'=>2,
                'total_price'=>3456,
                'ship_phone'=>'0199999999',
                'ship_email'=>'demo2@gmail.com',
                'ship_address'=>'lũng cú lào cai',
                'note'=>'demo note order 2',
                'created_at'=>Carbon::now(-1)
            ],
        ]);
    }
}
