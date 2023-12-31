<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stripe\Product;

class Review extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,"userId");
    }
    public function product()
    {
        return $this->belongsTo(Product::class, "productId");
    }
   
   
}
