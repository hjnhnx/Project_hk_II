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
        DB::table('configurations')->insert([
            'ram' => 2,
            'storage' => 16
        ]);
        DB::table('configurations')->insert([
            'ram' => 2,
            'storage' => 32
        ]);
        DB::table('configurations')->insert([
            'ram' => 2,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 3,
            'storage' => 16
        ]);
        DB::table('configurations')->insert([
            'ram' => 3,
            'storage' => 32
        ]);
        DB::table('configurations')->insert([
            'ram' => 3,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 3,
            'storage' => 128
        ]);
        DB::table('configurations')->insert([
            'ram' => 4,
            'storage' => 16
        ]);
        DB::table('configurations')->insert([
            'ram' => 4,
            'storage' => 32
        ]);
        DB::table('configurations')->insert([
            'ram' => 4,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 4,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 4,
            'storage' => 128
        ]);
        DB::table('configurations')->insert([
            'ram' => 6,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 6,
            'storage' => 128
        ]);
        DB::table('configurations')->insert([
            'ram' => 6,
            'storage' => 256
        ]);
        DB::table('configurations')->insert([
            'ram' => 8,
            'storage' => 64
        ]);
        DB::table('configurations')->insert([
            'ram' => 8,
            'storage' => 128
        ]);
        DB::table('configurations')->insert([
            'ram' => 8,
            'storage' => 256
        ]);
        DB::table('configurations')->insert([
            'ram' => 12,
            'storage' => 128
        ]);
        DB::table('configurations')->insert([
            'ram' => 12,
            'storage' => 256
        ]);
    }
}
