@extends('layouts.maininnerr')
@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Add New Product Category</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => ['HmoController@update', $cat->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
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
                                      <label for="name">Change Category Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" value="{{$cat->name}}" placeholder="Category Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                    <img src="{{ URL::to('img/hmo/cat/'.$cat->img)}}" class="img-responsive" width="100" alt=""><br>
                                      <label for="image">Change Category Cover Image:</label><br>
                                      <input class="iq-bg-primary" type="file" accept="image/*" name="img">
                                   </div>
                                </div>
                                {{Form::hidden('_method', 'PUT')}}
                                <hr>
                                <!----
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="Blood Group">Blood Group</label>
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option>Select</option>
                                          <option value="O+">O+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bp">Blood Pressure</label>
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="h_rate">Heart Rate</label>
                                       <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="genotype">Genotype</label>
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option>Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="weight">Weight</label>
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="height">Height</label>
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="temprature">Temperature</label>
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature">
                                    </div>
                                </div>
                                ----->
                                <button type="submit" class="btn btn-primary">Edit Category</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
        </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:80px;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
          
        </footer>
        <!-- Footer END -->
@endsection