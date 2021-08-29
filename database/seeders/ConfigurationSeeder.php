<?php

namespace Database\Seeders;

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
                'value'=>($i+1).'gb/ram : 64GB',
                'created_at'=>Carbon::now()->addDay(-$i)
            ]);
        }
    }
}
