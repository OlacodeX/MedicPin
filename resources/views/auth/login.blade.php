@extends('layouts.main')

@section('content')	<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="./" class="navbar-brand logo">
                    <img src="assets/img/mpin.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="./" class="menu-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
          </div>
          <style>
             ul.main-nav{
                padding-left: 70px;
             }
@media (max-width: 1300px) {
             ul.main-nav{
                padding-left: 5px;
             }
          }
@media only screen and (max-width: 768px) {
             ul.main-nav{
                padding-left: 5px;
             }
          }

          </style>
          
                <ul class="main-nav">
                    <li>
                        <a href="./">Home</a>
                    </li>
                    <li class="has-submenu active">
                        <a href="#">Doctor's Resources <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="active"><a href="./dashboard">Dashboard</a></li>
                   <li><a href="./appointments" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>My Appointments</span></a></li>
                   
                     <li><a href="./blood_bank" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Blood Bank</span></a></li>
                     
                  <li><a href="./add_op" class="iq-waves-effect"><i class="ri-folders-fill"></i><span>Add Operation Record</span></a></li>
                  <li><a href="./chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                  <li><a href="./questions" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Forum</span></a></li>
                  
                            <li class="has-submenu">
                                <a href="#">To Do</a>
                                <ul class="submenu">
                         <li><a href="./schedule">My To Do</a></li>
                         <li><a href="./schedule/create">Add To Do</a></li>
                                </ul>
                            </li>
                   <li><a href="./notifications">Sent Notifications</a></li>
                   <li><a href="./notifications/create">Send Notification</a></li>
                   <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                   <li><a href="./doctors">Doctors List</a></li>
                   <li>
                    <a href="./mybills"><i class="ri-device-fill"></i><span>My Bills</span></a>
                   
                 </li>
                        </ul>
                    </li>	
                    <li class="has-submenu">
                        <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                   <li><a href="./doctors">Patients List</a></li>
                   <li><a href="./transfered_patients">Transferred Patients</a></li>  
                   <li><a href="./patients/create">Add Patient</a></li>
                        </ul>
                    </li>	
                    <li class="has-submenu">
                        <a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                   <li><a href="./pharmacist_shop" class="iq-waves-effect"><i class="ion-medkit"></i><span>Buy Drugs</span></a></li>
                   <!----
                            <li><a href="pharmacy-index.html">Pharmacy</a></li>
                            <li><a href="pharmacy-details.html">Pharmacy Details</a></li>
                            <li><a href="pharmacy-search.html">Pharmacy Search</a></li>
                            <li><a href="product-all.html">Product</a></li>
                            <li><a href="product-description.html">Product Description</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="product-checkout.html">Product Checkout</a></li>
                            <li><a href="payment-success.html">Payment Success</a></li>--->
                        </ul>
             </li>
             <!----
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="voice-call.html">Voice Call</a></li>
                            <li><a href="video-call.html">Video Call</a></li>
                            <li><a href="search.html">Search Doctors</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li class="has-submenu">
                                <a href="invoices.html">Invoices</a>
                                <ul class="submenu">
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="invoice-view.html">Invoice View</a></li>
                                </ul>
                            </li>
                            <li><a href="blank-page.html">Starter Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="admin/index.html" target="_blank">Admin</a></li>
                            <li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
                        </ul>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Login / Signup</a>
                    </li>--->
                </ul>	 
            </div>		 
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>							
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +234 802 551 0164</p>
                    </div>
                </li>
                
						<li class="nav-item">
							<a class="nav-link header-login" href="./login">login / Signup </a>
						</li>
                <!-- /User Menu -->
                
            </ul>
        </nav>
    </header>
    <!-- /Header -->
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="assets/img/login-banner.png" class="img-fluid" alt="MedicPin Login">	
                        </div>
                        <div class="col-md-12 col-lg-6 login-right" style="margin-bottom: 20px;">
                            <div class="login-header">
                                <h3>Login Into <span>MedicPin</span></h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}" >
                                @csrf
                                <div class="form-group form-focus">
                                    <input id="email" type="email" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus class="form-control floating @error('email') is-invalid @enderror">
                                    <label class="focus-label">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-focus">
                                    <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="current-password" placeholder="Password">
                                    <label class="focus-label">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-right">
                                    @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                    @endif
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <!-----
                                <div class="row form-row social-login">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                    </div>
                                </div>--->
                                <div class="text-center dont-have">Don’t have an account? <a href="./register">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->
                    
            </div>
        </div>

    </div>

</div>		
<!-- /Page Content -->


<!-- Footer 
<footer class="bg-white iq-footer">
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
Footer END -->
@endsection