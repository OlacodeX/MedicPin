
@extends('layouts.maininnerr')

@section('content')
@include('inc.navmaininnerr')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Appointment</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Any Changes To Your Appointment</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinnerr')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Edit Appointment</b></h4>
      </div>
      <div class="card-body">
         @include('inc.messages')
               {!! Form::open(['action' => 'AppointmentsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
               **/ !!}
               <div class="row">
               <div class="form-group col-md-6">
                  <label for="with">With?</label>
                  <div class="inner-addon right-addon">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" id="patient" name="patient" value="{{$appointment->patient}}">
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <label for="date">Date</label>
                  <div class="inner-addon right-addon">
                        <i class="fa fa-date"></i>
                        <input type="date" class="form-control" name="date" id="date" value="{{$appointment->date}}">
                  </div>
               </div>
               <div class="form-group col-md-6">
                  <label for="time">Time</label>
                  <div class="inner-addon right-addon">
                        <i class="fa fa-clock"></i>
                        <input type="time" class="form-control" id="time" name="time" value="{{$appointment->time}}">
                  </div>
               </div>
            </div>
            {{Form::hidden('_method', 'PUT')}}
           <button type="submit" class="btn btn-primary">Update Appointment</button>
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