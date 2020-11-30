<?php

use Illuminate\Database\Seeder;

class TranscriptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transcript')->delete();

        \DB::table('transcript')->insert(array (
            0 =>
            array (
                'id' => 1,
                'student_id' => 3,
                'year_id' => 2,
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));
    }
}
