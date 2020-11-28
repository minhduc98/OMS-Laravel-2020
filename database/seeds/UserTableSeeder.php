<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'abc',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'admin',
                'password' => bcrypt('12345678'),
                'userType' => 'admin'
            ]
        ];

        DB::table('users')->insert($data);
    }
}
