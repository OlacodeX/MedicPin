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
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Unauthorized!!!</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Unauthorized!!!</h2>
         </div>
      </div>
   </div>
</div> 
<style>
    .card,
    .col-md-12,
    .card-body{
        border-radius: none;
        background: transparent;
        margin-bottom: 0;
    }
</style>
<div class="col-md-12">
   <div class="card"> 
      <div class="card-body">
        <div>
            <h1 style="font-size: 80px;">Unauthorized!!!</h1>
            <h4 class="mb-0">Oops! You are not allowed to view this page.</h4>
            <a class="btn btn-primary mt-3" href="./dashboard"><i class="ri-home-4-line"></i>Back to Home</a>
            <img src="images/error/01.png" class="" alt="">
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