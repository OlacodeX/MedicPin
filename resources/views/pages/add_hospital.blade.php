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
                  <li class="breadcrumb-item active" aria-current="page">Add Hospital To HMO</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Hospital To HMO</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Hospital On MedicPin?</b></h4>
       <small>Enter the hospital email on Medicpin.</small>
      </div>
      <div class="card-body">
         
         @include('inc.messages')
         {!! Form::open(['action' => 'HmoController@store_hospital', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!} 
       <div class="form-group form-focus">
       <div class="inner-addon right-addon">
           <i class="fa fa-envelope"></i>
       <input type="text" class="form-control floating" id="h_email" name="h_email" placeholder="Enter Hospital Email On MedicPin">
       </div>
       <label for="email" class="focus-label">Hospital Email</label>
       </div> 
      <button type="submit" class="btn btn-primary">Add Hospital</button>
      {!! Form::close() !!}
   </div>
      </div> 
<div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Hospital Not On MedicPin?</b></h4>
         <small>Enter Details Below</small>
      </div> 
      <div class="card-body">
      {!! Form::open(['action' => 'HmoController@store_hospital', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
      **/ !!} 
      <div class="row">
         <div class="col-md-6">
           <div class="form-group form-focus">
              <div class="inner-addon right-addon">
                  <i class="fa fa-user"></i>
              <input type="text" class="form-control floating" id="name" name="name" placeholder="Hospital Name">
              </div>
              <label for="name" class="focus-label">Hospital Name:</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group form-focus">
              <div class="inner-addon right-addon">
                  <i class="fa fa-envelope"></i>
              <input type="text" class="form-control floating" name="email" id="email" placeholder="Hospital Email">
              </div>
              <label for="email" class="focus-label">Hospital Email</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group form-focus">
              <div class="inner-addon right-addon">
                  <i class="fa fa-map-signs"></i>
              <input type="text" class="form-control floating" name="address" id="address" placeholder="Hospital address">
              </div>
              <label for="email" class="focus-label">Hospital Address</label>
           </div>
         </div>
         </div>
        <hr> 
        <button type="submit" class="btn btn-primary">Add Hospital</button>
        {!! Form::close() !!} 
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