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
            ],
            [
                'name'=>'Kirin 970',
                'process'=>10,
                'manufacturer'=>'Huawei',
                'status'=>Status::IN_ACTIVE,
                'created_at'=>Carbon::now()->addDay(-9)
            ],
        ]);
    }
}
