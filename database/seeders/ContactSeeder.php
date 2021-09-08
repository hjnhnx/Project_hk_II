<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Đạt',
            'email' => '@gmail.com',
            'phone' => '0987987789',
            'message'=>'mình là Lê Thành Đạt',
            'created_at'=> Carbon::now()->addDay(-1)
        ]);
        DB::table('contacts')->insert([
            'name' => 'Đẹt',
            'email' => '@gmail.com',
            'phone' => '0987987789',
            'message'=>'mình là Lê Thành Đạt',
            'created_at'=> Carbon::now()->addDay(-2)
        ]);
        DB::table('contacts')->insert([
            'name' => 'Đạt nè',
            'email' => '@gmail.com',
            'phone' => '0987987789',
            'message'=>'mình là Lê Thành Đạt',
            'created_at'=> Carbon::now()->addDay(-3)
        ]);
        DB::table('contacts')->insert([
            'name' => 'Đạt hihi',
            'email' => '@gmail.com',
            'phone' => '0987987789',
            'message'=>'mình là Lê Thành Đạt',
            'created_at'=> Carbon::now()->addDay(-4)
        ]);

    }
}
