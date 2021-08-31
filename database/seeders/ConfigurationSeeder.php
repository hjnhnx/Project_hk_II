<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Configuration;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Configuration::create([
                'ram'=>$i+1,
                'storage'=>$i+64,
                'status'=>($i % 10 == 2 ? Status::IN_ACTIVE : Status::ACTIVE ),
                'created_at'=>Carbon::now()->addDay(-$i)
            ]);
        }
    }
}
