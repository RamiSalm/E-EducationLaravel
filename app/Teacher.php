<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = false;

    public function School()
    {
        return $this->belongsTo('App\School');
    }

    public function Task()
    {
        return $this->hasMany('App\Task');
    }
}
