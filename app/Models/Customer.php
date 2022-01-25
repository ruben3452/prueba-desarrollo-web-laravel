<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsToMany('\App\Product','customer_product')
             ->withPivot('customer_id','status'); 
    }
}
