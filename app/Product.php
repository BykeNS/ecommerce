<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'description', 'image', 'slug', 'category'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeAllProduct($query)
    {
        return $query->orderBy('created_at', 'desc')->paginate(12);
    }
    // public function scopeSearch($query)
    // {
    //     return $query->where('name', 'like', "%" . $query . "%");

    //  }
    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

}
