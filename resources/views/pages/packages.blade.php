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
                  <li class="breadcrumb-item active" aria-current="page">Packages Available Under The {{$cat->name}} Category</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Packages Available Under The {{$cat->name}} Category</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card card-table">
      <div class="card-header">
         <h4 class="card-title"><b>Packages Available Under The {{$cat->name}} Category</b></h4>
         
      </div>
      <div class="card-body">
         <div class="row">
           @if (count($packages) > 0)
           @foreach ($packages as $package)
           <div class="col-md-4">
              <div class="card">
                 <img src="{{ URL::to('img/hmo/packages/'.$package->img)}}" class="card-img-top" alt="#">
                 <div class="card-body">
                    <h4 class="card-title">{{$package->name}}</h4>
                    <p class="card-text">
                       {!!$package->description!!}
                    </p>
                 </div>
                 <div class="card-body">
                    <span class="user-list-files d-flex float-left">
                       {!!$package->type!!} @ {!!$package->price!!}
                    </span>
                    <span class="user-list-files d-flex float-right">
                    {!!Form::open(['action' => 'HmoController@edit_package', 'method' => 'POST','style' => 'margin-right:20px;'])!!}
                    {{Form::hidden('id', $package->id)}}
                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit package."><i class="fa fa-edit"></i></button>
                    
                    {!!Form::close()!!}
                 
                       {!!Form::open(['action' => 'HmoController@destroy_package', 'method' => 'POST','style' => 'margin-right:20px;'])!!}
                       {{Form::hidden('id', $package->id)}}
                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete package"><i class="fa fa-trash-o"></i></button>
                       
                       {!!Form::close()!!}
                    </span>
                 </div>
              </div>
           </div>
           @endforeach
           @else
           <p>No record found</p>
           @endif
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