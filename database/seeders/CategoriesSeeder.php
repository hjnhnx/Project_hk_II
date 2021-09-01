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
            [
                'name' => 'Smart phone IOS',
                'status'=> Status::ACTIVE,
                'created_at'=> Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Smart phone Android',
                'status'=> Status::ACTIVE,
                'created_at'=> Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Tabled Android',
                'status'=> Status::ACTIVE,
                'created_at'=> Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'Tabled IOS',
                'status'=> Status::ACTIVE,
                'created_at'=> Carbon::now()->addDay(-1)
            ],
            [
                'name' => 'especially',
                'status'=> Status::ACTIVE,
                'created_at'=> Carbon::now()->addDay(-1)
            ],
        ]);
    }
}
