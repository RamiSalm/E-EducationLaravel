<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public $timestamps = false;

    public function School()
    {
        return $this->belongsTo('App\School');
    }
    
}
