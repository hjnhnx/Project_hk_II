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
        $fake = Factory::create();

        $images = array(
            "https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
            "https://nhaphang247.com/upload/d0af8d677481df75fb2c396639f8fa11_31-07-2019_11-01.jpg",
            "https://trumsiquangchau.net/hinhanh/sanpham/ban-si-quan-ao-online-cach-thuc-ban-hang-ctv-si-quan-ao.jpg",
            "https://cf.shopee.vn/file/30ef624a27846821d2baedd931ee1cbe",
            "https://i.pinimg.com/474x/2c/4a/4a/2c4a4a7ecfc2a727bc7fa3a9c1fbcbb6.jpg",
            "https://i.pinimg.com/originals/37/ba/a2/37baa25a7b95cd788f4b0ec67320e286.jpg",
            "https://static.hotdeal.vn/images/735/734828/400x500/151349-set-ao-croptop-chan-vay-xoe-151346-vn-2.jpg",
            "https://quynam.net/wp-content/uploads/2021/05/1531714826-ban-quan-ao-online.jpg",
            "https://cdn.vatgia.vn/pictures/fullsize/2016/04/26/vpc1461632429.jpg",
            "https://cbu01.alicdn.com/img/ibank/2017/632/493/4377394236_1614333735.400x400.jpg",
            "https://cbu01.alicdn.com/img/ibank/2017/632/493/4377394236_1614333735.400x400.jpg",
            "https://cf.shopee.vn/file/4a77f516a53de79aec3c94a91cc694fb",
            "https://cbu01.alicdn.com/img/ibank/2017/306/903/4435309603_1838272786.400x400.jpg",
            "https://cf.shopee.vn/file/ee9812dc6af3a5233a49e668b6787709",
            "https://vn-live-03.slatic.net/p/59da821ac6f32189461a2ecacf73b075.jpg",
            "https://cf.shopee.vn/file/c8f4d74d9727ebb76514fd06759c4fff",
            "https://aokhoacnam.vn/upload/images/views/aokhoacnam/cach-phoi-do-voi-ao-hoodie-nam-1.jpg",
            "https://aokhoacnam.vn/upload/images/views/aokhoacnam/cach-phoi-do-voi-ao-khoac-jean-form-rong-4.png",
            "https://dotobjyajpegd.cloudfront.net/photo/5c906b45a449d212f3081905_m",
            "https://ds393qgzrxwzn.cloudfront.net/resize/m600x500/cat1/img/images/0/ln1LpsseBI.jpg",
            "http://i.imgur.com/1bHibY7.jpg",
            "https://top10tphcm.com/wp-content/uploads/2020/06/Shop-quan-ao-nu-quan-9-Fs-store.jpg",
            "https://toplist.vn/images/800px/lee-lys-shop-290116.jpg",
            "https://bizweb.dktcdn.net/thumb/1024x1024/100/346/696/articles/img-2289.jpg?v=1554632750193",
            "http://bizweb.dktcdn.net/thumb/grande/100/346/696/products/img-0335-jpg.jpg?v=1562058121460",
            "https://luvinus.com/wp-content/uploads/2020/07/chan-vay-chu-a-mac-voi-ao-gi-6.jpg",
            "https://i.vietgiaitri.com/2018/9/18/cach-mix-do-voi-chan-vay-den-xoe-duyen-dang-giup-nang-toa-sang-87e355.jpg",
            "https://media3.scdn.vn/img3/2019/3_20/BDsY04.png",
            "https://thamdangstore.vn/Content/Images/FileUpload/2019/10/chan-vay-tennis-de-thuong0.jpg",
            "http://static1.bestie.vn/Mlog/ImageContent/201804/large-5f437cfc318c80659a8e9a6b5eed2125-8334f2.jpg",
            "https://giaybom.com/Image/mac-gi-ra-mat-nha-ban-trai-5.jpg",
            "https://shopkhoinghiep.com/wp-content/uploads/2020/12/mau-vay-nu-dep-nu-tinh-1.jpg",
            "https://luzy.vn/wp-content/uploads/2020/03/O1CN01vrLwAi277Y3PFiloU_4045277750.jpg",
            "https://image.voso.vn/users/vosoimage/images/07d7a6948dae708450d238402507182a?t%5B0%5D=compress%3Alevel%3D100&accessToken=294300f0429f99f73901c605e8c4a1d59e272b19705e98a28c06598969b08a99",
            "https://vaynudep.com/wp-content/uploads/2015/10/bst-dam-maxi-voan-dep-cho-co-nang-dieu-da-dao-bien-cung-chang-trong-ky-nghi-lang-man-13.jpg",
            "https://i.pinimg.com/originals/72/39/85/72398557204650becb2234a9249d51e8.jpg",
            "https://gucli.com/wp-content/uploads/2017/05/dam-cong-so-28.jpg",
            "https://adayne.vn/wp-content/uploads/2021/04/chan-vay-dam-xoe-dep-he-2018-2019-kieu-han-quoc-nu-tinh-134936-81.jpg",
            "https://luzy.vn/wp-content/uploads/2020/05/LZD10951-18.jpg",
            "https://taoanhonline.com/wp-content/uploads/2019/07/vay-nu-dep-45.jpg",
            "https://cf.shopee.vn/file/10316de791fb743e84896d2875759c8a",
            "https://cf.shopee.vn/file/feaf1b36c6a4684c9c8475396be3d249",
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
