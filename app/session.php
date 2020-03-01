<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $table = 'sessions';
   	public $fillable =['session_year'];

   	public function students(){
   	    return $this->hasMany('App\Student');
    }

}
