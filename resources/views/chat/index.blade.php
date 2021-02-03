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
                  <li class="breadcrumb-item active" aria-current="page">Inbox</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Inbox</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="col-md-12">
      
      @if (
         //if there is data in the db
     count($messages) > 0
     )
 
      @foreach (
      // Loop through them
      $messages as $message
      )
      <a href="chat/{{$message->id}}">
         <style>
            p.text-info{
               padding: 0;
               font-size: 12px;
            }
         </style>
      <div class="card card-table mb-0">
         <div class="card-header">
            <h5 class="card-title"><b> {{$message->sender_name}}</b></h5>
            <p><strong>{!!Str::words($message->message,8)!!}</strong></p>
            <p class="text-info"><i class="fa fa-calendar"></i> {!!$message->created_at!!}</p>
            
         </div>
       </div>
      </a>
      @endforeach
      <div class="pull-right">
              <!-----The pagination link----->
              {{$messages->links()}}
      </div>
          @else
          <p class="text-center">No message found</p>
          @endif
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