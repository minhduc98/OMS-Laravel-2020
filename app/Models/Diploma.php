<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $table = 'diploma';

    protected $fillable = [ 'ranking',
        'ranking_v',
        'graduationYear',
        'diplomaNumber',
        'diplomaNote',
        'student_id'];
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id', 'id');
    }
}
