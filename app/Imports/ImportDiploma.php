<?php

namespace App\Imports;

use App\Models\Diploma;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportDiploma implements ToModel, WithChunkReading, WithStartRow
{
    use Importable;

    /**
     * @param array $row
     *
     * @return model
     */

    public function model(array $row)
    {
        $student_id = Student::where('student_code', 'like', '%'.$row[1].'%')->value('id');

        $diploma = Diploma::where('student_id', $student_id)->first();

        if (!$diploma) $diploma = new Diploma();

        $diploma->student_id = $student_id;
        $diploma->ranking = $row[4];
        $diploma->ranking_v =  $row[5];
        $diploma->graduationYear = $row[12];
        $diploma->diplomaNumber = $row[14];
        $diploma->diplomaNote = $row[15];

        $diploma->save();
        return null;
    }

        /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 1000;
    }
}
