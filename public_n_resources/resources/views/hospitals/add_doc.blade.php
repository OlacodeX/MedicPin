@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div style="margin-bottom: 0; padding-bottom:0;">
        <div class="" style="margin-bottom: 0;">
                <div class="iq-card" style="padding-bottom:50px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                           <h4 class="card-title">Add Staff To {{$hospital->h_name}} {{$hospital->h_type}} Hospital </h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'HospitalController@store_staff', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="pin">Staff MedicPin </label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Staff Member's Pin">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="role">Role</label>
                                         <select class="form-control" id="role" name="role">
                                            <option value="N/A">Select</option>
                                            <option value="Nurse">Biochemist</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Laboratory Worker">Laboratory Worker</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Ward Maid">Ward Maid</option>
                                         </select>
         
                                     </div>
                                 </div>
                                    <input type="hidden" class="form-control" name="h_id" id="h_id" value="{{$hospital->id}}">
                                    <input type="hidden" class="form-control" name="h_name" id="h_name" value="{{$hospital->h_name}} {{$hospital->h_type}}">
                                
                              </div>
                              <hr>
                        {{Form::submit('Add Staff', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
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
        <footer class="bg-white iq-footer" style="margin-bottom: 0;">
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
        <!-- Footer END -->
@endsection