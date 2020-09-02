@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                  @include('inc.messages')
                        {!! Form::open(['action' => 'AppointmentsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Have An Appointment?</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                                <hr>
                                <div class="">
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="with">With?</label>
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-user"></i>
                                       <input type="text" class="form-control" id="patient" name="patient" placeholder="Enter MedicPin of Who You Have Appointment With...">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add">Date</label>
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-date"></i>
                                       <input type="date" class="form-control" name="date" id="date" placeholder="Date of Appointment....">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="mobno">Time</label>
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-clock"></i>
                                       <input type="time" class="form-control" id="time" name="time" placeholder="Time of Appointment....">
                                       </div>
                                    </div>
                                 </div>
                                <button type="submit" class="btn btn-primary">Add Appointment</button>
                                {!! Form::close() !!}
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
            CKEDITOR.replace( 'question' );
         </script> 
@endsection