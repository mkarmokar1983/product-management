<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_id', 'name', 'descriptions', 'price','stock', 'image'];
}
