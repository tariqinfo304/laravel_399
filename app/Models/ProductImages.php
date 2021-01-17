<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    public $timeStamps=false;


    public function product()
    {
        return $this->belongsTo(Product::class,"product_id");
    }
}
