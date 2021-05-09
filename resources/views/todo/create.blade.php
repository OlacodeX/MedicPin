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
                  <li class="breadcrumb-item active" aria-current="page">Create an event</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Create an event</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Plan Your Day(s), create an event now...</b></h4>
      </div>
      <div class="card-body">
         @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="time">Time</label>
                                    <div class="inner-addon right-addon">
                                        
                                    <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="date">Date</label>
                                    <div class="inner-addon right-addon">
                                    <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                    </div>
                                 </div>
                              </div>
                        {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
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