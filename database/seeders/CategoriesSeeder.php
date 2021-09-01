<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Http\Controllers\CategoryController;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id'=>'1',
            'name' => 'Smart TV',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-1)
        ]);
        DB::table('categories')->insert([
            'id'=>'2',
            'name' => 'Smart Phone',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-2)
        ]);
        DB::table('categories')->insert([
            'id'=>'3',
            'name' => 'Iphone',
            'status'=> Status::IN_ACTIVE,
            'created_at'=> Carbon::now()->addDay(-3)
        ]);
        DB::table('categories')->insert([
            'id'=>'4',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-4)
        ]);
        DB::table('categories')->insert([
            'id'=>'5',
            'name' => 'Samsung',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-5)
        ]);
        DB::table('categories')->insert([
            'id'=>'6',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-6)
        ]);
        DB::table('categories')->insert([
            'id'=>'7',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-7)
        ]);
        DB::table('categories')->insert([
            'id'=>'8',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-8)
        ]);
        DB::table('categories')->insert([
            'id'=>'9',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-9)
        ]);
        DB::table('categories')->insert([
            'id'=>'10',
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-10)
        ]);
    }
}
