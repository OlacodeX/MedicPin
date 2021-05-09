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
                  <li class="breadcrumb-item active" aria-current="page">Set Hospital Basic Fees.</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Set Hospital Basic Fees.</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Set Hospital Basic Fees</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         {!! Form::open(['action' => ['HospitalController@update', $hospital->id],'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
                  <div class="row">
                      <input type="hidden" class="form-control" id="h_name" name="h_name" value="{{$hospital->h_name}}">
                      <input type="hidden" class="form-control" name="h_add" id="h_add" value="{{$hospital->h_add}}">
                      <input type="hidden" class="form-control" id="h_number" name="h_number" value="{{$hospital->h_number}}">
                     
                      <input type="hidden" class="form-control" id="h_email" value="{{$hospital->h_email}}" name="h_email">
                     
                   <input type="hidden" class="form-control" id="h_type" value="{{$hospital->h_type}}" name="h_type">
                <div class="form-group col-md-6">
                   <label for="card">How much is your card fee?</label> <br>
                   <small>This is the amount patients will pay when they are added to your hospital</small>
                   <div class="inner-addon right-addon">
                       <i class="fa fa-dollar"></i>
                   <input type="text" class="form-control" id="card" name="card" placeholder="Enter value in naira">
                   </div>
                </div>
                <div class="form-group col-md-6">
                   <label for="consultation">How much is your Consultation Fee?</label><br>
                   <small>This is the amount patients will pay when they consult a doctor at your hospital</small>
                   <div class="inner-addon right-addon">
                       <i class="fa fa-dollar"></i>
                   <input type="text" class="form-control" name="consult" id="consult" placeholder="Enter value in naira">
                   </div>
                </div>
             </div>
                {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Save', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
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