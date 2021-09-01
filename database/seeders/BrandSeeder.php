<?php

namespace Database\Seeders;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name'=>'Apple',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()
            ],
            [
                'name'=>'SamSung',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name'=>'Xiaomi',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-2)
            ],
            [
                'name'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-3)
            ],
            [
                'name'=>'Zte',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-4)
            ],
            [
                'name'=>'Sony',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-5)
            ],
            [
                'name'=>'LG',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-6)
            ],
            [
                'name'=>'Asus',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-7)
            ],
            [
                'name'=>'Oppo',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-8)
            ],
            [
                'name'=>'Nokia',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-9)
            ],
            [
                'name'=>'Vivo',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-10)
            ],
            [
                'name'=>'Google',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-11)
            ],
            [
                'name'=>'Motorola',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-12)
            ],
        ]);
    }
}
