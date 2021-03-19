<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['title', 'content', 'user_id', 'thumbnail'];

    function FeatureImages(){
        return $this->hasOne('App\FeatureImages');
    }

    function User(){
        return $this->belongsTo('App\User');
    }
}
