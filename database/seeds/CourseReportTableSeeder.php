<?php

use Illuminate\Database\Seeder;

class CourseReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_report')->delete();

        \DB::table('course_report')->insert(array (
            0 =>
            array (
                'id' => 1,
                'transDetail_id' => 1,
                'course_id' => 1,
                'final' => 10,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'transDetail_id' => 1,
                'course_id' => 2,
                'final' => 13.9,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'transDetail_id' => 1,
                'course_id' => 3,
                'final' => 18,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            3 =>
            array (
                'id' => 4,
                'transDetail_id' => 1,
                'course_id' => 4,
                'final' => 16,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            4 =>
            array (
                'id' => 5,
                'transDetail_id' => 1,
                'course_id' => 5,
                'final' => 19.7,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            5 =>
            array (
                'id' => 6,
                'transDetail_id' => 1,
                'course_id' => 6,
                'final' => 15.1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            6 =>
            array (
                'id' => 7,
                'transDetail_id' => 1,
                'course_id' => 7,
                'final' => 11.2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            7 =>
            array (
                'id' => 8,
                'transDetail_id' => 1,
                'course_id' => 8,
                'final' => 14,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            8 =>
            array (
                'id' => 9,
                'transDetail_id' => 1,
                'course_id' => 9,
                'final' => 17.7,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            9 =>
            array (
                'id' => 10,
                'transDetail_id' => 1,
                'course_id' => 10,
                'final' => 15.2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            10 =>
            array (
                'id' => 11,
                'transDetail_id' => 1,
                'course_id' => 11,
                'final' => 20,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            11 =>
            array (
                'id' => 12,
                'transDetail_id' => 1,
                'course_id' => 12,
                'final' => 18.5,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            12 =>
            array (
                'id' => 13,
                'transDetail_id' => 1,
                'course_id' => 13,
                'final' => 16.4,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            13 =>
            array (
                'id' => 14,
                'transDetail_id' => 1,
                'course_id' => 14,
                'final' => 18,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            14 =>
            array (
                'id' => 15,
                'transDetail_id' => 1,
                'course_id' => 15,
                'final' => 15.3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            15 =>
            array (
                'id' => 16,
                'transDetail_id' => 1,
                'course_id' => 16,
                'final' => 17.4,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            16 =>
            array (
                'id' => 17,
                'transDetail_id' => 1,
                'course_id' => 17,
                'final' => 13.5,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            17 =>
            array (
                'id' => 18,
                'transDetail_id' => 1,
                'course_id' => 18,
                'final' => 14.3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            18 =>
            array (
                'id' => 19,
                'transDetail_id' => 1,
                'course_id' => 19,
                'final' => 13,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            19 =>
            array (
                'id' => 20,
                'transDetail_id' => 1,
                'course_id' => 20,
                'final' => 12.7,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            20 =>
            array (
                'id' => 21,
                'transDetail_id' => 1,
                'course_id' => 21,
                'final' => 16,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            21 =>
            array (
                'id' => 22,
                'transDetail_id' => 1,
                'course_id' => 22,
                'final' => 16.6,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            22 =>
            array (
                'id' => 23,
                'transDetail_id' => 1,
                'course_id' => 23,
                'final' => 16.8,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            23 =>
            array (
                'id' => 24,
                'transDetail_id' => 1,
                'course_id' => 24,
                'final' => 14,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            24 =>
            array (
                'id' => 25,
                'transDetail_id' => 1,
                'course_id' => 25,
                'final' => 16.1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            25 =>
            array (
                'id' => 26,
                'transDetail_id' => 1,
                'course_id' => 26,
                'final' => 20,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            26 =>
            array (
                'id' => 27,
                'transDetail_id' => 1,
                'course_id' => 27,
                'final' => 11.2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            27 =>
            array (
                'id' => 28,
                'transDetail_id' => 1,
                'course_id' => 28,
                'final' => 14.2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            28 =>
            array (
                'id' => 29,
                'transDetail_id' => 1,
                'course_id' => 29,
                'final' => 10.8,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            29 =>
            array (
                'id' => 30,
                'transDetail_id' => 1,
                'course_id' => 30,
                'final' => 14,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            30 =>
            array (
                'id' => 31,
                'transDetail_id' => 1,
                'course_id' => 31,
                'final' => 17,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            31 =>
            array (
                'id' => 32,
                'transDetail_id' => 1,
                'course_id' => 32,
                'final' => 11.5,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            32 =>
            array (
                'id' => 33,
                'transDetail_id' => 1,
                'course_id' => 33,
                'final' => 12,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            33 =>
            array (
                'id' => 34,
                'transDetail_id' => 1,
                'course_id' => 34,
                'final' => 15,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            34 =>
            array (
                'id' => 35,
                'transDetail_id' => 1,
                'course_id' => 35,
                'final' => 10.3,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            35 =>
            array (
                'id' => 36,
                'transDetail_id' => 1,
                'course_id' => 36,
                'final' => 11.9,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            36 =>
            array (
                'id' => 37,
                'transDetail_id' => 1,
                'course_id' => 37,
                'final' => 15.5,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            37 =>
            array (
                'id' => 38,
                'transDetail_id' => 1,
                'course_id' => 38,
                'final' => 15.2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            38 =>
            array (
                'id' => 39,
                'transDetail_id' => 1,
                'course_id' => 39,
                'final' => 14.1,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            39 =>
            array (
                'id' => 40,
                'transDetail_id' => 1,
                'course_id' => 40,
                'final' => 13.7,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            40 =>
            array (
                'id' => 41,
                'transDetail_id' => 1,
                'course_id' => 41,
                'final' => 14.8,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            41 =>
            array (
                'id' => 42,
                'transDetail_id' => 1,
                'course_id' => 42,
                'final' => 14,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            42 =>
            array (
                'id' => 43,
                'transDetail_id' => 1,
                'course_id' => 43,
                'final' => 14.7,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));
    }
}
