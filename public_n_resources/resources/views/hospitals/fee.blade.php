@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card" style="padding-bottom:50px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Set Hospital Basic Fees.</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <h5 class="card-title">Your Hospital Basic Details.</span></h5>
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => ['HospitalController@update', $hospital->id],'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                    <input type="hidden" class="form-control" id="h_name" name="h_name" value="{{$hospital->h_name}}">
                                    <input type="hidden" class="form-control" name="h_add" id="h_add" value="{{$hospital->h_add}}">
                                    <input type="hidden" class="form-control" id="h_number" name="h_number" value="{{$hospital->h_number}}">
                                   
                                    <input type="hidden" class="form-control" id="h_email" value="{{$hospital->h_email}}" name="h_email">
                                   
                                 <input type="hidden" class="form-control" id="h_type" value="{{$hospital->h_type}}" name="h_type">
                              <div class="form-group col-md-6">
                                 <label for="card">How much is your card fee?</label> <br>
                                 <small>This is the amount patient will pay when they are added to your hospital</small>
                                 <div class="inner-addon right-addon">
                                     <i class="fa fa-dollar"></i>
                                 <input type="text" class="form-control" id="card" name="card" placeholder="Enter value in naira">
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="consultation">How much is your Consultation Fee?</label><br>
                                 <small>This is the amount patient will pay when they consult a doctor at your hospital</small>
                                 <div class="inner-addon right-addon">
                                     <i class="fa fa-dollar"></i>
                                 <input type="text" class="form-control" name="consult" id="consult" placeholder="Enter value in naira">
                                 </div>
                              </div>
                           </div>
                              {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Save', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                          </div>
                       </div>
                    </div>
                    @else
                    <div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
                       <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
                       <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
                    
                    </div>
                    @endif   
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 160px;">
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
@endsection