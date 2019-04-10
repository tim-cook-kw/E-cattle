<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    public function checkout(){
    	return $this->hasMany('App\User');
    }
   
}
