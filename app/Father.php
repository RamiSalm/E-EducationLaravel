<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    public $timestamps = false;

    public function School()
    {
        return $this->belongsTo('App\School');
    }

    public function Student()
    {
        return $this->hasMany('App\Student');
    }
}
