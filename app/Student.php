<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    public function School()
    {
        return $this->belongsTo('App\School');
    }

    public function Classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function Matrix()
    {
        return $this->belongsTo('App\Matrix');
    }

    public function Directorate()
    {
        return $this->belongsTo('App\Directorate');
    }

    public function Ministry()
    {
        return $this->belongsTo('App\Ministry');
    }

    public function Father()
    {
        return $this->belongsTo('App\Father');
    }

}
