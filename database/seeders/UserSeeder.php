<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Enums\Status;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $fake = Factory::create();

        $images = array(
            "https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
            "https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
            "https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
            "https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
            "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
            "https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
            "https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
            "https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
            "https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
            "https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
            "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
            "https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
            "https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
            "https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
            "https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
            "https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
            "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
            "https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
            "https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
            "https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
            "https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
            "https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
            "https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
            "https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
        );
//        for ($i = 0; $i < 100; $i++) {
//            User::create([
//                'firstname'=>$fake->firstName,
//                'lastname'=>$fake->lastName,
//                'avatar'=>$images[random_int(0,sizeof($images)-1)],
//                'address'=>$fake->address,
//                'phone'=>$fake->phoneNumber,
//                'birthday'=>$fake->date,
//                'email'=>$fake->email,
//                'role'=>$i %10 == 0 ? Role::ADMIN : Role::USER,
//                'status'=>Status::ACTIVE,
//                'password'=>'$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW',
//                'created_at'=>Carbon::now()->addDay(-$i)
//            ]);
//        }
    }
}
