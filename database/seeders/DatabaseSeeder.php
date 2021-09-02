<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ProductOptionSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            ContactSeeder::class,
            ColorSeeder::class,
            BannerSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class

        ]);
    }
}
