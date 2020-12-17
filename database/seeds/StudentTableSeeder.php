<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('student')->delete();

        $data = [
        [
            'student_code' => 'USTHBI7-000',
            'user_id' => 2,
            'profile_id' => 1,
            'major_id' => 6,
            'created_at' => '2020-06-16 05:55:46',
            'updated_at' => '2020-06-26 08:32:33',
        ],
        [
            'student_code' => 'USTHBI7-001',
            'user_id' => 3,
            'profile_id' => 2,
            'major_id' => 6,
            'created_at' => '2020-06-16 05:55:46',
            'updated_at' => '2020-06-26 08:32:33',
        ],
        [
                'student_code' => 'USTHBI8-159',
                'user_id' => 4,
                'profile_id' => 3,
                'major_id' => 3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ],
            [
                'student_code' => 'USTHBI8-042',
                'user_id' => 5,
                'profile_id' => 4,
                'major_id' => 3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ],
            [
                'student_code' => 'USTHBI8-159',
                'user_id' => 6,
                'profile_id' => 5,
                'major_id' => 3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ],
            [
                'student_code' => 'USTHBI8-139',
                'user_id' => 7,
                'profile_id' => 6,
                'major_id' => 3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ],
        ];
        DB::table('student')->insert($data);
    }
}
