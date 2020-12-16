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
                'username' => 'admin',
                'password' => bcrypt('12345678'),
                'userType' => 'admin'
            ],
            [
                'username' => 'an',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'anh',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'tuan',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'duc',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'tung',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
            [
                'username' => 'phong',
                'password' => bcrypt('12345678'),
                'userType' => 'student'
            ],
        ];

        DB::table('users')->insert($data);
    }
}
