<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pill extends Model
{
    protected $fillable = [
        'name',
        'company_id',
        'description',
        'image_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
