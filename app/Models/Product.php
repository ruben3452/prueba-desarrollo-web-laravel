<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsToMany('\App\Customer','customer_product')
             ->withPivot('product_id','status'); 
    }
}
