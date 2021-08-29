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

           UserSeeder::class,
           ProductSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            ContactSeeder::class,
            ConfigurationSeeder::class,
            SubCategoriesSeeder::class
            ColorSeeder::class,
            BannerSeeder::class
        ]);
    }
}
