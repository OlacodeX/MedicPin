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
                  <li class="breadcrumb-item active" aria-current="page">Edit Your Answer</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Edit Your Answer</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Edit Your Answer.</b></h4>
      </div>
      <div class="card-body">{!! Form::open(['action' => 'QuestionsController@update_answer','method' => 'POST'])!!}
         @include('inc.messages')
         <div class="form-group">
            {!!Form::textarea('answer', $answer->answer, ['class' => 'form-control', 'id' =>'pre'], 'required')!!}
         </div>
         {{Form::hidden('id',  $answer->id)}}
         {{Form::submit('Update Answer', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
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