@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
         <style>
             
div.jumbotron-fluid{
                background:linear-gradient(rgba(1, 0, 2, 0.714),rgba(0, 0, 2, 0.829)), url('img/3.jpg') no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment:fixed;
                padding-top: 100px;
                padding-bottom: 200px;
                width: 100%;
                margin-top: 0;
                text-align: center;
                margin-bottom: 0px;
                color: #fff;
}
div.card{
   margin-bottom: 0;
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
         </div> 
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title"><b> MedicPin Blood Bank</b></h4>
                  <small>Efficient, Reliable, Affordable.....</small>
               </div>
               <div class="card-body"> 
                  <div class="row">
                  <div class="col-md-3">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Price Estimate Calculator</h4>
                        </div>
                     </div>
                     <div class="card-body">
                      @include('inc.messages')
                      {!! Form::open(['action' => 'PagesController@send_request_mail', 'method' => 'POST', 'oninput' => 'result.value=parseInt(b.value)*parseInt(c.value)']) /** The action should be the block of code in the store function in PostsController
                      **/ !!} 
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
                           <div class="form-group form-focus">
                              <div class="inner-addon right-addon">
                              <input type="number" class="form-control floating" id="c" name="qty" placeholder="Enter quantity here..">
                              </div>
                              <label for="quantity" class="focus-label">Quantity</label>
                           </div>
                           <div class="form-group">
                              <label for="name">Estimated Cost</label>
                              <div class="inner-addon right-addon">
                                  <input name="result" for="b c" class="form-control" placeholder="All prices are in &#8358;"/>
                              </div>
                           </div>

                     </div>
                  </div>
            </div>
            <div class="col-md-9">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Request For Blood</h4>
                           <small class="text-justify">Submit Your Quote and Request, We Will Get Back To ASAP To You Confirm Your Order.</small>
                        </div>
                     </div>
                     <div class="card-body"> 
                              <div class="row"> 
                              <div class="col-md-6">
                                 <div class="form-group form-focus">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                    <input type="text" class="form-control floating" id="name" name="name" placeholder="Your Name">
                                    </div>
                                    <label for="name" class="focus-label">Name</label>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group form-focus">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-ils"></i>
                                    <input type="text" class="form-control floating" id="h_name" name="h_name" placeholder="Hospital Name">
                                    </div>
                                    <label for="h_name" class="focus-label">Hospital Name</label>
                                 </div>
                              </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                       <div class="inner-addon right-addon">
                                          <i class="fa fa-address-book-o"></i>
                                       <input type="text" class="form-control floating" name="add" id="add" placeholder="Hospital Address">
                                       </div>
                                       <label for="add" class="focus-label">Address</label>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                       <div class="form-group form-focus">
                                          <div class="inner-addon right-addon">
                                             <i class="fa fa-phone"></i>
                                          <input type="text" class="form-control floating" id="number" name="number" placeholder="Mobile Number">
                                          </div>
                                          <label for="mobno" class="focus-label">Mobile Number</label>
                                       </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group form-focus">
                                       <div class="inner-addon right-addon">
                                          <i class="fa fa-envelope"></i>
                                       <input type="email" class="form-control floating" id="email" placeholder="Email" name="email">
                                       </div>
                                       <label for="email" class="focus-label">Email</label>
                                    </div>
                                 </div>
                              </div>
                              <hr> 
                              <button type="submit" class="btn btn-primary">Send Request</button>
                              {!! Form::close() !!}
                           </div>
                        </div>
                     </div>
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
      <!-- Footer 
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
         </footer>-->
      <!-- Footer END -->
@endsection