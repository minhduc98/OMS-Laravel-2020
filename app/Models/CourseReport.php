<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseReport extends Model
{
    protected $table = 'course_report';

    protected $fillable = [ 'final', 'transDetail_id', 'course_id' ];

    public function transcriptDetails()
    {
        return $this->belongsTo('App\Models\TranscriptDetails', 'transDetail_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }
}
