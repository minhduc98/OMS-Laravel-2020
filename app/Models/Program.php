<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [ 'programName',
        'programName_v',
        'shortName'];

    public function major()
    {
        return $this->hasMany('App\Models\Major');
    }
}
