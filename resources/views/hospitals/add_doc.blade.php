@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Staff To {{$hospital->h_name}} {{$hospital->h_type}} Hospital</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Staff To {{$hospital->h_name}} {{$hospital->h_type}} Hospital</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Add Staff To {{$hospital->h_name}} {{$hospital->h_type}} Hospital</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         <!---If file upload is involved always add enctype to your opening
             form tag and set it to multipart/form-data--->
        {!! Form::open(['action' => 'HospitalController@store_staff', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
        **/ !!}
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus">
                           <div class="inner-addon right-addon">
                              <i class="fa fa-user"></i>
                           <input type="text" class="form-control floating" id="pin" name="pin" placeholder="Enter Staff Member's Pin">
                           </div>
                           <label for="pin" class="focus-label">Staff MedicPin </label>
                        </div>
                     </div>
                  <div class="col-md-6">
                      <div class="form-group"> 
                          <select class="form-control" id="role" name="role">
                             <option value="N/A">--Select Role--</option>
                             <option value="Nurse">Biochemist</option>
                             <option value="Doctor">Doctor</option>
                             <option value="Laboratory Worker">Laboratory Worker</option>
                             <option value="Nurse">Nurse</option>
                             <option value="Pharmacist">Pharmacist</option>
                             <option value="Ward Maid">Ward Maid</option>
                          </select>

                      </div>
                  </div>
                     <input type="hidden" class="form-control" name="h_id" id="h_id" value="{{$hospital->id}}">
                     <input type="hidden" class="form-control" name="h_name" id="h_name" value="{{$hospital->h_name}} {{$hospital->h_type}}">
                 
               </div>
               <hr>
         {{Form::submit('Add Staff', ['class' => 'btn bg-primary-light', 'style' => 'text-transform:uppercase;'])}}
        {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
</div>

@else
<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>

</div>
@endif   

<!-- Footer 
<footer class="bg-white iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="./privacy">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="./terms">Terms of Use</a></li>
              </ul>
           </div>
           <div class="col-lg-6 text-right">
              Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
Footer END -->
@endsection