<?php

namespace Database\Seeders;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChipSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chip_sets')->insert([
            [
                'name'=>'Snapdragon 888',
                'process'=>4,
                'manufacturer'=>'Qualcomm',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()
            ],
            [
                'name'=>'Snapdragon 808',
                'process'=>20,
                'manufacturer'=>'Qualcomm',
                'status'=>Status::IN_ACTIVE,
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            [
                'name'=>'Snapdragon 730-G',
                'process'=>7,
                'manufacturer'=>'Qualcomm',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-2)
            ],
            [
                'name'=>'Snapdragon 865',
                'process'=>7,
                'manufacturer'=>'Qualcomm',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-3)
            ],
            [
                'name'=>'A-14 Bionic',
                'process'=>7,
                'manufacturer'=>'Apple',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-4)
            ],
            [
                'name'=>'A-11 Bionic',
                'process'=>12,
                'manufacturer'=>'Apple',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-5)
            ],
            [
                'name'=>'A-10 Fusion',
                'process'=>16,
                'manufacturer'=>'Apple',
                'status'=>Status::IN_ACTIVE,
                'created_at'=>Carbon::now()->addDay(-6)
            ],
            [
                'name'=>'Kirin 990',
                'process'=>7,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-7)
            ],
            [
                'name'=>'Kirin 980',
                'process'=>7,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-8)
            ],[
                'name'=>'Kirin 910',
                'process'=>17,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-9)
            ],[
                'name'=>'Kirin 920',
                'process'=>8,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-10)
            ],[
                'name'=>'Kirin 930',
                'process'=>9,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-11)
            ],[
                'name'=>'Kirin 940',
                'process'=>10,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-12)
            ],[
                'name'=>'Kirin 950',
                'process'=>11,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-13)
            ],[
                'name'=>'Kirin 960',
                'process'=>5,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-14)
            ],[
                'name'=>'Kirin 980',
                'process'=>2,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-15)
            ],[
                'name'=>'Kirin 990',
                'process'=>6,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-16)
            ],[
                'name'=>'Kirin 970',
                'process'=>6,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-17)
            ],[
                'name'=>'Kirin 940',
                'process'=>9,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-18)
            ],[
                'name'=>'Kirin 920',
                'process'=>7,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-19)
            ],[
                'name'=>'Kirin 980',
                'process'=>9,
                'manufacturer'=>'Huawei',
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-20)
            ]
        ]);
    }
}
