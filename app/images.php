<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //
    public function slider()
    {
        return $this->belongsToMany('App\Slider');
    }
}
