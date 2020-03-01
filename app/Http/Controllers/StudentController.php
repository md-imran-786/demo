<?php

namespace App\Http\Controllers;

use App\Student;
use App\JobInformation;
use App\BusinessInformation;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Student $student,JobInformation $job_information,BusinessInformation $business_information)
    {
        $this->student = $student;
        $this->job_information = $job_information;
        $this->business_information = $business_information;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_path = $request->get('form_path');

        $data = [
            'student_name' => $request->student_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'roll' => $request->roll,
            'registration_no' => $request->registration_no,
            'technology_id' => $request->technology_id,
            'session_id' => $request->session_id,
            'ssc_roll' => $request->ssc_roll,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'document_requirement' => implode(',',$request->document_requirement)
        ];




        if($form_path=='regular_student'){
            $this->student->create($data);

        }elseif ($form_path=='alumni_student'){
            $success = $this->student->create($data);
           if($request->company_name != null || $request->company_address != null || $request->designation != null  ) {
               $jobs_data = [
                   'student_id' => $success->id,
                   'company_name' => $request->company_name,
                   'company_address' => str_replace(',',' ',$request->company_address),
                   'designation' => $request->designation
               ];

               dd($jobs_data);
               $this->job_information->create($jobs_data);

           }

           if($request->business_name != null || $request->business_address != null || $request->type != null  ){
               $business_data = [
                   'student_id' => $success->id,
                   'business_name' => $request->business_name,
                   'business_address' => str_replace(',',' ',$request->business_address),
                   'type' => $request->type
               ];

               $this->business_information->create($business_data);

           }

        }else{
            //nothing
        }







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
