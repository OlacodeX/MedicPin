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
                  <li class="breadcrumb-item active" aria-current="page">Add Staff To HMO Package</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Staff To HMO Package</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Add Staff To HMO Package</b></h4> 
      </div>
      <div class="card-body">
              
         {!! Form::open(['action' => 'HmoController@complete_add', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
        <div class="row">
          <div class="form-group col-md-6">
             <label for="email">Email</label>
             <div class="inner-addon right-addon">
                 <i class="fa fa-envelope"></i>
                 @if (auth()->user()->role == 'Patient')
                 <input type="text" class="form-control" value="{{auth()->user()->email}}" name="email" id="email" placeholder="Email" readonly>

                @else       
                <input type="text" class="form-control" value="{{$email}}" name="email" id="email" placeholder="Email" readonly>
                 
                @endif
           </div>
          </div>
          @php
              $hmos = App\User::where('role', 'HMO')->get();
          @endphp
              <div class="form-group col-md-6">
                <label for="hmo">HMO Name</label>
                <select class="form-control" id="selecthmo" name="hmo">
                   <option>---Select hmo---</option>
                   @if (count($hmos) > 0)
                   @foreach ($hmos as $hmo)
                   <option value="{{$hmo->id}}">{{$hmo->hmo_org_name}}</option>
                   @endforeach
                   @else
                       
                   <option>No record found</option>
                   @endif
                </select>
              </div>
           </div>
           <hr>
           <button type="submit" class="btn btn-primary">Continue</button>
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