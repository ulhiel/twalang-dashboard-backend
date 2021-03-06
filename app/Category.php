<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function activities(){
        return $this->hasMany('App\Activity');
    }

    public function purchases(){
        return $this->hasManyThrough('App\Purchase','App\Activity');
    }

    public function users(){
        return $this->hasManyThrough('App\User','App\Activity');
    }
}
