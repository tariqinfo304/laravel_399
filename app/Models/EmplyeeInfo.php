<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmplyeeInfo extends Model
{
    use HasFactory;

    protected $table="emp_info";
    public $timestamps=false;


    function emp()
    {
    	return $this->belongsTo(Employee::class,"emp_id");
    }
}
