@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card">
                        {!! Form::open(['action' => 'PatientsController@store_transfer', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Transfer Patient With MedicPin {!! $patient->pin!!} To Another Doctor</h4>
                          </div>
                       </div>


                       <div class="iq-card-body">
                                <hr>
                                <div class="">
                                    <div class="form-group">
                                       <label for="patient">Transfer To</label>
                                       <input type="hidden" class="form-control" name="pin" value="{{$patient->pin}}">
                                       <input type="hidden" class="form-control" name="name" value="{{$patient->name}}">
                                       <input type="hidden" class="form-control" name="from" value="{{$patient->doctor}}">
                                       <input type="hidden" class="form-control" name="from_email" value="{{$patient->doc_email}}">
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-paperclip"></i>
                                      
                                       <input type="text" class="form-control" name="doc_pin" placeholder="Enter Doctor's MedicPin ">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="note">Note To Doctor</label>
                                       <textarea class="form-control" id="note" name="note" placeholder="Special Message/Instructions To Doctor..." rows="8"></textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary">Transfer Patient</button>
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
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'note' );
         </script> 
        
@endsection