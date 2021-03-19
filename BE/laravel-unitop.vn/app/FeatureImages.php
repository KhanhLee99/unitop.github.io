<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureImages extends Model
{
    //
    function Post(){
        return $this->belongsTo('App\Post');
    }
}
