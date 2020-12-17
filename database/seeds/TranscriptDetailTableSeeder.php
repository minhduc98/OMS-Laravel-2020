<?php

use Illuminate\Database\Seeder;

class TranscriptDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('transcript_detail')->delete();
        $data = [
            [
                'transcript_id' => 1,
                'note' => 'Validated',
                'created_at' => '2020-06-16 05:55:46',
                'updated_at' => '2020-06-26 08:32:33',
            ]
        ];
        DB::table('transcript_detail')->insert($data);
    }
}
