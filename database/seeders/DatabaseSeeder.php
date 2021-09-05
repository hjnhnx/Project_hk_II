<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\Status;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('users')->insert([
            ['firstname'=>'Nguyễn Xuân',
                'lastname'=>'Hjnh',
                'avatar'=>'https://kenh14cdn.com/2020/8/28/photo-1-15986171022051518128948.jpg',
                'address'=>'ha noi viet nam chau a thai binh duong',
                'phone'=>'0999999999',
                'birthday'=>$fake->date,
                'email'=>'admin@gmail.com',
                'role'=>Role::ADMIN,
                'status'=>Status::ACTIVE,
                'password'=>'$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW',
                'created_at'=>Carbon::now()->addDay(-1)
            ],
            ['firstname'=>'Người',
                'lastname'=>'Dùng',
                'avatar'=>'https://kenh14cdn.com/2020/8/28/photo-1-15986171022051518128948.jpg',
                'address'=>'ha noi viet nam chau a thai binh duong nguoi dung',
                'phone'=>'088888888',
                'birthday'=>$fake->date,
                'email'=>'noadmin@gmail.com',
                'role'=>Role::USER,
                'status'=>Status::ACTIVE,
                'password'=>'$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW',
                'created_at'=>Carbon::now()
            ],
        ]);
        $this->call([
            BrandSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ProductOptionSeeder::class,
//            UserSeeder::class,
            CategoriesSeeder::class,
            ContactSeeder::class,
            ColorSeeder::class,
            BannerSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class
        ]);



    }
}
