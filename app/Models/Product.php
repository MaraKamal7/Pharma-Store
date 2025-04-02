<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['name' , 'least_number' , 'barcode','category_id','vendor_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }


    public function patch() {
        return $this->belongsTo(Patch::class);
    }
}
