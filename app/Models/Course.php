<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = [ 'courseName',
        'courseName_v',
        'courseCode',
        'summary',
        'totalHour',
        'lectureHour',
        'labHour',
        'major_id' ];

    public function major()
    {
        return $this->belongsTo('App\Models\Major', 'major_id', 'id');
    }

    public function courseReport()
    {
        return $this->hasOne('App\Models\CourseReport');
    }

}
