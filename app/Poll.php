<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;

class Poll extends Model
{
    public function teacher()
    {
    	return $this->belongsTo('App\Teacher','user_id','id');
    }
}
