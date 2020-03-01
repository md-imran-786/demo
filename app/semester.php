<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    protected $table = 'semesters';
   	public $fillable =['name'];

    public function students(){
        return $this->hasMany('App\Student');
    }
    public function payment(){
        return $this->hasMany('App\Payment');
    }

    //checking git for automatic login

}
