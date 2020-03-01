<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobInformation extends Model
{
    protected $table='job_information';
    protected $fillable =['student_id','company_name','company_address','designation'];
}
