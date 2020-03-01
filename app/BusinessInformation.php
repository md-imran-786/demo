<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessInformation extends Model
{
    protected $table = 'business_information';
    protected $fillable =['student_id','business_name','business_address','type'];
}
