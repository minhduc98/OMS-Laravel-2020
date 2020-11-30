<?php

use Illuminate\Database\Seeder;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('year')->delete();

        \DB::table('year')->insert(array (
            0 =>
            array (
                'id' => 1,
                'year' => '2016-2019',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            1 =>
            array (
                'id' => 2,
                'year' => '2017-2020',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            2 =>
            array (
                'id' => 3,
                'year' => '2018-2021',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
            3 =>
            array (
                'id' => 4,
                'year' => '2019-2022',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ),
        ));
    }
}
