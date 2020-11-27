<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile', 'profile_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo('App\Models\Major', 'major_id', 'id');
    }

    public function transcript()
    {
        return $this->hasMany('App\Models\Transcript');
    }

    public function diploma()
    {
        return $this->hasOne('App\Models\Diploma', 'student_id', 'id');
    }
}
