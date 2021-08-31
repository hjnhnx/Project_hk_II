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
            'name' => 'cam',
            'color_code' => ' #ff4000',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-1)
        ]);
        DB::table('colors')->insert([
            'name' => 'vàng',
            'color_code' => ' #ffff00',
            'status' => Status::IN_ACTIVE,
            'created_at' => Carbon::now()->addDay(-2)
        ]);
        DB::table('colors')->insert([
            'name' => 'xanh lá',
            'color_code' => ' #80ff00',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-3)
        ]);
        DB::table('colors')->insert([
            'name' => 'xanh biển',
            'color_code' => ' #0080ff',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-4)
        ]);
        DB::table('colors')->insert([
            'name' => 'tím',
            'color_code' => ' #bf00ff',
            'status' => Status::ACTIVE,
            'created_at' => Carbon::now()->addDay(-5)
        ]);
    }
}
