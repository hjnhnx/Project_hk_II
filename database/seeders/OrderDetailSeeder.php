<?php

namespace Database\Seeders;

use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_option;
use Carbon\Carbon;
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
        for ($i = 1; $i <= 239; $i++) {
            $product_option = Product_option::query()->where('id',$i)->first();
            Order_Detail::create([
                'product_option_id'=>$product_option->id,
                'product_id'=>$product_option->product_id,
                'order_id'=>$i,
                'quantity'=>2,
                'unit_price'=>Product::find($product_option->product_id)->price + $product_option->price,
                'created_at'=>Carbon::now()->subDay($i)
            ]);
        }
        for ($i = 240; $i <= 500; $i++) {
            $product_option = Product_option::query()->where('id',random_int(1,239))->first();
            Order_Detail::create([
                'product_option_id'=>$product_option->id,
                'product_id'=>$product_option->product_id,
                'order_id'=>$i,
                'quantity'=>2,
                'unit_price'=>Product::find($product_option->product_id)->price + $product_option->price,
                'created_at'=>Carbon::now()->subDay($i)
            ]);
        }
    }
}
