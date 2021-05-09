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
                  <li class="breadcrumb-item active" aria-current="page">Add Staff Members</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Staff Members</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Staff On MedicPin?</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         {!! Form::open(['action' => 'HmoController@store_staff', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
         <div class="row">
       <div class="form-group col-md-6">
       <label for="pin">Staff MedicPin</label>
       <div class="inner-addon right-addon">
           <i class="fa fa-expeditedssl"></i>
       <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Staff Pin On MedicPin">
       </div>
       </div>
       <div class="form-group col-md-6">
          <label for="address">Address</label>
          <div class="inner-addon right-addon">
              <i class="fa fa-map-signs"></i>
          <input type="text" class="form-control" name="address" id="address" placeholder="Staff address">
          </div>
       </div>
      </div>
   </div>
      <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Add Staff</button>
      {!! Form::close() !!}
      </div>
   </div>
   
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Staff Not MedicPin?</b></h4> 
      </div>
      <div class="card-body">
         {!! Form::open(['action' => 'HmoController@store_staff', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
         </div>
         </div>
         <hr>
              <div class="form-group col-md-6">
                 <label for="name">Staff Member's Name:</label>
                 <div class="inner-addon right-addon">
                     <i class="fa fa-user"></i>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                 </div>
              </div>
              <div class="form-group col-md-6">
                 <label for="email">Email</label>
                 <div class="inner-addon right-addon">
                     <i class="fa fa-envelope"></i>
                 <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                 </div>
              </div>
              <div class="form-group col-md-6">
                 <label for="address">Address</label>
                 <div class="inner-addon right-addon">
                     <i class="fa fa-map-signs"></i>
                 <input type="text" class="form-control" name="address" id="address" placeholder="Staff address">
                 </div>
              </div>
           </div>
           <hr> 
           <button type="submit" class="btn btn-primary">Add Staff</button>
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