<?php

use Illuminate\Database\Seeder;

class DiplomaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('diploma')->delete();

        $data = [
        [
            'ranking' => 'Good',
            'ranking_v' => 'Khá',
            'student_id' => 1,
            'graduationYear' => 2019,
            'diplomaNote' => '001/2019/ĐHKHCN-VB-CN',
            'diplomaNumber' => '101001201100001',
            'created_at' => '2020-06-16 05:55:46',
            'updated_at' => '2020-06-26 08:32:33',
        ],
        1 =>
        [
            'ranking' => 'Average Good',
            'ranking_v' => 'Trung bình Khá',
            'student_id' => 2,
            'graduationYear' => 2019,
            'diplomaNote' => '002/2019/ĐHKHCN-VB-CN',
            'diplomaNumber' => '101001201100009',
            'created_at' => '2020-06-16 05:55:46',
            'updated_at' => '2020-06-26 08:32:33',
        ],
    ];
    DB::table('diploma')->insert($data);
    }
}
