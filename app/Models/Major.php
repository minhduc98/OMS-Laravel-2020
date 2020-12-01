<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [ 'majorName',
        'majorName_v',
        'shortName'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id', 'id');
    }

    public function program()
    {
        return $this->belongsTo('App\Models\Program', 'program_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo('App\Models\Year', 'year_id', 'id');
    }

    public function student()
    {
        return $this->hasOne('App\Models\Student');
    }

    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
}
