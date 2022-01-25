<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsToMany('\App\Product','customer_product')
             ->withPivot('customer_id','status'); 
    }
    
     public function customer(){
        return $this->belongsToMany('\App\Customer','customer_product')
             ->withPivot('product_id','status'); 
    }
}

