<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseReport extends Model
{
    protected $fillable = [ 'final' ];

    public function transcriptDetails()
    {
        return $this->belongsTo('App\Models\TranscriptDetails', 'transcriptDetail_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }
}
