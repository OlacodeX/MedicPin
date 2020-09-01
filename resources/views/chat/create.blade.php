@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Send <span>Message to {{$patient->username}} with Medicpin {{$patient->pin}}</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'MessagingController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                        <div class="form-group">
                                <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
                            {{Form::label('message', 'Your Message')}}
                            <!--This is the input field with type=textarea, name=body, value='' since it is a text field, then bootstrap class and then placeholder--->
                            {{Form::textarea('message', '', ['class' => 'form-control', 'id' => 'pre'])}}
                        </div>
                        {{Form::hidden('receiver_id', $patient->id)}}
                        {{Form::hidden('receiver_pin', $patient->pin)}}
                        {{Form::hidden('receiver_name', $patient->name)}}
                        {{Form::hidden('receiver_email', $patient->email)}}
                        {{Form::submit('Send Message', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                                <hr>
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
@endsection