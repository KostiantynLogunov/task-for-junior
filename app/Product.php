<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'category', 'description', 'image'];

    //polymorphic relatio with categories
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }
}
