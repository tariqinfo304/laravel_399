<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey="id_id";

    public function info()
    {
    	//emp_id => F.K
    	// Id_id => P.k
        return $this->hasOne(EmplyeeInfo::class,"emp_id","id_id");
    }
}
