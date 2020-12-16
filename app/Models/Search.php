<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'search';

    protected $fillable = [ 'student_code',
        'fullName',
        'fullName_v',
        'gender',
        'DOB',
        'DOB_v',
        'POB',
        'POB_v',
        'Nationality',
        'Ethnicity',
        'Mail',
        'PhoneNumber',
        'MartialStatus',
        'Address',
        'City',
        'Country' ,
        'MajorName',
        'year',
        'ranking',
        'ranking_v',
        'graduationYear',
        'diplomaNumber',
        'diplomaNote'];
}
