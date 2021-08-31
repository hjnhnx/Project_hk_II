<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\SubCategories;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        for ($i = 0; $i < 200; $i++) {
            SubCategories::create([
                'category_id'=>$i,
                'name'=>$fake->name,
                'status'=>Status::ACTIVE,
                'created_at'=>Carbon::now()->addDay(-$i)
            ]);
        }
    }
}
