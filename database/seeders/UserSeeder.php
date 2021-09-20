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

        DB::table('users')->insert([
            [
                "firstname"=>"Nigel",
                "lastname"=>"Cartwright",
                "avatar"=>"https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
                "address"=>"64206 Denesik Crest Aryannatown, KY 37296",
                "phone"=>"(442) 786-9418",
                "birthday"=>"1972-12-14",
                "email"=>"tyrell.champlin@torp.info",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(368)
            ],

            [
                "firstname"=>"Leonor",
                "lastname"=>"Tillman",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"10652 Dietrich Corners Port Frederick, ME 08619-8495",
                "phone"=>"585-848-0047",
                "birthday"=>"2002-07-19",
                "email"=>"ruthe43@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(369)
            ],

            [
                "firstname"=>"Kim",
                "lastname"=>"Schumm",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"616 Gorczany Ways Kaylastad, MD 53219",
                "phone"=>"1-517-219-7248",
                "birthday"=>"1996-03-22",
                "email"=>"katarina.fadel@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(370)
            ],

            [
                "firstname"=>"Lilian",
                "lastname"=>"Metz",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"2020 Keeling Mission Apt. 088 East Sydnee, SD 61523",
                "phone"=>"260.486.8685",
                "birthday"=>"2019-05-01",
                "email"=>"ward.chet@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(371)
            ],

            [
                "firstname"=>"Alize",
                "lastname"=>"Shields",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"2634 Goodwin Common Cameronshire, ID 19249",
                "phone"=>"(443) 743-7171",
                "birthday"=>"2007-08-10",
                "email"=>"timothy63@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(372)
            ],

            [
                "firstname"=>"Lenny",
                "lastname"=>"Hartmann",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"548 Bergnaum Canyon Suite 911 Kacieborough, CA 88103-5177",
                "phone"=>"352.401.8101",
                "birthday"=>"2016-10-14",
                "email"=>"batz.rosalind@gulgowski.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(373)
            ],

            [
                "firstname"=>"Raphael",
                "lastname"=>"Kreiger",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"2386 Amalia View Lake Johnathonmouth, NM 68126-7910",
                "phone"=>"+16209567253",
                "birthday"=>"1974-08-17",
                "email"=>"fabian43@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(374)
            ],

            [
                "firstname"=>"Raquel",
                "lastname"=>"Mueller",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"8617 Haven Divide Suite 238 Clementinetown, NJ 89636",
                "phone"=>"864.965.8086",
                "birthday"=>"1996-08-04",
                "email"=>"schroeder.christ@connelly.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(375)
            ],

            [
                "firstname"=>"Caroline",
                "lastname"=>"Spencer",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"283 Nyah Path Maryton, CA 53875",
                "phone"=>"1-463-650-6700",
                "birthday"=>"1974-04-11",
                "email"=>"mkovacek@casper.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(376)
            ],

            [
                "firstname"=>"Melany",
                "lastname"=>"Upton",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"16994 Kreiger Grove Apt. 234 Ardenbury, NM 68411",
                "phone"=>"1-878-477-6951",
                "birthday"=>"2014-09-15",
                "email"=>"veda.feeney@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(377)
            ],

            [
                "firstname"=>"Justus",
                "lastname"=>"Upton",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"845 Spinka Shoal Apt. 257 Arlieview, AL 11886-8864",
                "phone"=>"(929) 493-1520",
                "birthday"=>"1970-05-03",
                "email"=>"reinger.naomi@hotmail.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(378)
            ],

            [
                "firstname"=>"Patsy",
                "lastname"=>"Mohr",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"72863 Greenfelder Estate Pamelaview, NY 64886-3843",
                "phone"=>"+19174054784",
                "birthday"=>"2007-11-16",
                "email"=>"pinkie.fadel@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(379)
            ],

            [
                "firstname"=>"Rodger",
                "lastname"=>"Ullrich",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"9210 Beer Knoll West Franciscafort, NM 65371",
                "phone"=>"(940) 745-4095",
                "birthday"=>"1984-04-26",
                "email"=>"hildegard88@hermann.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(380)
            ],

            [
                "firstname"=>"Bryce",
                "lastname"=>"Howe",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"98409 Quinn Drive Suite 999 Armanimouth, NM 36287-5983",
                "phone"=>"+1.682.423.8427",
                "birthday"=>"1987-01-20",
                "email"=>"dtowne@corwin.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(381)
            ],

            [
                "firstname"=>"Junior",
                "lastname"=>"Thiel",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"3487 O'Conner Neck Apt. 589 Steveberg, CO 92828",
                "phone"=>"(956) 659-6026",
                "birthday"=>"1999-07-17",
                "email"=>"dhirthe@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(382)
            ],

            [
                "firstname"=>"Winston",
                "lastname"=>"Grant",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"208 Antonetta Mount East Brannonfurt, WY 30659",
                "phone"=>"+15592715923",
                "birthday"=>"2016-03-20",
                "email"=>"hhagenes@mosciski.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(383)
            ],

            [
                "firstname"=>"Gerda",
                "lastname"=>"O'Kon",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"7003 Nolan Circle Suite 019 Runteborough, AK 74077-5526",
                "phone"=>"+1-856-665-7214",
                "birthday"=>"2020-03-22",
                "email"=>"ludwig40@metz.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(384)
            ],

            [
                "firstname"=>"Angie",
                "lastname"=>"Hessel",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"46544 Daphnee Land Suite 432 Madonnabury, HI 65936-1300",
                "phone"=>"347.597.9154",
                "birthday"=>"1996-01-05",
                "email"=>"betty14@mertz.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(385)
            ],

            [
                "firstname"=>"Eloy",
                "lastname"=>"Ortiz",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"9798 Tina Glen Apt. 168 West Rodrickville, NC 64143",
                "phone"=>"+1-765-671-0010",
                "birthday"=>"2008-09-17",
                "email"=>"qstoltenberg@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(386)
            ],

            [
                "firstname"=>"Elisabeth",
                "lastname"=>"Heaney",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"282 Jakubowski Locks Apt. 586 Aliciachester, NV 23642-7232",
                "phone"=>"+1 (920) 616-4564",
                "birthday"=>"2011-09-29",
                "email"=>"pierre.haag@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(387)
            ],

            [
                "firstname"=>"Dorthy",
                "lastname"=>"Will",
                "avatar"=>"https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
                "address"=>"82675 Schuppe Light Suite 645 Harrisstad, TX 79546",
                "phone"=>"1-716-707-9704",
                "birthday"=>"1983-05-14",
                "email"=>"novella33@gmail.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(388)
            ],

            [
                "firstname"=>"Hassie",
                "lastname"=>"Hudson",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"2309 Rippin Turnpike Suite 077 Grimesberg, LA 48607-9244",
                "phone"=>"1-770-345-5571",
                "birthday"=>"1977-08-04",
                "email"=>"tavares.blick@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(389)
            ],

            [
                "firstname"=>"Felton",
                "lastname"=>"Ratke",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"2720 Schoen Station Suite 047 Heidenreichland, MT 92074",
                "phone"=>"231.338.7002",
                "birthday"=>"1997-12-05",
                "email"=>"vsporer@hermiston.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(390)
            ],

            [
                "firstname"=>"Aliyah",
                "lastname"=>"Ortiz",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"29868 Marlene Oval Corwinview, MI 83759-3075",
                "phone"=>"+1 (831) 477-9707",
                "birthday"=>"2015-06-07",
                "email"=>"tina85@kuhn.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(391)
            ],

            [
                "firstname"=>"Stefanie",
                "lastname"=>"Schuster",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"1860 Daren Mountains Apt. 140 South Mohammedport, OK 53134",
                "phone"=>"(678) 753-8105",
                "birthday"=>"1979-06-16",
                "email"=>"abbey.dickinson@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(392)
            ],

            [
                "firstname"=>"Charles",
                "lastname"=>"Adams",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"84045 Bettye Common Suite 572 Port Clovis, FL 69024",
                "phone"=>"(508) 226-6118",
                "birthday"=>"2013-02-10",
                "email"=>"philip.sipes@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(393)
            ],

            [
                "firstname"=>"Layne",
                "lastname"=>"Cronin",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"60480 Becker Village Grahamchester, NE 27093",
                "phone"=>"+1-908-422-6370",
                "birthday"=>"1971-08-11",
                "email"=>"eichmann.darby@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(394)
            ],

            [
                "firstname"=>"Nathaniel",
                "lastname"=>"Willms",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"67331 Loma Camp South Dandre, MI 03004-4137",
                "phone"=>"1-423-620-6027",
                "birthday"=>"2020-01-11",
                "email"=>"abshire.walter@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(395)
            ],

            [
                "firstname"=>"Brad",
                "lastname"=>"Stroman",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"37266 Torphy Gardens Kaiatown, AR 93945",
                "phone"=>"219-647-6022",
                "birthday"=>"1986-02-04",
                "email"=>"osvaldo.mills@heller.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(396)
            ],

            [
                "firstname"=>"Jacynthe",
                "lastname"=>"Beahan",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"31240 O'Connell Hills Apt. 471 Padbergside, HI 06745-2544",
                "phone"=>"1-417-406-5574",
                "birthday"=>"2002-08-05",
                "email"=>"brooklyn16@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(397)
            ],

            [
                "firstname"=>"Frances",
                "lastname"=>"Rodriguez",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"458 Paucek Pike East Porter, NH 37682",
                "phone"=>"858-794-1601",
                "birthday"=>"1985-11-30",
                "email"=>"wratke@gmail.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(398)
            ],

            [
                "firstname"=>"Marjory",
                "lastname"=>"Swaniawski",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"702 Merl Harbor Suite 152 North Victoriamouth, DE 37252-0354",
                "phone"=>"1-657-260-1405",
                "birthday"=>"1974-11-12",
                "email"=>"sylvia.keebler@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(399)
            ],

            [
                "firstname"=>"Bret",
                "lastname"=>"Willms",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"109 Satterfield Causeway Apt. 071 Port Pollyville, MS 99906-3386",
                "phone"=>"(712) 279-6237",
                "birthday"=>"1976-12-05",
                "email"=>"reinger.marisa@beatty.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(400)
            ],

            [
                "firstname"=>"Sharon",
                "lastname"=>"Lynch",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"69297 Jane Route Suite 213 Ritchieview, MT 99835",
                "phone"=>"434.863.0772",
                "birthday"=>"2012-09-01",
                "email"=>"ankunding.danika@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(401)
            ],

            [
                "firstname"=>"Flavio",
                "lastname"=>"Kilback",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"9380 Angela Gardens Apt. 817 Feestfort, IN 41250",
                "phone"=>"+1 (678) 320-3087",
                "birthday"=>"2003-08-27",
                "email"=>"hyatt.bridie@doyle.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(402)
            ],

            [
                "firstname"=>"Ned",
                "lastname"=>"Sawayn",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"93725 Sporer Coves Apt. 326 Franciscaside, PA 47226-8364",
                "phone"=>"1-228-969-1967",
                "birthday"=>"2015-08-25",
                "email"=>"beulah.sporer@hane.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(403)
            ],

            [
                "firstname"=>"Flavio",
                "lastname"=>"Lehner",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"528 Hoeger Isle Apt. 201 Watersside, MD 31567-3250",
                "phone"=>"609-710-8907",
                "birthday"=>"1979-11-30",
                "email"=>"leann.ferry@reichel.net",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(404)
            ],

            [
                "firstname"=>"Domingo",
                "lastname"=>"Upton",
                "avatar"=>"https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
                "address"=>"66977 Luettgen Hills Anthonyport, IA 69878-9666",
                "phone"=>"+1.351.901.9404",
                "birthday"=>"1970-03-31",
                "email"=>"naomi.lindgren@hermann.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(405)
            ],

            [
                "firstname"=>"Marcos",
                "lastname"=>"Green",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"219 Meagan Hollow Suite 546 Pollichland, FL 51571",
                "phone"=>"(620) 830-8434",
                "birthday"=>"1989-01-22",
                "email"=>"panderson@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(406)
            ],

            [
                "firstname"=>"Camron",
                "lastname"=>"Reichel",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"25514 Braden Club Apt. 934 New Johanna, HI 72876",
                "phone"=>"+18309512033",
                "birthday"=>"1979-09-03",
                "email"=>"rmayer@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(407)
            ],

            [
                "firstname"=>"Joelle",
                "lastname"=>"Kulas",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"685 Hegmann Port Suite 304 West Franco, NJ 94274-9505",
                "phone"=>"646-959-4790",
                "birthday"=>"1995-11-08",
                "email"=>"joseph.marquardt@legros.info",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(408)
            ],

            [
                "firstname"=>"Bradly",
                "lastname"=>"Nader",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"2207 Beer Wall Masonstad, IL 22354",
                "phone"=>"+1.463.465.5788",
                "birthday"=>"2018-01-30",
                "email"=>"geraldine38@mann.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(409)
            ],

            [
                "firstname"=>"Melvina",
                "lastname"=>"Beier",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"415 Alfredo Square Lake Boris, KY 63512",
                "phone"=>"+1-979-940-3513",
                "birthday"=>"2005-12-05",
                "email"=>"myrna71@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(410)
            ],

            [
                "firstname"=>"Chasity",
                "lastname"=>"Bahringer",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"74751 Mitchel Crossing Amelytown, DC 33014-8549",
                "phone"=>"361.302.9282",
                "birthday"=>"1981-06-28",
                "email"=>"marcelo.hessel@nikolaus.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(411)
            ],

            [
                "firstname"=>"Ebony",
                "lastname"=>"McKenzie",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"17776 Burdette Causeway Apt. 773 Leonardfurt, KY 96417-4941",
                "phone"=>"732.747.2072",
                "birthday"=>"1978-09-08",
                "email"=>"rstokes@ritchie.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(412)
            ],

            [
                "firstname"=>"Darron",
                "lastname"=>"Legros",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"237 Ferry Rapids West Elvaside, UT 00600",
                "phone"=>"+17345853761",
                "birthday"=>"2021-01-16",
                "email"=>"lind.serenity@haley.net",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(413)
            ],

            [
                "firstname"=>"Benedict",
                "lastname"=>"Ledner",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"59449 Boyer Row Maryamtown, NE 27405-6175",
                "phone"=>"1-385-546-9346",
                "birthday"=>"2019-12-31",
                "email"=>"hazel98@cummerata.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(414)
            ],

            [
                "firstname"=>"Margie",
                "lastname"=>"Greenholt",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"5866 Lisandro Ports East Collintown, IN 06840-3419",
                "phone"=>"916.581.6304",
                "birthday"=>"1993-02-21",
                "email"=>"lexus.stoltenberg@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(415)
            ],

            [
                "firstname"=>"Adolfo",
                "lastname"=>"Howell",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"74316 Schmeler Meadow Suite 165 East Brenden, HI 64302",
                "phone"=>"(318) 888-4726",
                "birthday"=>"1981-08-09",
                "email"=>"dixie.williamson@okeefe.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(416)
            ],

            [
                "firstname"=>"Kelly",
                "lastname"=>"Hauck",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"941 Jamir Squares New Jordynside, SD 73243",
                "phone"=>"443.862.9067",
                "birthday"=>"2000-04-07",
                "email"=>"federico71@hagenes.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(417)
            ],

            [
                "firstname"=>"Reyna",
                "lastname"=>"Hoppe",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"116 Cleveland Courts Suite 188 North Zachery, MD 25486-0438",
                "phone"=>"1-414-414-3943",
                "birthday"=>"1992-08-17",
                "email"=>"paucek.gwen@gmail.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(418)
            ],

            [
                "firstname"=>"Aron",
                "lastname"=>"Hill",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"87325 Beer Streets Suite 397 Fayfurt, CT 38497",
                "phone"=>"352.408.0397",
                "birthday"=>"2020-02-17",
                "email"=>"quigley.lyric@okeefe.net",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(419)
            ],

            [
                "firstname"=>"Samara",
                "lastname"=>"Aufderhar",
                "avatar"=>"https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
                "address"=>"7946 Feil Vista New Averyside, RI 49453",
                "phone"=>"934-532-1041",
                "birthday"=>"1989-05-17",
                "email"=>"tpaucek@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(420)
            ],

            [
                "firstname"=>"Jaquelin",
                "lastname"=>"Hickle",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"631 Jarvis Island South Kaiaville, NH 72626",
                "phone"=>"+1-906-506-7822",
                "birthday"=>"2000-03-18",
                "email"=>"xdurgan@bosco.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(421)
            ],

            [
                "firstname"=>"Merle",
                "lastname"=>"Moore",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"39853 Nikolaus Tunnel West Zacharyport, FL 24182-1939",
                "phone"=>"507-480-0171",
                "birthday"=>"2016-04-10",
                "email"=>"alia89@gleichner.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(422)
            ],

            [
                "firstname"=>"Macey",
                "lastname"=>"Haag",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"959 Andy Centers West Quinnburgh, OR 72009",
                "phone"=>"434-690-4926",
                "birthday"=>"1976-03-28",
                "email"=>"marley87@rau.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(423)
            ],

            [
                "firstname"=>"Ivy",
                "lastname"=>"VonRueden",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"111 Hill Corners Suite 149 Kundeport, MN 47069-2542",
                "phone"=>"801.252.7209",
                "birthday"=>"2009-06-28",
                "email"=>"mac42@steuber.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(424)
            ],

            [
                "firstname"=>"Cayla",
                "lastname"=>"Prohaska",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"70521 Strosin Corners Suite 632 Georgiannachester, KS 91978",
                "phone"=>"1-620-207-2414",
                "birthday"=>"1974-04-09",
                "email"=>"ena39@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(425)
            ],

            [
                "firstname"=>"Trent",
                "lastname"=>"Stroman",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"77248 Cronin Inlet Suite 907 Port Albert, MA 31172-6842",
                "phone"=>"1-938-847-6696",
                "birthday"=>"1979-09-28",
                "email"=>"dakota95@lockman.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(426)
            ],

            [
                "firstname"=>"Hassie",
                "lastname"=>"Herzog",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"69521 Larkin Drive Suite 225 North Hubert, OK 70774-3739",
                "phone"=>"+1 (435) 828-6399",
                "birthday"=>"1979-06-29",
                "email"=>"deckow.wayne@roberts.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(427)
            ],

            [
                "firstname"=>"Shad",
                "lastname"=>"Streich",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"5288 Leann Trace South Adrien, WV 38508-9731",
                "phone"=>"(217) 381-7002",
                "birthday"=>"2016-11-15",
                "email"=>"eebert@heaney.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(428)
            ],

            [
                "firstname"=>"Randy",
                "lastname"=>"Schuppe",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"33175 Clair Lodge North Winifred, WV 63110",
                "phone"=>"+12834490927",
                "birthday"=>"1994-07-09",
                "email"=>"henderson.grady@friesen.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(429)
            ],

            [
                "firstname"=>"Eva",
                "lastname"=>"Kunde",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"67088 Susie Garden Suite 706 Lake Dorcas, MT 34943-0872",
                "phone"=>"313-608-4850",
                "birthday"=>"2015-12-03",
                "email"=>"carroll.mozell@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(430)
            ],

            [
                "firstname"=>"Matteo",
                "lastname"=>"Koelpin",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"3322 Hartmann Spring New Jacey, LA 26874",
                "phone"=>"1-283-775-5889",
                "birthday"=>"1972-04-30",
                "email"=>"hcollins@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(431)
            ],

            [
                "firstname"=>"Helena",
                "lastname"=>"Raynor",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"7299 Faye Extension Apt. 512 Farrellchester, AK 51572-4467",
                "phone"=>"+1-364-983-3983",
                "birthday"=>"2014-01-03",
                "email"=>"stroman.rigoberto@kutch.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(432)
            ],

            [
                "firstname"=>"Angelita",
                "lastname"=>"Lockman",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"47464 Kelli Corners Port Lillie, LA 28330-5271",
                "phone"=>"1-769-839-7825",
                "birthday"=>"1983-07-15",
                "email"=>"myron30@heathcote.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(433)
            ],

            [
                "firstname"=>"Virgil",
                "lastname"=>"Kiehn",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"91386 Annabelle Spurs Lake Lennaberg, TX 38465-3608",
                "phone"=>"(706) 310-2229",
                "birthday"=>"2004-11-26",
                "email"=>"runolfsdottir.pamela@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(434)
            ],

            [
                "firstname"=>"Creola",
                "lastname"=>"Blick",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"981 Freida Prairie Suite 939 Lake Efraintown, HI 48478",
                "phone"=>"1-760-518-9935",
                "birthday"=>"1990-12-01",
                "email"=>"louie.ferry@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(435)
            ],

            [
                "firstname"=>"Alta",
                "lastname"=>"Bogisich",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"775 Bernier Shoal Apt. 001 Kaseymouth, SC 80181",
                "phone"=>"+19296622055",
                "birthday"=>"2005-01-27",
                "email"=>"meta.lind@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(436)
            ],

            [
                "firstname"=>"Stacey",
                "lastname"=>"Balistreri",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"96033 Dach Throughway Apt. 498 Bednarton, AZ 09178-1226",
                "phone"=>"930.543.0488",
                "birthday"=>"1970-04-01",
                "email"=>"kian21@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(437)
            ],

            [
                "firstname"=>"Keyshawn",
                "lastname"=>"O'Connell",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"1792 Aylin Springs Suite 041 South Giuseppe, DC 42425-7307",
                "phone"=>"+1-586-519-6376",
                "birthday"=>"1987-02-03",
                "email"=>"kattie12@gmail.com",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(438)
            ],

            [
                "firstname"=>"Dewayne",
                "lastname"=>"Kub",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"334 Predovic Common Port Marilyne, MN 05077",
                "phone"=>"(616) 666-6126",
                "birthday"=>"2014-06-12",
                "email"=>"prohaska.skyla@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(439)
            ],

            [
                "firstname"=>"Drake",
                "lastname"=>"Veum",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"47649 Rosario Corners Suite 977 New Delpha, NM 06850-8824",
                "phone"=>"1-802-514-9726",
                "birthday"=>"1977-07-02",
                "email"=>"renner.jodie@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(440)
            ],

            [
                "firstname"=>"Eugenia",
                "lastname"=>"Connelly",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"4397 Purdy Heights Apt. 350 North Milofurt, AK 58785-4811",
                "phone"=>"1-248-681-3092",
                "birthday"=>"2021-06-04",
                "email"=>"ignacio63@stiedemann.net",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(441)
            ],

            [
                "firstname"=>"Art",
                "lastname"=>"Altenwerth",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"60941 Leffler Drive Suite 375 Lake Aida, TX 99381-7372",
                "phone"=>"+1-463-778-3921",
                "birthday"=>"1979-10-13",
                "email"=>"wheller@kulas.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(442)
            ],

            [
                "firstname"=>"Miguel",
                "lastname"=>"Zemlak",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"429 Kitty Heights Germanborough, GA 00136-3268",
                "phone"=>"479-487-4214",
                "birthday"=>"1985-04-24",
                "email"=>"berge.kristin@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(443)
            ],

            [
                "firstname"=>"Raphael",
                "lastname"=>"Hilpert",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"24704 Kailey Square Taureanton, DE 67964-6497",
                "phone"=>"830.304.5199",
                "birthday"=>"1977-09-10",
                "email"=>"ccole@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(444)
            ],

            [
                "firstname"=>"Cheyenne",
                "lastname"=>"Boyle",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"73337 Schamberger Squares Port Gust, RI 70685-4866",
                "phone"=>"(719) 892-7680",
                "birthday"=>"1996-09-30",
                "email"=>"ignatius37@murray.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(445)
            ],

            [
                "firstname"=>"Ariel",
                "lastname"=>"Stokes",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"208 Anika Mountain Suite 376 Lincolnville, WI 39207-9322",
                "phone"=>"1-848-367-7169",
                "birthday"=>"1990-11-15",
                "email"=>"abshire.katlynn@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(446)
            ],

            [
                "firstname"=>"Helen",
                "lastname"=>"O'Conner",
                "avatar"=>"https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-1-480x600.jpg",
                "address"=>"572 Streich Road North Keeganville, AR 17489",
                "phone"=>"+1.325.692.4103",
                "birthday"=>"1990-01-18",
                "email"=>"imccullough@lesch.info",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(447)
            ],

            [
                "firstname"=>"Otho",
                "lastname"=>"Daugherty",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"138 McDermott Motorway Anniemouth, WI 70664-3160",
                "phone"=>"931.689.7830",
                "birthday"=>"1990-11-29",
                "email"=>"swaniawski.madaline@shields.info",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(448)
            ],

            [
                "firstname"=>"Marley",
                "lastname"=>"Schaefer",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"124 Edd Bypass Apt. 897 Brennafurt, ME 74251",
                "phone"=>"843-732-3889",
                "birthday"=>"2015-02-19",
                "email"=>"jessie.frami@carter.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(449)
            ],

            [
                "firstname"=>"Leilani",
                "lastname"=>"Barrows",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWLZ2yFK0IOr8H3VIbS0SydqiDK-SMrElbgEJLqXGM2qpzQlS5-N4kHxHrHB8Fc2jvwaE&usqp=CAU",
                "address"=>"49095 Mekhi Hill Apt. 357 New Reedfort, FL 25751-1173",
                "phone"=>"1-906-529-9299",
                "birthday"=>"2015-01-16",
                "email"=>"qmills@schiller.net",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(450)
            ],

            [
                "firstname"=>"Rita",
                "lastname"=>"Vandervort",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"94191 Geo Corners Apt. 870 Kozeybury, SC 31890",
                "phone"=>"209.745.6358",
                "birthday"=>"2017-03-22",
                "email"=>"mraz.roosevelt@lakin.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(451)
            ],

            [
                "firstname"=>"Cayla",
                "lastname"=>"Goldner",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"637 Runolfsson Tunnel Kennyburgh, NJ 62425-6996",
                "phone"=>"301.559.0202",
                "birthday"=>"2018-12-17",
                "email"=>"swiegand@kutch.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(452)
            ],

            [
                "firstname"=>"Faye",
                "lastname"=>"Parisian",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"2489 Aryanna Village Apt. 187 Brakusmouth, HI 47905-5955",
                "phone"=>"+16572454861",
                "birthday"=>"1996-01-10",
                "email"=>"okeefe.sabina@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(453)
            ],

            [
                "firstname"=>"Katherine",
                "lastname"=>"Stiedemann",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"93588 Alena Mission Suite 624 Richardbury, LA 01242",
                "phone"=>"858.970.3875",
                "birthday"=>"2009-05-18",
                "email"=>"phyatt@hermiston.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(454)
            ],

            [
                "firstname"=>"Daren",
                "lastname"=>"Morar",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"935 Murphy Mission Suite 971 Shieldsville, OK 80704",
                "phone"=>"+1.615.785.9117",
                "birthday"=>"2016-12-15",
                "email"=>"waters.domenica@wisozk.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(455)
            ],

            [
                "firstname"=>"Arvel",
                "lastname"=>"King",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"6927 Emmerich Parkway Nolaside, GA 91549-2059",
                "phone"=>"+1-559-729-2045",
                "birthday"=>"1976-02-09",
                "email"=>"rosalind.ortiz@halvorson.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(456)
            ],

            [
                "firstname"=>"Loyce",
                "lastname"=>"Yost",
                "avatar"=>"https://bcasolutions.vn/wp-content/uploads/2020/08/kd-quan-ao-online-2-1-2.jpg",
                "address"=>"69015 Davis Roads North Nico, GA 72781-7803",
                "phone"=>"(872) 808-6670",
                "birthday"=>"1987-03-27",
                "email"=>"nelda09@veum.org",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(457)
            ],

            [
                "firstname"=>"Danial",
                "lastname"=>"Heller",
                "avatar"=>"https://api.startupindia.gov.in/sih/api/file/user/image/Startup?fileName=b6e8223e-6aea-4029-a81f-529990ef3551.jpg",
                "address"=>"19619 Howe Canyon Suite 690 Wandabury, UT 21657",
                "phone"=>"+1 (870) 621-4725",
                "birthday"=>"2012-01-17",
                "email"=>"mraz.leola@rogahn.info",
                "role"=>2,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(458)
            ],

            [
                "firstname"=>"Lea",
                "lastname"=>"Emard",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"68418 Bogisich Branch North Gradyville, CA 95568",
                "phone"=>"+1.952.927.6778",
                "birthday"=>"1997-08-26",
                "email"=>"mueller.eileen@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(459)
            ],

            [
                "firstname"=>"Jordane",
                "lastname"=>"Lind",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"183 Lemke Street East Brendonshire, NJ 77232",
                "phone"=>"662.588.1162",
                "birthday"=>"1988-01-21",
                "email"=>"rory.dooley@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(460)
            ],

            [
                "firstname"=>"Missouri",
                "lastname"=>"Johns",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"83927 Gottlieb Isle Faheyshire, KS 26068",
                "phone"=>"+1-740-345-7041",
                "birthday"=>"1983-09-08",
                "email"=>"baron.morissette@oberbrunner.info",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(461)
            ],

            [
                "firstname"=>"Kyla",
                "lastname"=>"Hudson",
                "avatar"=>"https://chigaidam.com/wp-content/uploads/2021/07/Cuc-doc-cuc-soc-voi-hon-100-anh-girl-xinh.jpg",
                "address"=>"64455 Carter Squares Arnulfoberg, NC 17319-1456",
                "phone"=>"+1-281-870-3690",
                "birthday"=>"1991-10-15",
                "email"=>"lavina16@breitenberg.biz",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(462)
            ],

            [
                "firstname"=>"Eloy",
                "lastname"=>"McKenzie",
                "avatar"=>"https://i.pinimg.com/474x/7f/c9/07/7fc907cd950eedcae66781b7fe20e95f.jpg",
                "address"=>"5342 Aufderhar Oval Suite 961 Windlershire, WA 51845-1283",
                "phone"=>"+1-929-679-4975",
                "birthday"=>"1971-03-21",
                "email"=>"gene.leannon@gmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(463)
            ],

            [
                "firstname"=>"Jamel",
                "lastname"=>"Mitchell",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaE5MkQyBgllG1V_zj4qumOlKzcBRGmBzTCkzW_ELr7TT0agW693Mi3T-Em6Qod1e9XoY&usqp=CAU",
                "address"=>"7454 Madisyn Radial Romagueraberg, WV 19867",
                "phone"=>"+1-425-592-3351",
                "birthday"=>"2015-12-17",
                "email"=>"bauch.xander@yahoo.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(464)
            ],

            [
                "firstname"=>"Sylvia",
                "lastname"=>"Gutkowski",
                "avatar"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGaMdA4CJlkOW4c0xvQw8tP_lSt0yOGz_KsujKHXVC7ULFUGOrGdnytBgPsanj7fOC-r4&usqp=CAU",
                "address"=>"265 Bednar Gateway Suite 908 Lizaview, TN 04898",
                "phone"=>"+1-260-247-1057",
                "birthday"=>"1992-02-11",
                "email"=>"abatz@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(465)
            ],

            [
                "firstname"=>"Corbin",
                "lastname"=>"Kirlin",
                "avatar"=>"https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-gai-xinh-deo-kinh-1.jpg",
                "address"=>"47592 Hills Points Suite 326 East Kennabury, NV 56587-1778",
                "phone"=>"+1 (225) 254-8847",
                "birthday"=>"1988-04-30",
                "email"=>"murphy.arnulfo@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(466)
            ],

            [
                "firstname"=>"Napoleon",
                "lastname"=>"Botsford",
                "avatar"=>"https://2.bp.blogspot.com/-5bGrIrLVsms/WnFiwDBKgYI/AAAAAAAAHGs/KPp1IDsgD9AumXTY9Ehh31pZ0p04cHDKQCLcBGAs/s1600/girl-xinh-hvnh-2.jpg",
                "address"=>"4178 Nora Field Suite 429 North Heather, NV 91822",
                "phone"=>"+1-534-972-3013",
                "birthday"=>"2014-11-23",
                "email"=>"tweber@hotmail.com",
                "role"=>1,
                "status"=>1,
                "password"=>"$2y$10$1xqTYSwqFKNQyQjq1BWLi.Aee4xPHX8xwXTDMcBvH9EL57lOS0kQW",
                "created_at"=>Carbon::now()->addDay(467)
            ],
        ]);

    }
}
