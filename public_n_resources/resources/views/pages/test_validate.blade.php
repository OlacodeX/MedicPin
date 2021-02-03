@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                          <h4 class="card-title">Submit Report For {{$test->test_name}} Test On {{$pin}}</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => ['LabsController@update', $test->id], 'method' => 'POST','enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                        <input type="hidden" name="pin" value="{{$pin}}">
                             <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="price">How Much Is Test Cost:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-dollar"></i>
                                      <input type="text" class="form-control" id="price" name="price" placeholder="Kindly enter in naira">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="report">Test Report:</label><br>
                                      <input class="iq-bg-primary" type="file" name="report">
                                   </div>
                                </div>
                                <hr>
                                {{Form::hidden('_method', 'PUT')}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
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
        <footer class="bg-white iq-footer" style="margin-top: 80px;">
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
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
        <!-- Footer END -->
@endsection