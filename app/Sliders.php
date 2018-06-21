<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    //
    public function images()
    {
        return $this->belongsToMany('App\Images');
    }
}
