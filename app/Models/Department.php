<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';

    protected $fillable = [ 'departmentName',
        'departmentName_v',
        'shortName'];

    public function major()
    {
        return $this->hasMany('App\Models\Major');
    }
}
