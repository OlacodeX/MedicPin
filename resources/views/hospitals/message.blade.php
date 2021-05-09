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
                  <li class="breadcrumb-item active" aria-current="page">Send <span>Message to {{$doctor->name}} with Medicpin {{$doctor->pin}}</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Send <span>Message to {{$doctor->name}} with Medicpin {{$doctor->pin}}</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Send <span>Message to {{$doctor->name}} with Medicpin {{$doctor->pin}}</b></h4>
      </div>
      <div class="card-body">
         @include('inc.messages')
         <!---If file upload is involved always add enctype to your opening
             form tag and set it to multipart/form-data--->
        {!! Form::open(['action' => 'HospitalController@store_message', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
        **/ !!}
         <div class="form-group">
                 <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
             {{Form::label('message', 'Your Message')}}
             <!--This is the input field with type=textarea, name=body, value='' since it is a text field, then bootstrap class and then placeholder--->
             {{Form::textarea('message', '', ['class' => 'form-control', 'id' => 'pre'])}}
         </div>
         {{Form::hidden('receiver_id', $doctor->id)}}
         {{Form::hidden('receiver_pin', $doctor->pin)}}
         {{Form::hidden('receiver_name', $doctor->name)}}
         {{Form::hidden('receiver_email', $doctor->email)}}
         {{Form::submit('Send Message', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
        {!! Form::close() !!}
     </div>
     <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
     <script>
        CKEDITOR.replace( 'pre' );
     </script>
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