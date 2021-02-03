@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
      <style>
          
div.jumbotron-fluid{
             background:linear-gradient(rgba(1, 0, 2, 0),rgba(0, 0, 2, 0)), url('../img/hp.jpg') no-repeat;
             background-size: cover;
             background-position: top;
             background-attachment:fixed;
             padding-top: 100px;
             padding-bottom: 200px;
             width: 100%;
             text-align: center;
             margin-bottom: 40px;
             color: rgb(39, 39, 39);
}
div.jumbotron-fluid h4.card-title{
 color: rgb(39, 39, 39);
 font-size: 35px;
 top: 20px;
}
h4.card-title{
 font-size: 15px;
}
output{
 border: 1.5px solid rgba(214, 209, 209, 0.748);
 padding: 6px;
 border-radius: 5px;
}
      </style>
      <div class="jumbotron-fluid">
         <h4 class="card-title">Create Hospital</h4>
         <p>Manage Your Hospital Easily.</p>
      </div>
        <div class="">
                <div class="iq-card" style="padding-bottom:50px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'HospitalController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="h_name">Hospital Name </label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="h_name" name="h_name" placeholder="What is your hospital called?">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="h_add">Hospital Address</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-address-book-o"></i>
                                    <input type="text" class="form-control" name="h_add" id="h_add" placeholder="Where is your hospital located?">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobno">Hospital Contact Number</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-phone"></i>
                                    <input type="text" class="form-control" id="h_number" name="h_number" placeholder="Mobile Number">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="email">Hospital Email</label>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-envelope"></i>
                                    <input type="email" class="form-control" id="h_email" placeholder="Email" name="h_email">
                                    </div>
                                 </div>

                                 <div class="form-group col-md-6">
                                    <label for="Blood Group">Hospital Type</label>
                                    <select class="form-control" id="selecthtype" name="h_type">
                                       <option>Select</option>
                                       <option value="General">General Hospital</option>
                                       <option value="District">District</option>
                                       <option value="Specialized">Specialized</option>
                                       <option value="Teaching">Teaching</option>
                                       <option value="Clinic">Clinic</option>
                                    </select>
                                 </div>
                              </div>
                        {{Form::submit('Create Hospital', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
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