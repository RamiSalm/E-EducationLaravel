<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    public $timestamps = false;
    
    public function Ministry()
    {
        return $this->belongsTo('App\Ministry');
    }

    public function School()
    {
        return $this->hasMany('App\School');
    }

    public function Student()
    {
        return $this->hasMany('App\Student');
    }

}
