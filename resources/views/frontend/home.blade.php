@extends('frontend.layouts.frontend')

@section('content')

<div class="content">
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

      <div class="col-xl-10 mx-auto">
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
      </div>
   </div>
</div>



@endsection
