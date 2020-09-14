@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div>
        <div class="">
                    <div class="iq-card">
                     @include('inc.messages')
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Add Staff To HMO Package</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
              
                       {!! Form::open(['action' => 'HmoController@complete_add', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                      <div class="row">
                        <div class="form-group col-md-6">
                           <label for="email">Email</label>
                           <div class="inner-addon right-addon">
                               <i class="fa fa-envelope"></i>
                           <input type="text" class="form-control" value="{{$email}}" name="email" id="email" placeholder="Email">
                           </div>
                        </div>
                        @php
                            $hmos = App\User::where('role', 'HMO')->get();
                        @endphp
                            <div class="form-group col-md-6">
                              <label for="hmo">HMO Name</label>
                              <select class="form-control" id="selecthmo" name="hmo">
                                 <option>---Select hmo---</option>
                                 @if (count($hmos) > 0)
                                 @foreach ($hmos as $hmo)
                                 <option value="{{$hmo->id}}">{{$hmo->hmo_org_name}}</option>
                                 @endforeach
                                 @else
                                     
                                 <option>No record found</option>
                                 @endif
                              </select>
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
                         <button type="submit" class="btn btn-primary">Continue</button>
                         {!! Form::close() !!}
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