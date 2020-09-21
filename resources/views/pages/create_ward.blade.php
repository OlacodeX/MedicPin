@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Create Ward For Your Hospital</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body" style="padding-bottom:100px;">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'PagesController@store_ward', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="name">Ward Name</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ward name">
                                    </div>
                                 </div>
                              </div>
                        {{Form::submit('Create Ward', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                               
                    </div>
              </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:120px;">
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