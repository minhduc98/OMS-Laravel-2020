<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranscriptDetails extends Model
{
    protected $fillable = [ 'ETCScredits',
    'GPAGrade',
    'note'];

    public function transcript()
    {
        return $this->belongsTo('App\Models\Transcript', 'transcript_id', 'id');
    }

    public function courseReport()
    {
        return $this->hasMany('App\Models\CourseReport');
    }
}
