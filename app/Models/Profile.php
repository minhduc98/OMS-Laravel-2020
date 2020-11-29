<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = [ 'fullName',
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
        'Country '];

    public function student()
    {
        return $this->hasOne('App\Models\Student', 'student_id', 'id');
    }
}
