@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div>
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Drug Cover Image</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => ['PatientsController@update', $drug->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image">
                                      <img src="{{ URL::to('img/drugs/'.$drug->img)}}" class="img-responsive" width="100" alt="">
                                      <h5 class="upload-button">Change Image</h5> 
                                     <br><input class="iq-bg-primary" type="file" accept="image/*" name="img">
                                  </div>
                                </div>
                                <style>
                                   input.iq-bg-primary{
                                      width: 200px;
                                   }
                                </style>
                               <div class="img-extension mt-3"><br><br><br><br><br>
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div>
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                              <!-- 
                             <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="selectuserrole" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                             </div> -->
                       </div>
                    </div>
              </div>
              <div class="col-lg-9">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Drug Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Drug Name" value="{{$drug->name}}">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="price">Price:</label>
                                      <small>Specify in Naira</small>
                                      <div class="inner-addon right-addon">
                                       <i class="fa fa-dollar"></i>
                                      <input type="text" class="form-control" id="price" placeholder="How much do you sell?" name="price" value="{{$drug->price}}">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                   <div class="form-group">
                                      <label>Change Status</label>
                                      <select class="form-control" id="status" name="status">
                                         <option value="{{$drug->status}}">{{$drug->status}}</option>
                                         @if ($drug->status == 'Out Of Stock')
                                         <option value="In Stock">In Stock</option>
                                             @else
                                             <option value="Out Of Stock">Out Of Stock</option>
                                         @endif
                                      </select>
                                   </div>
                                </div>
                              </div>
                                <hr>
                                    {{Form::hidden('_method', 'PUT')}}
                                <button type="submit" class="btn btn-primary">Update Drug Details</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
        </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer">
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
        </footer>
        <!-- Footer END -->
@endsection