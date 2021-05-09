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
                        <div class="col-md-7 col-lg-5 login-left">
                            <img src="assets/img/login-banner.png" class="img-fluid" alt="MedicPin Login">	
                        </div>
                        <div class="col-md-12 col-lg-7 login-right" style="margin-bottom: 20px;">
                            <div class="login-header">
                                <h3>Complete Sign Up For Your <span>MedicPin Account...</span></h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="mt-4">
                                @include('inc.messages')
                                @csrf
                                <input id="name" type="hidden" name="name" value="{{$name}}">
                                <input id="email" type="hidden" name="email" value="{{ $email }}">
                                <input id="cc" type="hidden" name="cc" value="{{$cc}}">
                                <input id="age" type="hidden" name="age" value="{{$age}}">
                                <input id="phone" type="hidden" name="phone" value="{{ $phone }}">
                                <input id="gender" type="hidden"  name="gender" value="{{ $gender }}">
                                <input id="password" type="hidden"  name="password" value="{{ $password }}">
                                <input id="password_confirmation" type="hidden"  name="password_confirmation" value="{{ $password_confirmation }}">
                                <div class="form-group">
                            <select class="form-control mb-0" id="type" name="type" onchange="yesnoCheck(this);">
                                      <option value="">-select account type-</option>
                                      <option value="Organization">Organization</option>
                                      <option value="HMO">HMO</option>
                                      <option value="Personal/Individual">Personal/Individual</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="hmo_orgg" id="orgname" style="display: none;" placeholder="Enter organisation name">
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="hmo_org" id="hmoname" style="display: none;" placeholder="Enter HMO name">
                                    
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="m_status" name="m_status" onchange="yesnoCheck(this);">
                                      <option value="">--Marital Status--</option>
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Divorced">Divorced</option>
                                      <option value="Widowed">Widowed</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="children" id="children" style="display: none;" placeholder="Number of children">
                                   
                                </div>
                                <div class="form-group">
                            <select class="form-control mb-0" id="role" name="role" onchange="yesnoCheck(this);" style="display: none;">
                                      <option value="">-I am a...-</option>
                                      <option value="Nurse">Nurse</option>
                                      <option value="Pharmacist">Pharmacist</option>
                                      <option value="Patient">Patient</option>
                                      <option value="Biochemist/Microbiologist">Biochemist/Microbiologist</option>
                                      <option value="Doctor">Doctor</option>
                                      <option value="Ward Maid">Ward Maid</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="username" id="username" style="display: none;" placeholder="Enter username">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="add" id="add" style="display: none;" placeholder="Enter Address">
                                    
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="nhis" name="nhis" style="display: none;" onchange="yesnoCheck(this);">
                                      <option value="">Patient Type</option>
                                      <option value="NHIS">NHIS</option>
                                      <option value="Non NHIS">Non NHIS</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control floating" name="nhiss" id="nhiss" style="display: none;" placeholder="Enter NHIS number...">
                                    
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="selectex" name="expertise" style="display: none;">
                                      <option value="">Expertise</option>
                                      <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                      <option value="Anesthesiologist">Anesthesiologist</option>
                                      <option value="Cardiologist">Cardiologist</option>
                                      <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                      <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                      <option value="Dermatologist">Dermatologist</option>
                                      <option value="Endocrinologist">Endocrinologist</option>
                                      <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                      <option value="Family Physician">Family Physician</option>
                                      <option value="Gastroenterologist">Gastroenterologist</option>
                                      <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                      <option value="Hematologist">Hematologist</option>
                                      <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                      <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                      <option value="Internist">Internist</option>
                                      <option value="Medical Geneticist">Medical Geneticist</option>
                                      <option value="Nephrologist">Nephrologist</option>
                                      <option value="Neurologist">Neurologist</option>
                                      <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                      <option value="Oncologist">Oncologist</option>
                                      <option value="Ophthalmologist">Ophthalmologist</option>
                                      <option value="Osteopath">Osteopath</option>
                                      <option value="Otolaryngologist">Otolaryngologist</option>
                                      <option value="Pathologist">Pathologist</option>
                                      <option value="Pediatrician">Pediatrician</option>
                                      <option value="Physiatrist">Physiatrist</option>
                                      <option value="Plastic Surgeon">Plastic Surgeon</option>
                                      <option value="Podiatrist">Podiatrist</option>
                                      <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                      <option value="Psychiatrist">Psychiatrist</option>
                                      <option value="Pulmonologist">Pulmonologist</option>
                                      <option value="Radiologist">Radiologist</option>
                                      <option value="Rheumatologist">Rheumatologist</option>
                                      <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                      <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                      <option value="General Surgeon">General Surgeon</option>
                                      <option value="Urologist">Urologist</option>
                                   </select>
                                </div>
                                <style>
                                    
                                            input.form-control.fie{
                                                padding-top: 20px;
                                                padding-bottom: 50px;
                                                text-align: center;
                                                background: #aaaaaa;
                                                border:#00b2ac 2px dashed;
                                                border-radius: 0;
                                            }
                                            input.form-control.fie[type="file"]{
                                    -webkit-appearance: none;
                                    text-align: center;
                                    -webkit-rtl-ordering:  left;
                                    }
                                    input.form-control.fie[type="file"]::-webkit-file-upload-button{
                                    -webkit-appearance: none;
                                    margin: 0 0 300px 150px;
                                    border: none;
                                    border-radius: 4px;
                                    padding: 3px 30px;
                                    background: transparent;
                                    color: #00b2ac;
                                    font-weight: bold;
                                    }
                                    input.form-control.fie[type="file"]::-webkit-file-upload-text{
                                    -webkit-appearance: none;
                                    display: none;
                                    }
                                </style>
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Picture') }}</label>
                                        <input id="pp" type="file" class="form-control @error('pp') is-invalid @enderror fie image" name="pp">
                                         <!---
                                        <input type="hidden" name="x1" value="" />
                                            <input type="hidden" name="y1" value="" />
                                            <input type="hidden" name="w" value="" />
                                            <input type="hidden" name="h" value="" />--->
                                        @error('pp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="./terms">Terms and Conditions</a></label>
                                    </div><br><br>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Register</button>
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
                                    <div class="text-center dont-have">Have an existing account? <a href="./login">Login</a></div>
                                </div>
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