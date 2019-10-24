<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Poll;

class Teacher extends Model  
{
    public function polls()
    {
    	return $this->hasMany('App\Poll','user_id','id');
    }
}
