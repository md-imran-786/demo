@extends('frontend.layouts.frontend')

@section('content')

<div class="content">

    <div class="block block-themed">
        <div class="block-content">
            <div class="row">
                <div class="col-6">
                    <a href="/alumni-student" type="button" class="btn btn-hero btn-primary text-uppercase mb-10 float-right">Alumni Student</a>
                </div>

                <div class="col-6">
                    <a href="/regular-student" type="button" class="btn btn-hero btn-success text-uppercase mb-10">Regular Student</a>
                </div>
            </div>
        </div>
    </div>

   <div class="row">
      <div class="col-md-12">
         <div class="col-md-8 mx-auto d-block">
            @if($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif

            @if(session()->has('msg'))
               <div class="alert alert-success alert-dismissable" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                  <p class="mb-0"> {{session()->get('msg')}} </p>
               </div>
            @endif

         </div>
      </div>
   </div>


      <div class="row">
         <div class="col-md-12">
            <div class="col-xl-10 mx-auto">
               <div class="block block-themed">
                  <div class="block-header bg-success">
                     <h3 class="block-title">Regular Student</h3>
                        <div class="block-options">
                           <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                              <i class="si si-refresh"></i>
                           </button>
                           <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </div>
                    </div>

                    <div class="block-content">
                        <form name="reqular_student" action="{{route('student.store')}}" method="post">
                           @csrf
                            <input type="hidden" name="form_path" value="regular_student">
                           <div class="form-group row">
                              <div class="col-6">
                                 <div class="form-material floating">
                                    <input type="text" class="form-control" id="student_name" name="student_name" required="">
                                    <label for="student_name">Enter Name</label>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-material floating">
                                    <input type="text" class="form-control" id="father_name" name="father_name" required="">
                                    <label for="father_name">Enter Father Name</label>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-material floating">
                                    <input type="text" class="form-control" id="mother_name" name="mother_name" required="">
                                    <label for="mother_name">Enter Mother Name</label>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <input type="number" class="form-control" id="roll" name="roll"
                                       required="">
                                       <label for="roll">Roll No. (Engineering)</label>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <input type="number" class="form-control" id="registration_no" name="registration_no" required="">
                                       <label for="reg">Reg No. (Engineering)</label>
                                    </div>
                                 </div>
                              </div>


                              <div class="col-6">
                                 <div class="form-material floating open">
                                    <select class="form-control" id="technology_id" name="technology_id" size="1">
                                       <option selected="" disabled="">Select Technology</option>
                                       @foreach(Library::get_technologies() as $technology)
                                       <option value="{{$technology->id}}">{{ucfirst($technology->name)}} (<strong>{{ucfirst($technology->code)}}</strong>)</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>


                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating open">
                                       <select class="form-control" id="session_id" name="session_id" size="1">
                                          <option selected="" disabled="">Select Session</option>
                                             @foreach(Library::get_sessions() as $session)

                                          <option value="{{$session->id}}">{{ucfirst($session->session_year)}}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                              </div>


                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <input type="number" class="form-control" id="ssc_roll" name="ssc_roll" required="">
                                       <label for="ssc_roll">SSC Roll No.</label>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <input type="number" class="form-control" id="mobile_no" name="mobile_no" required="">
                                       <label for="mobile_no">Mobile No .</label>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <input type="email" class="form-control" id="email" name="email" required="">
                                       <label for="email">Email Address</label>
                                    </div>
                                 </div>
                              </div>


                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <textarea class="form-control" id="present_address" name="present_address" rows="4" placeholder="Present Address" required=""></textarea>
                                    </div>
                                 </div>
                              </div>


                              <div class="col-6">
                                 <div class="form-group">
                                    <div class="form-material floating">
                                       <textarea class="form-control" id="permanent_address" name="permanent_address" rows="4" placeholder="Parmanent Address" required=""></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-12">
                                 <div class="form-group pt-5 mt-5">
                                    <h5>What Document Do You Need?</h5>
                                 </div>
                              </div>

                              <div class="col-6">
                                 <div class="form-group row">

                                    <div class="col-12">
                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="ssc_marksheet" value="SSC Marksheet">
                                          <label class="custom-control-label" for="ssc_marksheet">SSC Marksheet</label>
                                       </div>

                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="engineering_marksheet" value="Engineering Marksheet ( 1st to 8th Semester )">
                                          <label class="custom-control-label" for="engineering_marksheet">Engineering Marksheet ( 1st to 8th Semester )</label>
                                       </div>

                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="course_complete_certificate" value="Course Complete Certificate">
                                          <label class="custom-control-label" for="course_complete_certificate">Course Complete Certificate</label>
                                       </div>

                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="testimonial" value="Testimonial">
                                          <label class="custom-control-label" for="testimonial">Testimonial</label>
                                       </div>

                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="recommendation_letter" value="Recommendation Letter">
                                          <label class="custom-control-label" for="recommendation_letter">Recommendation Letter</label>
                                       </div>

                                       <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="noc_letter" value="NOC Letter">
                                          <label class="custom-control-label" for="noc_letter">NOC Letter</label>
                                       </div>

                                        <div class="custom-control custom-checkbox mb-5">
                                          <input class="custom-control-input" type="checkbox" name="document_requirement[]" id="industrial_attachment_letter" value="Industrial Attachment Letter">
                                          <label class="custom-control-label" for="industrial_attachment_letter">Industrial Attachment Letter</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">

                              <div class="col-12">
                                 <h4>Note:  </h4>
                              </div>



                             <button type="submit" class="col-md-6 mx-auto mb-5 btn btn-alt-info">
                                <i class="fa fa-send m-5"></i>Submit
                             </button>

                           </div>
                        </form>
                    </div>
                </div>
    </div>
        </div>
    </div>
</div>



@endsection
