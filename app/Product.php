<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
