@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
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
                               @if (auth()->user()->role == 'Patient')
                               <input type="text" class="form-control" value="{{auth()->user()->email}}" name="email" id="email" placeholder="Email" readonly>
    
                              @else       
                              <input type="text" class="form-control" value="{{$email}}" name="email" id="email" placeholder="Email" readonly>
                               
                              @endif
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
                         <button type="submit" class="btn btn-primary">Continue</button>
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
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
        <!-- Footer END -->
@endsection