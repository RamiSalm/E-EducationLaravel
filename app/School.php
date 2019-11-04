<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{    
    public $timestamps = false;

    public function Directorate()
    {
        return $this->belongsTo('App\Directorate');
    }

    public function Ministry()
    {
        return $this->belongsTo('App\Ministry');
    }

    public function Student()
    {
        return $this->hasMany('App\Student');
    }

    public function Teacher()
    {
        return $this->hasMany('App\Teacher');
    }

    public function Notice()
    {
        return $this->hasMany('App\Notice');
    }

    public function Task()
    {
        return $this->hasMany('App\Task');
    }

    public function Classroom()
    {
        return $this->hasMany('App\Classroom');
    }

    public function Father()
    {
        return $this->hasMany('App\Father');
    }

    
}
