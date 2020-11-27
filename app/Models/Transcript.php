<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transcript extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo('App\Models\Year', 'year_id', 'id');
    }

    public function transcriptDetails()
    {
        return $this->hasMany('App\Models\TranscriptDetails');
    }
}
