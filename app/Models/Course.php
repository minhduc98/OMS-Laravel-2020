<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [ 'courseName',
        'courseName_v',
        'courseCode',
        'summary',
        'totalHour',
        'lectureHour',
        'labHour' ];

    public function major()
    {
        return $this->belongsTo('App\Models\Major', 'major_id', 'id');
    }

    public function courseReport()
    {
        return $this->hasOne('App\Models\CourseReport');
    }

}
