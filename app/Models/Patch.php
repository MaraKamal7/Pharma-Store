<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patch extends Model
{
    protected $fillable = ['product_id' , 'quantity' , 'selling_price','cost_price','expiration_date'];



    public function product() {
        return $this->belongsTo(Product::class);
    }
    
    
}
