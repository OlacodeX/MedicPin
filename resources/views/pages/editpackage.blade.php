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
                  <li class="breadcrumb-item active" aria-current="page">Edit Package</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Edit Package</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Edit Product Category</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         {!! Form::open(['action' => 'HmoController@update_package', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
         **/ !!} 
              <div class="row">
                    <div class="form-group col-md-6">
                       <label for="name">Change Package Name:</label>
                       <div class="inner-addon right-addon">
                           <i class="fa fa-user"></i>
                       <input type="text" class="form-control" id="name" name="name" value="{{$package->name}}" placeholder="Category Name">
                       </div>
                    </div>
                    <div class="form-group col-md-6">
                     <img src="{{ URL::to('img/hmo/packages/'.$package->img)}}" class="img-responsive" width="100" alt=""><br>
                       <label for="image">Change Package Cover Image:</label><br>
                       <input class="iq-bg-primary" type="file" accept="image/*" name="img">
                    </div>
                 <div class="form-group col-md-6">
                    <label for="value">Value:</label><br>
                    <small>Package benefits...</small>
                    <div class="inner-addon right-addon">
                        <i class="fa fa-"></i>
                        <textarea name="value" id="value" class="form-control" placeholder="Package benefits" >{!!$package->description!!}</textarea>
                       
                    </div>
                 </div>
                 <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <div class="inner-addon right-addon">
                        <i class="fa fa-dollar"></i>
                    <input type="text" class="form-control" name="price" value="{{$package->price}}"  id="price" placeholder="{{$package->price}}">
                    </div> <br>
                    <label for="times">How Many Times Can This Package Be Used?</label>
                    <div class="inner-addon right-addon">
                        <i class="fa fa-hour-glass"></i>
                    <input type="text" class="form-control" name="time" id="time" value="{{$package->No_of_times}}" placeholder="How Many Times Can This Package Be Used?">
                    </div>
                 </div>
              </div>
                 {{Form::hidden('id', $package->id)}}
                 <hr>
                 <button type="submit" class="btn btn-primary">Update Package</button>
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