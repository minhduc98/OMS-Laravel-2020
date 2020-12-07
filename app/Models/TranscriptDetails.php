<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranscriptDetails extends Model
{
    protected $table = 'transcript_detail';

    protected $fillable = [ 'ECTScredits',
    'GPAGrade',
    'note', 'transcript_id'];

    public function transcript()
    {
        return $this->belongsTo('App\Models\Transcript', 'transcript_id', 'id');
    }

    public function courseReport()
    {
        return $this->hasMany('App\Models\CourseReport');
    }
}
