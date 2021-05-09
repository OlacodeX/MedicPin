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
                  <li class="breadcrumb-item active" aria-current="page">Pharmacy Shop</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Pharmacy Shop</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="row">		
      <div class="col-12">
         <div class="sort-by pb-3">
            {!! Form::open(['action' => 'PagesController@search_drug', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                <div class="form-group mb-0">
                  <div class="inner-addon right-addon one">
                      <i class="fa fa-search"></i>
                   <input type="search" class="form-control" id="exampleInputSearch" name="name" placeholder="Enter drug name to search" aria-controls="user-list-table">
                  </div>
                  <span class="sort-title"><button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button></span>
                </div>
                {!! Form::close() !!}
         </div>
      </div>
   </div>
<style>
   
span.pull-right.in{
      font-size: 10px;
      color: #4ff84f;
   }
   span.pull-right.out{
      font-size: 10px;
      color: #fa1414;
      }
</style>
   <div class="row">
      @if (count($drugs) > 0)
      @foreach ($drugs as $drug)<a href="javascript:{}" onclick="document.getElementById({{$drug->id}}).submit();">
      <div class="col-md-12 col-lg-4 col-xl-4 product-custom">
         {!!Form::open(['action' => 'PatientsController@get_drug', 'method' => 'POST', 'id' => $drug->id, 'style' => 'margin-right:20px;'])!!}
         {{Form::hidden('id', $drug->id)}}
         {!!Form::close()!!}
         <div class="profile-widget">
            <div class="doc-img">
                  <img class="img-fluid" alt="Product image" src="{{ URL::to('img/drugs/'.$drug->img)}}">
               
               <!---
               <a href="javascript:void(0)" class="fav-btn" tabindex="-1">
                  <i class="far fa-bookmark"></i>
               </a>--->
            </div>
            <div class="pro-content">
               <h3 class="title pb-4">
                  <a href="" tabindex="-1">{{$drug->name}}</a> 
                  @if ($drug->status == 'In Stock')
                  <span class="pull-right in">{{$drug->status }}</span>
                  @endif
                  @if ($drug->status == 'Out Of Stock')
                  <span class="pull-right out">{{$drug->status }}</span>
                  @endif
               </h3>
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <span class="price">₦{{$drug->price}}/{{$drug->sell}}</span>
                     <!---<span class="price-strike">$45.00</span>---->
                     
                     @php
                     $h_id = App\User::where('pin', $drug->doc_pin)->first();
                 @endphp
                 @if (auth()->user()->h_id == $h_id->h_id)
               <div class="dropdown">
                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
                  <div class="dropdown-menu">
                     @if (auth()->user()->role == 'Doctor')
                     <a class="dropdown-item">
                        {!!Form::open(['action' => 'PatientsController@status_change', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('id', $drug->id)}}
                        <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark As Out Of Stock"><i class="fa fa-check-circle"></i> Mark As Out Of Stock</button>
                     
                        {!!Form::close()!!}

                     </a>
                     <a class="dropdown-item">
                        {!!Form::open(['action' => 'PatientsController@edit_drug', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('id', $drug->id)}}
                        <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Drug Details"><i class="fa fa-edit"></i> Edit Drug Details</button>
                     
                        {!!Form::close()!!}

                     </a>
                     <a class="dropdown-item">

                        {!!Form::open(['action' => 'PatientsController@destroy_drug', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('id', $drug->id)}}
                        <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Drug"><i class="fas fa-trash"></i> Delete Drug</button>
                        
                        {!!Form::close()!!}
                     </a>
                     @endif
                  </div>
               </div>
               @endif
                  </div>
                  <div class="col-lg-6 text-right">
                     <a href="{{route('cart.add', $drug->id)}}" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                  </div>
               </div>
            </div>

         </div>	
      </div>
      </a>
      @endforeach
          <div>
                  <!-----The pagination link----->
                  {{$drugs->links()}}
          </div>
          @else
          <p>No Drugs In Stock Yet, Please Check Back Later.</p>    
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