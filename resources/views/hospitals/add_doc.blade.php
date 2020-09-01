@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div style="margin-bottom: 0; padding-bottom:0;">
        <div class="" style="margin-bottom: 0;">
                <div class="iq-card" style="padding-bottom:50px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                           <h4 class="card-title">Add To Doctor {{$hospital->h_name}} {{$hospital->h_type}} Hospital </h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'HospitalController@store_doc', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="pin">Doctor's Pin </label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Doctor's Pin">
                                    </div>
                                 </div>
                                    <input type="hidden" class="form-control" name="h_id" id="h_id" value="{{$hospital->id}}">
                                    <input type="hidden" class="form-control" name="h_name" id="h_name" value="{{$hospital->h_name}} {{$hospital->h_type}}">
                                
                              </div>
                              <hr>
                        {{Form::submit('Add Doctor', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                          </div>
                        </div>
                     </div>
                  
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-bottom: 0;">
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
@endsection