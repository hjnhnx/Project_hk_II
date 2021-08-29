<?php

namespace Database\Seeders;

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
            'status'=> 1,
            'created_at'=> Carbon::now()->addDay(-1)
        ]);
        DB::table('categories')->insert([
            'name' => 'Smart Phone',
            'status'=> 1,
            'created_at'=> Carbon::now()->addDay(-2)
        ]);
        DB::table('categories')->insert([
            'name' => 'Laptop',
            'status'=> 1,
            'created_at'=> Carbon::now()->addDay(-3)
        ]);
        DB::table('categories')->insert([
            'name' => 'TabLed',
            'status'=> 1,
            'created_at'=> Carbon::now()->addDay(-4)
        ]);
    }
}
