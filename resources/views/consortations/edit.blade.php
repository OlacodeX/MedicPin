@extends('layouts.maininnerr')

@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Schedule</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body" style="padding-bottom:50px;">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => ['TodoController@update', $todo->id],'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$todo->title}}">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="time">Time</label>
                                    <div class="inner-addon right-addon">
                                        
                                    <input type="time" class="form-control" name="time" id="time" value="{{$todo->time}}">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="date">Date</label>
                                    <div class="inner-addon right-addon">
                                    <input type="date" class="form-control" id="date" name="date" value="{{$todo->date}}">
                                    </div>
                                 </div>
                              </div>
                              {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update Schedule', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                                <hr>
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