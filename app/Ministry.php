<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    public $timestamps = false;
    
    public function Directorate()
    {
        return $this->hasMany('App\Directorate');
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
