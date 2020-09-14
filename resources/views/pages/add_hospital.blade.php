@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Add Hospital To HMO</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
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
                              <div class="form-group col-md-12">
                                 <div class="iq-card" style="padding-bottom: 50px; padding-top: 20px;">
                                    <div class="iq-card-header d-flex justify-content-between">
                                       <div class="iq-header-title">
                                          <h4 class="card-title">Hospital On MedicPin?</h4><!---
                               <h6>Visitor On MedicPin? Enter Pin and We Will Get Their Details From Our Records</h6>
                               
                                 <p>Note that visitors are only welcomed between 9-11am mornings and 4-6pm evenings daily.</p>---->
                              </div>
                           </div>
                           <div class="iq-card-body">
                                 {!! Form::open(['action' => 'HmoController@store_hospital', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                 **/ !!}
                                 <div class="row">
                               <div class="form-group col-md-12">
                               <label for="email">Hospital Email</label>
                               <p>Enter the hospital email on Medicpin</p>
                               <div class="inner-addon right-addon">
                                   <i class="fa fa-envelope"></i>
                               <input type="text" class="form-control" id="h_email" name="h_email" placeholder="Enter Hospital Email On MedicPin">
                               </div>
                               </div>
                              </div>
                           </div>
                              <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Add Hospital</button>
                              {!! Form::close() !!}
                              {!! Form::open(['action' => 'HmoController@store_hospital', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                              **/ !!}
                              </div>
                              </div>
                              <hr>
                                   <div class="form-group col-md-6">
                                      <label for="name">Hospital Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Hospital Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Hospital Email</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-envelope"></i>
                                      <input type="text" class="form-control" name="email" id="email" placeholder="Hospital Email">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Hospital Address</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-map-signs"></i>
                                      <input type="text" class="form-control" name="address" id="address" placeholder="Hospital address">
                                      </div>
                                   </div>
                                </div>
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
                                <button type="submit" class="btn btn-primary">Add Hospital</button>
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