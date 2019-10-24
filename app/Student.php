<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as  Authenticatable;

class Student extends Model
{
	
    protected $fillable = [
        'name', 'email', 'password','phone','gender','dob','class','section','address','blodd_grp','cls_roll','gender','father_name','mother_name','role','image','father_NID','mother_NID','father_phone','mother_phone'
    ];
}
