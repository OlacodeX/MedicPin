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
                  <li class="breadcrumb-item active" aria-current="page">Patients Awaiting Test</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Patients Awaiting Test</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
<style>
   
span.pull-right.in{
      font-size: 10px;
      color: #4ff84f;
   }
   span.pull-right.out{
      font-size: 10px;
      color: #fa1414;
      }
</style>
   <div>
      <div class="card dash-card">
         <div class="card-header">
            <h4 class="card-title"><b>Your search result</b></h4>
            
         </div>
      </div> 
      <div class="card-body">
      @if (!empty($patient)) 
      <div class="appointment-list">
         @php
             //$patient = App\patients::where('pin', $appointment->patient)->first();
             $patient_profile = App\User::where('pin', $patient->pin)->first();
             //$doctor = App\User::where('pin', $appointment->doctor)->first();
         @endphp
         <div class="profile-info-widget">
            <a class="booking-doc-img">
               <img src="img/profile/{{$patient_profile->img}}" alt="User Image">
            </a>
            <div class="profile-det-info">
               <h3><a>{{$patient->name}}</a></h3>
               <div class="patient-details">
                  <h5 class="mb-0"><i class="fas fa-phone"></i> <a href="tel:{{$patient_profile->p_number}}" style="text-decoration: none;">{{$patient_profile->p_number}}</a></h5>
                  <h5><i class="fas fa-envelope"></i> {{$patient_profile->email}}</h5>
               </div>
            </div>
         </div>
         <div class="appointment-action">
            <a class="btn btn-sm pull-right">
               
               {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
               {{Form::hidden('pin', $patient->pin)}}
               <!--{{Form::hidden('username', $patient->username)}}--->
               <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="fas fa-eye"></i> View and Complete Test</button>
              
               {!!Form::close()!!}
            </a>
         </div>
      </div> 
  @else
  <p>No Scheduled Tests Yet</p>   
@endif
   </div> 
</div>
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