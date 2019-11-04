<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;

    public function School()
    {
        return $this->belongsTo('App\School');
    }

    public function Teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function Classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
