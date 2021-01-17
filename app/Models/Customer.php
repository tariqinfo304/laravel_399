<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    function products_list()
    {
    	return $this->belongsToMany(Product::class,"orders","customer_id","product_id");
    }
}
