<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name'
    ];

    /*
     |------------------------------------------------------
     | Getters
     |------------------------------------------------------
     */
    public function getPathAttribute()
    {
        return asset('uploads/pills/'.$this->name);
    }
}
