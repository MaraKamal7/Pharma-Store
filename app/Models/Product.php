<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['name' , 'least_number' , 'barcode','cat_id','vendor_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
