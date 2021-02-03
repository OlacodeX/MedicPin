@extends('layouts.maininnerr')
@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card" style="padding-bottom:50px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Hospital Details.</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => ['HospitalController@update', $hospital->id],'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="h_name">Hospital Name </label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="h_name" name="h_name" value="{{$hospital->h_name}}">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="h_add">Hospital Address</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-address-book-o"></i>
                                    <input type="text" class="form-control" name="h_add" id="h_add" value="{{$hospital->h_add}}">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobno">Hospital Contact Number</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-phone"></i>
                                    <input type="text" class="form-control" id="h_number" name="h_number" value="{{$hospital->h_number}}">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="email">Hospital Email</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-envelope"></i>
                                    <input type="email" class="form-control" id="h_email" value="{{$hospital->h_email}}" name="h_email">
                                    </div>
                                 </div>

                                 <div class="form-group col-md-6">
                                    <label for="Blood Group">Hospital Type</label>
                                    <select class="form-control" id="selecthtype" name="h_type">
                                       <option value="{{$hospital->h_type}}">{{$hospital->h_type}}</option>
                                       <option value="General">General Hospital</option>
                                       <option value="District">District</option>
                                       <option value="Specialized">Specialized</option>
                                       <option value="Teaching">Teaching</option>
                                       <option value="Clinic">Clinic</option>
                                    </select>
                                 </div>
                              </div>
                              {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
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
        <footer class="bg-white iq-footer">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="../../privacy">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="../../terms">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="../../">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
@endsection