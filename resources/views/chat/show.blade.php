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
                  <li class="breadcrumb-item active" aria-current="page">Reply Message</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Reply Message</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>{{$message->sender_name}} Says:</b></h4>
         <a href="" style="color: #09e5ab;"><small><i class="fa fa-calendar"></i> {!!$message->created_at!!}</small></a>
      </div>
      <div class="card-body">
         <p>{!!$message->message!!}</p>
      </div>
   </div>
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Reply {{$message->sender_name}}</b></h4>
      </div>
      <div class="card-body">
         {!! Form::open(['action' => 'MessagingController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
         @include('inc.messages')
          <div class="form-group">
            {{Form::textarea('message', '', ['class' => 'form-control', 'id' =>'pre'], 'required')}}
          </div>
          @php
              $sender = App\User::where('id', $message->sender_id)->first();
          @endphp
          {{Form::hidden('receiver_pin', $sender->pin)}}
          {{Form::hidden('receiver_id', $message->sender_id)}}
          {{Form::hidden('receiver_email', $message->sender_email)}}
          {{Form::hidden('receiver_name', $message->sender_name)}}
          {{Form::hidden('message_id', $message->id)}}
          {{Form::submit('Reply', ['class' => 'btn bg-success-light', 'style' => 'text-transform:uppercase;'])}}
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

<script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'pre' );
</script> 
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