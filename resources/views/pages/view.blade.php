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
                  <li class="breadcrumb-item active" aria-current="page">Your HMO Package</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Your HMO Package</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Your HMO Package</b></h4> 
      </div>
      <div class="card-body">
         @php
             $hmo = App\User::where('id',auth()->user()->hmo)->first();
             $package = App\HMO::where('id',auth()->user()->hmo_package)->first();
             $package_cat = App\hmo_cat::where('id',$package->cat_id)->first();
         @endphp 
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                     <th>HMO Name</th>
                     @if (!empty($package_cat))
                     <th>HMO Product Category</th>
                     @endif
                     <th>Package Name</th>
                     <th>Package Value</th> 
                  </tr>
               </thead>
               <tbody> 
                  <tr>
                     <td>{{$hmo->hmo_org_name}}</td>
                     @if (!empty($package_cat))
                     <td>{{$package_cat->name}}</td>
                     @endif
                     
                     <td>{{$package->name}}</td>
                     <td>{!!$package->description!!}</td>
                  </tr> 
               </tbody>
            </table>
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