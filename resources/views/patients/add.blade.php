@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="row">
              <!---
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Add New Patient</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">--->
                        {!! Form::open(['action' => 'RecordsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
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
                                <!----
                             <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="selectuserrole" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                             </div>
                       </div>
                    </div>
              </div>--->
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">New Patient Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <!----
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="add">Address</label>
                                      <input type="text" class="form-control" name="add" id="add" placeholder="Street Address">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mobno">Mobile Number:</label>
                                      <input type="text" class="form-control" id="number" name="number" placeholder="Mobile Number">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                   </div>
                                </div>
                                <hr>---->
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                   
                                 <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                                   <style>
                                      button.btn.btn-info{
                                         background: transparent;
                                         border-radius: 0;
                                         font-size: 15px;
                                         margin-bottom: 15px;
                                         padding: 0px 20px;
                                      }
                                      .row,
                                      .col-lg-12{
                                         padding-left: 25px;
                                      }
                                      button.btn.btn-info label{
                                         font-size: 15px;
                                         color: #02818f;
                                      }
                                      input.form-control,
                                      select.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                      textarea.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                   </style>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><label for="Blood Group"><i class="fa fa-plus"></i> Blood Group</label></button>
                                       
                                       <div id="demo" class="collapse">
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option value="N/A">Select</option>
                                             <option value="O+">O+</option>
                                             <option value="O-">O-</option>
                                             <option value="A+">A+</option>
                                             <option value="A-">A-</option>
                                             <option value="AB+">AB+</option>
                                             <option value="AB-">AB-</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><label for="bp"><i class="fa fa-plus"></i>Blood Pressure</label></button>
                                       
                                       <div id="demo1" class="collapse">
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><label for="h_rate"><i class="fa fa-plus"></i>Heart Rate</label></button>
                                          <div id="demo2" class="collapse">
                                          <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate in %">
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"><label for="genotype"><i class="fa fa-plus"></i>Genotype</label></button>
                                       <div id="demo3" class="collapse">
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option value="N/A">Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4"><label for="weight"><i class="fa fa-plus"></i>Weight</label></button>
                                       <div id="demo4" class="collapse">
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in kg">
                                       </div>
                                    </div>
                                     <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5"><label for="height"><i class="fa fa-plus"></i>Height</label></button>
                                       <div id="demo5" class="collapse">
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height in cm">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6"><label for="temprature"><i class="fa fa-plus"></i>Temperature</label></button>
                                       <div id="demo6" class="collapse">
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature in Celsius">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7"><label for="height"><i class="fa fa-plus"></i>Oxygen Saturation</label></button>
                                      <div id="demo7" class="collapse">
                                      <input type="text" class="form-control" id="oxygen" name="oxygen" placeholder="Oxygen Saturation in %">
                                      </div>
                                    </div>
                                   <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8"><label for="temprature"><i class="fa fa-plus"></i>Glucose Level</label></button>
                                      <div id="demo8" class="collapse">
                                      <input type="text" class="form-control" id="glucose" name="glucose" placeholder="Glucose level in %">
                                      </div>
                                    </div>
                                   <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo9"><label for="height"><i class="fa fa-plus"></i>Respiratory Rate</label></button>
                                     <div id="demo9" class="collapse">
                                     <input type="text" class="form-control" id="r_rate" name="r_rate" placeholder="Respiratory rate in %">
                                     </div>
                                    </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo10"><label for="temprature"><i class="fa fa-plus"></i>BMI</label></button>
                                     <div id="demo10" class="collapse">
                                     <input type="text" class="form-control" id="bmi" name="bmi" placeholder="BMI">
                                     </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11"><label for="temprature"><i class="fa fa-plus"></i>Note</label></button>
                                     <div id="demo11" class="collapse">
                                     <textarea class="form-control" id="note" name="note" placeholder="General note on patient medical status"></textarea>
                                     </div>
                                    </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo12"><label for="temprature"><i class="fa fa-plus"></i>Drug Prescription</label></button>
                                     <div id="demo12" class="collapse">
                                     <textarea class="form-control" id="pre" name="pre" placeholder="Drug prescriptions..."></textarea>
                                     </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Record</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
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
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'pre' );
            CKEDITOR.replace( 'note' );
         </script> 
@endsection