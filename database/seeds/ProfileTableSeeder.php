<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('profile')->delete();

        \DB::table('profile')->insert(array (
            0 =>
            array (
                'id' => 1,
                'fullName' => 'Bui Thi An',
                'fullName_v' => 'Bùi Thi An',
                'gender' => 'female',
                'DOB' => 'March 15, 1998',
                'DOB_v' => 'Ngày 15 tháng 03 năm 1998',
                'POB' => 'Hanoi',
                'POB_v' => 'Hà Nội, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'buithian@gmail.com',
                'PhoneNumber' => '0966777444',
                'MartialStatus' => 'single',
                'Address' => '15 Tran Hung Dao',
                'City' => 'Hanoi',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'fullName' => 'Mai Tuan Anh',
                'fullName_v' => 'Mai Tuấn Anh',
                'gender' => 'male',
                'DOB' => 'October 5, 1998',
                'DOB_v' => 'ngày 05 tháng 10 năm 1998',
                'POB' => 'Nam Dinh',
                'POB_v' => 'Nam Định, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'maituananh@gmail.com',
                'PhoneNumber' => '0244551225',
                'MartialStatus' => 'single',
                'Address' => 'Giao Thuy Distinct',
                'City' => 'Nam Dinh',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'fullName' => 'Tran Kim Quoc Tuan',
                'fullName_v' => 'Trần Kim Quốc Tuấn',
                'gender' => 'male',
                'DOB' => 'May 24, 1999',
                'DOB_v' => 'ngày 24 tháng 5 năm 1999',
                'POB' => 'Hanoi',
                'POB_v' => 'Hà Nội, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'tieuphi99@gmail.com',
                'PhoneNumber' => '0989554333',
                'MartialStatus' => 'single',
                'Address' => '15 Tran Hung Dao',
                'City' => 'Hanoi',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            3 =>
            array (
                'id' => 4,
                'fullName' => 'Do Dang Minh Duc',
                'fullName_v' => 'Đỗ Đăng Minh Đức',
                'gender' => 'male',
                'DOB' => 'February 10, 1998',
                'DOB_v' => 'ngày 10 tháng 2 năm 1998',
                'POB' => 'Hanoi',
                'POB_v' => 'Hà Nội, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'minhduc100298@gmail.com',
                'PhoneNumber' => '0966777444',
                'MartialStatus' => 'single',
                'Address' => '15 Tran Hung Dao',
                'City' => 'Hanoi',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            4 =>
            array (
                'id' => 5,
                'fullName' => 'Ngo Thanh Tung',
                'fullName_v' => 'Ngô Thanh Tùng',
                'gender' => 'male',
                'DOB' => 'August 6, 1999',
                'DOB_v' => 'ngày 6 tháng 8 năm 1999',
                'POB' => 'Hanoi',
                'POB_v' => 'Hà Nội, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'tungngo99@gmail.com',
                'PhoneNumber' => '0966777444',
                'MartialStatus' => 'single',
                'Address' => '15 Tran Hung Dao',
                'City' => 'Hanoi',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            5 =>
            array (
                'id' => 6,
                'fullName' => 'Vu Tuan Phong',
                'fullName_v' => 'Vũ Tuấn Phong',
                'gender' => 'male',
                'DOB' => 'September 19, 1999',
                'DOB_v' => 'ngày 19 tháng 9 năm 1999',
                'POB' => 'Hanoi',
                'POB_v' => 'Hà Nội, Việt Nam',
                'Nationality' => 'Vietnamese',
                'Ethnicity' => 'Kinh',
                'Mail' => 'phongvu@gmail.com',
                'PhoneNumber' => '0966777444',
                'MartialStatus' => 'single',
                'Address' => '15 Tran Hung Dao',
                'City' => 'Hanoi',
                'Country' => 'Vietnam',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));

    }
}
