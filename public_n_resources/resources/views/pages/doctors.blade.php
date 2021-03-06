@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
@if (auth()->user()->status == 'Active')

   <div class="">
    <div class="row">
       <div class="col-sm-12">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Doctors List</h4>
                </div>
             </div>
          </div>
       </div>
       
       @if (count($doctors) > 0)
       @foreach ($doctors as $doctor)
       @php
           $detail = App\User::where('pin', $doctor->doctor_pin)->first()
       @endphp
       <div class="col-sm-6 col-md-3">
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <div class="doc-profile">
                   <img class="rounded-circle img-fluid avatar-80" src="img/profile/{{$detail->img}}" alt="doctor's image">
                </div>
                <div class="iq-doc-info mt-3">
                   <h4>
                    {{$detail->name}}
                    </h4>
                   <p class="mb-0" >{{$detail->role}}</p>
                </div>
                <div class="iq-doc-social-info mt-3 mb-3">
                   <ul class="m-0 p-0 list-inline">
                      <li><a href="https://facebook.com/{{$detail->facebook}}"><i class="ri-facebook-fill"></i></a></li>
                      <li><a href="https://twitter.com/{{$detail->twitter}}"><i class="ri-twitter-fill"></i></a> </li>
                      <li><a href="mailto:{{$detail->email}}"><i class="ri-google-fill"></i></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       @endforeach
       @else
       <div class="col-lg-12">
       <p class="text-center">No Record Found</p> 
    </div>
       @endif
       
    </div>
 </div>
 @else
 <div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
    <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
    <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
 
 </div>
 @endif   
  <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 150px;">
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
    <!-- Footer END -->
@endsection