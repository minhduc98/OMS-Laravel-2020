<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('department')->delete();

        \DB::table('department')->insert(array (
            0 =>
            array (
                'id' => 1,
                'departmentName' => 'Department of General Education',
                'departmentName_v' => 'Khoa Đào tạo đại cương',
                'shortName' => 'GE Department',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'departmentName' => 'Department of Life Sciences',
                'departmentName_v' => 'Khoa khoa học sự sống',
                'shortName' => 'LS Department',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'departmentName' => 'Department of Advanced Materials Science and Nanotechnology',
                'departmentName_v' => 'Khoa KH Vật liệu tiên tiến và công nghệ Nano',
                'shortName' => 'AMSN Department',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            3 =>
            array (
                'id' => 4,
                'departmentName' => 'Department of Information and Communication Technology',
                'departmentName_v' => 'Khoa công nghệ thông tin và truyền thông',
                'shortName' => 'ICT Department',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));

    }
}
