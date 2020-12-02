<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'year';

    protected $fillable = ['year'];

    public function major()
    {
        return $this->hasOne('App\Models\Major');
    }

    public function transcript()
    {
        return $this->hasOne('App\Models\Transcript');
    }
}
