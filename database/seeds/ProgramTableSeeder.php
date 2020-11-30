<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('program')->delete();

        \DB::table('program')->insert(array (
            0 =>
            array (
                'id' => 1,
                'programName' => 'Bachelor Program for Undergraduated Students',
                'programName_v' => 'Chương trình cử nhân',
                'shortName' => 'Bachelor Program',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'programName' => 'Master Program for Post Graduated Students',
                'programName_v' => 'Chương trình Thạc sỹ cho học viên',
                'shortName' => 'Master Program',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'programName' => 'Philosophy Doctor Program for Post Graduated Students',
                'programName_v' => 'Chương trình tiến sỹ cho học viên',
                'shortName' => 'PhD Program',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));

    }
}
