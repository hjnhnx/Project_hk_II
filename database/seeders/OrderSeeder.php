<?php

namespace Database\Seeders;

use App\Enums\CheckoutStatus;
use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 532; $i > 0; $i--) {
            Order::create([
                'total_price'=>random_int(12000000,30000000),
                'order_code'=>random_int(100000000,999999999),
                'ship_name'=>User::find(random_int(1,103))->firstname . ' ' .User::find(random_int(1,103))->lastname,
                'ship_phone'=>User::find(random_int(1,103))->phone,
                'ship_email'=>User::find(random_int(1,103))->email,
                'ship_address'=>User::find(random_int(1,103))->address,
                'is_checkout'=>$i%7==0 ?CheckoutStatus::UNPAID :CheckoutStatus::PAID,
                'status'=>$i%7==0 ?OrderStatus::Cancel :OrderStatus::Complete,
                'note'=>'Mặt hàng dễ vỡ xin nhẹ tay',
                'created_at'=>Carbon::now()->addDay(-$i)
            ]);

        }
    }
}
