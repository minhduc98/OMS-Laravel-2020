<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
