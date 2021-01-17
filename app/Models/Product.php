<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function images()
    {
    	return $this->hasMany(ProductImages::class,"product_id");
    }


    function customers_list()
    {
    	//table => orders
    	//product_id => F.K ( Own Class )
    	//customer_id => "Customer::class"
    	return $this->belongsToMany(Customer::class,"orders","product_id","customer_id");
    }
}
