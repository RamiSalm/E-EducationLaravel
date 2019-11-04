<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
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

    public function Matrix()
    {
        return $this->hasOne('App\Matrix');
    }

    public function Task()
    {
        return $this->hasMany('App\Task');
    }


}
