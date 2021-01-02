<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = "std_id";

   // public $incrementing = false;
   //  protected $keyType = 'string';
  //  public $timestamps = false;

    /*
    const CREATED_AT = 'added_date';
    const UPDATED_AT = 'updated_date';
    */

    //protected $connection = 'sqlite';


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => "test",
    ];
}
