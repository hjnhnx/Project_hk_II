<?php

namespace Database\Seeders;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => 'bạc',
            'color_code' => '#CCCCCC',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-1)
        ]);
        DB::table('colors')->insert([
            'name' => 'vàng gold',
            'color_code' => '#FFCC33',
            'status' => Status::IN_ACTIVE,
            'created_at' => Carbon::now()->addDay(-2)
        ]);
        DB::table('colors')->insert([
            'name' => 'xanh lá',
            'color_code' => '#66FF66',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-3)
        ]);
        DB::table('colors')->insert([
            'name' => 'xanh dương',
            'color_code' => '#0000FF',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-4)
        ]);
        DB::table('colors')->insert([
            'name' => 'hồng',
            'color_code' => '#FF99FF',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-5)
        ]);
        DB::table('colors')->insert([
            'name' => 'đen nhám',
            'color_code' => '#333333',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-6)
        ]);
        DB::table('colors')->insert([
            'name' => 'trắng',
            'color_code' => '#EEEEEE',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-7)
        ]);
        DB::table('colors')->insert([
            'name' => 'đỏ',
            'color_code' => '#FF0000',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-8)
        ]);
        DB::table('colors')->insert([
            'name' => 'tím',
            'color_code' => '#bf00ff',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-9)
        ]);
        DB::table('colors')->insert([
            'name' => 'vàng',
            'color_code' => '#FFFF33',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-10)
        ]);
    }
}
