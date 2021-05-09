@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
      <style>
          
div.jumbotron-fluid{
             background:linear-gradient(rgba(1, 0, 2, 0),rgba(0, 0, 2, 0)), url('../img/search-bg.png') no-repeat;
             background-size: contain;
             background-position: top;
             background-attachment:fixed;
             padding-top: 10px; 
             height: 100px;
             width: 100%;
             text-align: center;
             margin-bottom: 0px;
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
div.card{
   margin-top: 0;
   margin-bottom: 0;
}
output{
 border: 1.5px solid rgba(214, 209, 209, 0.748);
 padding: 6px;
 border-radius: 5px;
}
      </style>
      <div class="jumbotron-fluid"> 
      </div>
      <div class="card">
         <div class="card-header">
            <h4 class="card-title"><b>Create Hospital</b></h4>
            <small>Manage Your Hospital Easily.</small>
         </div>
         <div class="card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'HospitalController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group form-focus">
                                          <div class="inner-addon right-addon">
                                             <i class="fa fa-user"></i>
                                          <input type="text" class="form-control floating" id="h_name" name="h_name" placeholder="What is your hospital called?">
                                          </div>
                                          <label for="h_name" class="focus-label">Hospital Name </label>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group form-focus">
                                          <div class="inner-addon right-addon">
                                             <i class="fa fa-address-book-o"></i>
                                          <input type="text" class="form-control floating" name="h_add" id="h_add" placeholder="Where is your hospital located?">
                                          </div>
                                          <label for="h_add" class="focus-label">Hospital Address</label>
                                       </div>
                                    </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-focus">
                                       <div class="inner-addon right-addon">
                                          <i class="fa fa-phone"></i>
                                       <input type="text" class="form-control floating" id="h_number" name="h_number" placeholder="Mobile Number">
                                       </div>
                                       <label for="mobno" class="focus-label">Hospital Contact Number</label>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-focus">
                                       <div class="inner-addon right-addon">
                                          <i class="fa fa-envelope"></i>
                                       <input type="email" class="form-control floating" id="h_email" placeholder="Email" name="h_email">
                                       </div>
                                       <label for="email" class="focus-label">Hospital Email</label>
                                    </div>
                                 </div>
                                 <div class="col-md-6">

                                       <div class="form-group ">
                                          <label for="Hospital Type">Hospital Type</label>
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
      <!-- Footer 
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
        </footer>-->
@endsection