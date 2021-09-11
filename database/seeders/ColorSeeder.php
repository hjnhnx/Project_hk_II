<?php

namespace Database\Seeders;

use App\Enums\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([

            [
                'id' => '1',
                'name' => 'Bạc',
                'color_code' => '#d1d1d1',
                'status' => 1,
                'created_at' => '2021-09-04 08:47:34',
                'updated_at' => '2021-09-05 10:05:08',
                'deleted_at' => null,
            ],

            [
                'id' => '2',
                'name' => 'Vàng gold',
                'color_code' => '#fbd85b',
                'status' => 1,
                'created_at' => '2021-09-03 08:47:34',
                'updated_at' => '2021-09-05 10:05:44',
                'deleted_at' => null,
            ],

            [
                'id' => '3',
                'name' => 'Xanh lá',
                'color_code' => '#66ff66',
                'status' => 1,
                'created_at' => '2021-09-02 08:47:34',
                'updated_at' => '2021-09-05 10:05:50',
                'deleted_at' => null,
            ],

            [
                'id' => '4',
                'name' => 'Xanh dương',
                'color_code' => '#6161ff',
                'status' => 1,
                'created_at' => '2021-09-01 08:47:34',
                'updated_at' => '2021-09-07 02:11:34',
                'deleted_at' => null,
            ],

            [
                'id' => '5',
                'name' => 'Hồng',
                'color_code' => '#ffb8ff',
                'status' => 1,
                'created_at' => '2021-08-31 08:47:34',
                'updated_at' => '2021-09-05 10:06:03',
                'deleted_at' => null,
            ],

            [
                'id' => '6',
                'name' => 'Đen nhám',
                'color_code' => '#5e5e5e',
                'status' => 1,
                'created_at' => '2021-08-30 08:47:34',
                'updated_at' => '2021-09-05 10:06:10',
                'deleted_at' => null,
            ],

            [
                'id' => '7',
                'name' => 'Trắng',
                'color_code' => '#eeeeee',
                'status' => 1,
                'created_at' => '2021-08-29 08:47:34',
                'updated_at' => '2021-09-05 10:04:28',
                'deleted_at' => null,
            ],

            [
                'id' => '8',
                'name' => 'Đỏ',
                'color_code' => '#fd5858',
                'status' => 1,
                'created_at' => '2021-08-28 08:47:34',
                'updated_at' => '2021-09-05 10:04:18',
                'deleted_at' => null,
            ],

            [
                'id' => '9',
                'name' => 'Tím',
                'color_code' => '#ac64e8',
                'status' => 1,
                'created_at' => '2021-08-27 08:47:34',
                'updated_at' => '2021-09-05 10:04:11',
                'deleted_at' => null,
            ],

            [
                'id' => '10',
                'name' => 'Vàng',
                'color_code' => '#f2f278',
                'status' => 1,
                'created_at' => '2021-08-26 08:47:34',
                'updated_at' => '2021-09-05 10:04:04',
                'deleted_at' => null,
            ],

            [
                'id' => '11',
                'name' => 'Đen',
                'color_code' => '#000000',
                'status' => 1,
                'created_at' => '2021-09-05 10:06:20',
                'updated_at' => '2021-09-05 10:06:20',
                'deleted_at' => null,
            ],

            [
                'id' => '12',
                'name' => 'Xanh tím',
                'color_code' => '#6631f6',
                'status' => 1,
                'created_at' => '2021-09-05 10:06:37',
                'updated_at' => '2021-09-05 10:06:54',
                'deleted_at' => null,
            ],

            [
                'id' => '13',
                'name' => 'Vàng hồng',
                'color_code' => '#fbd9b1',
                'status' => 1,
                'created_at' => '2021-09-05 10:07:30',
                'updated_at' => '2021-09-05 10:07:30',
                'deleted_at' => null,
            ],

            [
                'id' => '14',
                'name' => 'Cam',
                'color_code' => '#ff932e',
                'status' => 1,
                'created_at' => '2021-09-07 02:10:07',
                'updated_at' => '2021-09-07 02:10:07',
                'deleted_at' => null,
            ],

            [
                'id' => '15',
                'name' => 'Xanh đen',
                'color_code' => '#0e0075',
                'status' => 1,
                'created_at' => '2021-09-07 02:10:35',
                'updated_at' => '2021-09-07 02:10:35',
                'deleted_at' => null,
            ],

            [
                'id' => '16',
                'name' => 'Xanh',
                'color_code' => '#7a83ff',
                'status' => 1,
                'created_at' => '2021-09-07 02:11:01',
                'updated_at' => '2021-09-07 02:11:35',
                'deleted_at' => null,
            ],

        ]);
    }
}
