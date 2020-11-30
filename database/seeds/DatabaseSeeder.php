<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(CourseReportTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(DiplomaTableSeeder::class);
        $this->call(MajorTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(TranscriptDetailTableSeeder::class);
        $this->call(TranscriptTableSeeder::class);
        $this->call(YearTableSeeder::class);
    }
}
