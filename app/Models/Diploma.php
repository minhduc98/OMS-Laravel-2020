<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    protected $fillable = [ 'ranking',
        'ranking_v',
        'graduationYear',
        'diplomaNumber',
        'diplomaNote'];
    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
