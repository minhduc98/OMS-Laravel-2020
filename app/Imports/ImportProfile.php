<?php

namespace App\Imports;

use App\Models\Profile;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportProfile implements ToModel, WithChunkReading, WithStartRow
{
    use Importable;

    /**
     * @param array $row
     *
     * @return model
     */

    public function model(array $row)
    {
        $profile = Profile::find($row[0]);
        if (!$profile) $profile = new Profile();

        $profile->fullName = $row[1];
        $profile->fullName_v =  $row[2];
        $profile->gender = $row[3];
        $profile->DOB = $row[4];
        $profile->DOB_v = $row[5];
        $profile->POB = $row[6];
        $profile->POB_v = $row[7];
        $profile->Nationality = $row[8];
        $profile->Ethnicity = $row[9];
        $profile->Mail = $row[10];
        $profile->PhoneNumber = $row[11];
        $profile->MartialStatus = $row[12];
        $profile->Address = $row[13];
        $profile->City = $row[14];
        $profile->Country= $row[15];

        $profile->save();
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
