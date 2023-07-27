<?php 
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'total_amount'];

    // Define the relationship between Order and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship between Order and Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'carts')->withPivot('quantity');
    }
}

?>