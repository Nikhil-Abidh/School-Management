<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
