@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
         <style>
             
div.jumbotron-fluid{
                background:linear-gradient(rgba(1, 0, 2, 0.714),rgba(0, 0, 2, 0.829)), url('img/bg2.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                padding-top: 100px;
                padding-bottom: 200px;
                width: 100%;
                text-align: center;
                margin-bottom: 40px;
                color: #fff;
}
div.jumbotron-fluid h4.card-title{
    color: #fff;
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
            <h4 class="card-title">MedicPin Blood Bank</h4>
            <small>Efficient, Reliable, Affordable.....</small>
         </div>
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Price Estimate Calculator</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => 'PagesController@send_request_mail', 'method' => 'POST', 'oninput' => 'result.value=parseInt(b.value)*parseInt(c.value)']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                        
                        <!-- 
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image"> -->
                                     <!-- <h5 class="upload-button">file upload</h5> -->
                                     <!--<a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                     <input class="file-upload" type="file" accept="image/*" name="pp">
                                  </div>
                                </div>
                               <div class="img-extension mt-3">
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div> -->
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                             <div class="form-group select select-div">
                                <label for="Blood Group">Blood Group</label>
                                <select class="form-control" id="b" name="b_group">
                                   <option>Select</option>
                                   <option value="1500">O+</option>
                                   <option value="1600">O-</option>
                                   <option value="2000">A+</option>
                                   <option value="2500">A-</option>
                                   <option value="2100">AB+</option>
                                   <option value="5000">AB-</option>
                                </select>
                             </div>
                             <div class="form-group">
                                <label for="name">Quantity</label>
                                <div class="inner-addon right-addon">
                                <input type="number" class="form-control" id="c" name="qty" placeholder="Enter quantity here..">
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="name">Estimated Cost</label>
                                <div class="inner-addon right-addon">
                                    <input name="result" for="b c" placeholder="All prices are in &#8358;"/>
                                </div>
                             </div>
                       </div>
                    </div>
              </div>
              <div class="col-lg-9">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Request For Blood</h4>
                             <p class="text-justify">Submit Your Quote and Request, We Will Get Back To ASAP To You Confirm Your Order.</p>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Name</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="h_name">Hospital Name</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-ils"></i>
                                      <input type="text" class="form-control" id="h_name" name="h_name" placeholder="Hospital Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="add">Address</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-address-book-o"></i>
                                      <input type="text" class="form-control" name="add" id="add" placeholder="Hospital Address">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mobno">Mobile Number</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-phone"></i>
                                      <input type="text" class="form-control" id="number" name="number" placeholder="Mobile Number">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Email</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-envelope"></i>
                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                      </div>
                                   </div>
                                </div>
                                <hr>
                                <!----
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="Blood Group">Blood Group</label>
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option>Select</option>
                                          <option value="O+">O+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bp">Blood Pressure</label>
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="h_rate">Heart Rate</label>
                                       <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="genotype">Genotype</label>
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option>Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="weight">Weight</label>
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="height">Height</label>
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="temprature">Temperature</label>
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature">
                                    </div>
                                </div>
                                ----->
                                <button type="submit" class="btn btn-primary">Send Request</button>
                                {!! Form::close() !!}
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
        <footer class="bg-white iq-footer" style="margin-top: 120px;">
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
@endsection