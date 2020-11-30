<?php

use Illuminate\Database\Seeder;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('major')->delete();

        \DB::table('major')->insert(array (
            0 =>
            array (
                'id' => 1,
                'MajorName' => 'Foundation Science',
                'MajorName_v' => 'Khoa học cơ bản',
                'shortName' => 'Foundation Science',
                'year_id' => 2,
                'department_id' => 1,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'MajorName' => 'Common Courses',
                'MajorName_v' => 'Những môn học chung',
                'shortName' => 'MS ',
                'year_id' => 2,
                'department_id' => 1,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'MajorName' => 'Information and Communication Technology',
                'MajorName_v' => 'Công nghệ thông tin và truyền thông',
                'shortName' => 'ICT',
                'year_id' => 2,
                'department_id' => 4,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            3 =>
            array (
                'id' => 4,
                'MajorName' => 'Cyber Security',
                'MajorName_v' => 'An toàn thông tin',
                'shortName' => 'CS',
                'year_id' => 3,
                'department_id' => 4,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            4 =>
            array (
                'id' => 5,
                'MajorName' => 'Pharmacological, Medical and Agronomical Biotechnology',
                'MajorName_v' => 'Công nghệ Sinh học nông y dược',
                'shortName' => 'PMAB',
                'year_id' => 2,
                'department_id' => 2,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            5 =>
            array (
                'id' => 6,
                'MajorName' => 'Pharmacological, Medical and Agronomical Biotechnology',
                'MajorName_v' => 'Công nghệ Sinh học nông y dược',
                'shortName' => 'PMAB',
                'year_id' => 1,
                'department_id' => 2,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            6 =>
            array (
                'id' => 7,
                'MajorName' => 'Foundation Science',
                'MajorName_v' => 'Khoa học cơ bản',
                'shortName' => 'Foundation Science',
                'year_id' => 3,
                'department_id' => 1,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            7 =>
            array (
                'id' => 8,
                'MajorName' => 'Information and Communication Technology',
                'MajorName_v' => 'Công nghệ thông tin và truyền thông',
                'shortName' => 'ICT',
                'year_id' => 3,
                'department_id' => 4,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            8 =>
            array (
                'id' => 9,
                'MajorName' => 'Information and Communication Technology',
                'MajorName_v' => 'Công nghệ thông tin và truyền thông',
                'shortName' => 'ICT',
                'year_id' => 4,
                'department_id' => 4,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            9 =>
            array (
                'id' => 10,
                'MajorName' => 'Foundation Science',
                'MajorName_v' => 'Khoa học cơ bản',
                'shortName' => 'Foundation Science',
                'year_id' => 4,
                'department_id' => 1,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            10 =>
            array (
                'id' => 11,
                'MajorName' => 'Common Courses',
                'MajorName_v' => 'Những môn học chung',
                'shortName' => 'MS',
                'year_id' => 4,
                'department_id' => 1,
                'program_id' => 1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));
    }
}
