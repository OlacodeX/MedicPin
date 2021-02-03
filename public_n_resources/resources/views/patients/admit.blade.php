@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card">
                        {!! Form::open(['action' => 'AdmissionController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Admit Patient With MedicPin {!! $patient->pin!!}</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                                <hr>
                                @include('inc.messages')
                                <div class="">
                                 @php
                                     $wards = App\Wards::where('hospital', auth()->user()->h_id)->where('status', 'Available')->get();
                                 @endphp
                                       <div class="form-group">
                                          <label for="ward">Ward of Admission</label>
                                          <select class="form-control" id="ward" name="ward" required>
                                           <option value="N/A" selected>-Select Ward-</option>
                                           @if($wards->count())        
                                              @foreach ($wards as $ward)
                                                  <option value="{!! $ward->name!!}">{!! $ward->name !!}</option>
                                  
                                              @endforeach
                                              @endif
                                          </select>
                                         
                                       </div>
                                 <input type="hidden" class="form-control" id="patient" name="patient" value="{{ $patient->pin}}">
                                    <div class="form-group">
                                       <label for="note">Reason For Admission</label>
                                       <textarea class="form-control" id="reason" name="reason" rows="8"></textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary">Admit Patient</button>
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
        <!-- Footer END -->
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'reason' );
         </script> 
        
@endsection