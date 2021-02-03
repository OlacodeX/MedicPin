@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Package</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => 'HmoController@update_package', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                        <!-- 
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image"> -->
                                     <!-- <h5 class="upload-button">file upload</h5> -->
                                     <!--<a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                     <input class="file-upload" type="file" accept="image/*" name="pp">
                                  </div>
                                </div>
                               <div class="img-extension mt-3">
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div> -->
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                             <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Change Package Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" value="{{$package->name}}" placeholder="Category Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                    <img src="{{ URL::to('img/hmo/packages/'.$package->img)}}" class="img-responsive" width="100" alt=""><br>
                                      <label for="image">Change Package Cover Image:</label><br>
                                      <input class="iq-bg-primary" type="file" accept="image/*" name="img">
                                   </div>
                                <div class="form-group col-md-6">
                                   <label for="value">Value:</label><br>
                                   <small>Package benefits...</small>
                                   <div class="inner-addon right-addon">
                                       <i class="fa fa-"></i>
                                       <textarea name="value" id="value" class="form-control" placeholder="Package benefits" >{!!$package->description!!}</textarea>
                                      
                                   </div>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="price">Price</label>
                                   <div class="inner-addon right-addon">
                                       <i class="fa fa-dollar"></i>
                                   <input type="text" class="form-control" name="price" value="{{$package->price}}"  id="price" placeholder="{{$package->price}}">
                                   </div> <br>
                                   <label for="times">How Many Times Can This Package Be Used?</label>
                                   <div class="inner-addon right-addon">
                                       <i class="fa fa-hour-glass"></i>
                                   <input type="text" class="form-control" name="time" id="time" value="{{$package->No_of_times}}" placeholder="How Many Times Can This Package Be Used?">
                                   </div>
                                </div>
                             </div>
                                {{Form::hidden('id', $package->id)}}
                                <hr>
                                <button type="submit" class="btn btn-primary">Update Package</button>
                                {!! Form::close() !!}
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
        <footer class="bg-white iq-footer" style="margin-top: 80px;">
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
           <script src="{{ URL::asset('./vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
        <!-- Footer END -->
@endsection