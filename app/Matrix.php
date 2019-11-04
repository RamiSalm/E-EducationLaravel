<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    public $timestamps = false;

    public function Classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function Student()
    {
        return $this->hasMany('App\Student');
    }
}
