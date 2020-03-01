<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable =['student_name','father_name','mother_name','roll','registration_no','technology_id','session_id','ssc_roll','mobile_no','email','present_address','permanent_address','document_requirement'];

}

