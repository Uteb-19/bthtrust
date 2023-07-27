<?php // app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'price'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'carts')->withPivot('quantity');
    }

    public function productDetail()
    {
        return $this->hasOne(ProductDetail::class);
    }
}

