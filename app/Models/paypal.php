<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paypal extends Model
{
    use HasFactory;
    public $timestamps =false;
    public function products()
    {
        return $this->hasOne(products::class);
    }
}
