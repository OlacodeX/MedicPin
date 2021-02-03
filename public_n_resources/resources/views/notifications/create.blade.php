@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card">
                        {!! Form::open(['action' => 'NotificationsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Send Notification To Patient</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                                <hr>
                                <div class="">
                                    <div class="form-group">
                                       <label for="patient">Patient</label>
                                       @if($patient->count())        
                                       <select class="form-control" id="countries" name="patient" required>
                                        <option value="N/A" selected>-Send To-</option>
                                           @foreach ($patient as $patient)
                                               <option value="{!! $patient->name!!}">{!! $patient->name !!}</option>
                               
                                           @endforeach
                                       </select>
                                       @endif
                                    </div>
                                    <div class="form-group">
                                       <label for="content">Content</label>
                                       <textarea class="form-control" id="content" name="content" placeholder="Your message here..." rows="8"></textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary">Send Notification</button>
                                {!! Form::close() !!}
                          </div>
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
                     <li class="list-inline-item"><a href="../privacy">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="../terms">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="../">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
@endsection