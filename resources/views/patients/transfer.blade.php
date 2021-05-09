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
                  <li class="breadcrumb-item active" aria-current="page">Admit Patient With MedicPin {!! $patient->pin!!}</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Admit Patient With MedicPin {!! $patient->pin!!}</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Transfer Patient With MedicPin {!! $patient->pin!!} To Another Doctor</b></h4>
      </div>
      <div class="card-body">
      
         {!! Form::open(['action' => 'PatientsController@store_transfer', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
         **/ !!}
                     <div class="form-group form-focus">
                        <input type="hidden" class="form-control" name="pin" value="{{$patient->pin}}">
                        <input type="hidden" class="form-control" name="name" value="{{$patient->name}}">
                        <input type="hidden" class="form-control" name="from" value="{{$patient->doctor}}">
                        <input type="hidden" class="form-control" name="from_email" value="{{$patient->doc_email}}">
                        <div class="inner-addon right-addon">
                            <i class="fa fa-paperclip"></i>
                       
                        <input type="text" class="form-control floating" name="doc_pin" placeholder="Enter Doctor's MedicPin ">
                        </div>
                        <label for="patient" class="focus-label">Transfer To</label>
                     </div>
                     <div class="form-group">
                        <label for="note">Note To Doctor</label>
                        <textarea class="form-control" id="note" name="note" placeholder="Special Message/Instructions To Doctor..." rows="8"></textarea>
                     </div>
                 <button type="submit" class="btn btn-primary">Transfer Patient</button>
                 {!! Form::close() !!}
                 <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                 <script>
                    CKEDITOR.replace( 'note' );
                 </script> 
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