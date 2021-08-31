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
            'name' => 'Smart TV',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-1)
        ]);
        DB::table('categories')->insert([
            'name' => 'Smart Phone',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-2)
        ]);
        DB::table('categories')->insert([
            'name' => 'Laptop',
            'status'=> Status::IN_ACTIVE,
            'created_at'=> Carbon::now()->addDay(-3)
        ]);
        DB::table('categories')->insert([
            'name' => 'TabLed',
            'status'=> Status::ACTIVE,
            'created_at'=> Carbon::now()->addDay(-4)
        ]);
    }
}
