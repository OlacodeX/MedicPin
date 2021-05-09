@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add New Package</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add New Package</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Add New Package</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         {!! Form::open(['action' => 'HmoController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
         @if (!empty($id))
         <input type="hidden" name="id" value="{{$id}}">
             
         @endif 
              <div class="row">
                    <div class="form-group col-md-6 form-focus">
                       <div class="inner-addon right-addon">
                           <i class="fa fa-user"></i>
                       <input type="text" class="form-control floating" id="name" name="name" placeholder="Package Name">
                       <label for="name" class="focus-label">Package Name:</label>
                       </div>
                    </div>
                    <div class="form-group col-md-6"> 
                       <input class="form-control" type="file" accept="image/*" name="img">
                    </div>
                    <div class="form-group col-md-6 form-focus"> 
                       <div class="inner-addon right-addon">
                           <i class="fa fa-"></i>
                           <textarea name="value" id="value" class="form-control floating" placeholder="Package benefits"></textarea>
                           <label for="value" class="focus-label">Value:</label>
                       </div>
                    </div>
                    <div class="form-group col-md-6"> 
                     <select class="form-control" id="selecttype" name="type">
                        <option>Select type</option>
                        <option value="Daily">Daily</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Yearly">Yearly</option>
                     </select>
                    </div>
                     <div class="form-group col-md-6 form-focus"> 
                       <div class="inner-addon right-addon">
                           <i class="fa fa-dollar"></i>
                       <input type="text" class="form-control floating" name="price" id="price" placeholder="How Much Is The Package?">
                       <label for="price" class="focus-label">Price</label>
                       </div> 
                     </div>
                       <div class="form-group col-md-6 form-focus">
                       <div class="inner-addon right-addon">
                           <i class="fa fa-hour-glass"></i>
                       <input type="text" class="form-control floating" name="time" id="time" placeholder="How Many Times Can This Package Be Used? Enter in figure"> 
                       <label for="times" class="focus-label">How Many Times Can This Package Be Used?</label>
                       </div>
                    </div>
                  </div>
                 <hr> 
                 <button type="submit" class="btn btn-primary">Add New Package</button>
                 {!! Form::close() !!}
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