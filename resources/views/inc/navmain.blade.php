
		<!-- Main Wrapper -->
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
                  
                  @if (auth()->user()->role == 'Doctor')
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
                             
                          @php
                          $hospital = App\hospitals::where('id',auth()->user()->h_id)->first();
                              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                          @endphp
                          @if (!empty($hospital))
                          <li><a href="./hospitals/{{$hospital->id}}" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>My Hospital</span></a></li>
                         @else
                         <li><a href="./hospitals/create" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Add Hospital</span></a></li>
                          @endif
                          @php
                          $lab = App\Laboratories::where('created_by',auth()->user()->pin)->first();
                              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                          @endphp
                          @if (!empty($lab))
                          <li><a href="./my_lab" class="iq-waves-effect"><i class="ri-hospital-line"></i><span>My Laboratory</span></a></li>
                         @else
                         <li><a href="./create_lab" class="iq-waves-effect"><i class="ri-hospital-line"></i><span>Create Laboratory</span></a></li>
                          @endif
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
                           <li><a href="./patients/{{auth()->user()->id}}/edit">My Profile</a></li>
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
						
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="img/profile/{{auth()->user()->img}}" width="31" alt="{{auth()->user()->name}}">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="img/profile/{{auth()->user()->img}}" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>{{auth()->user()->name}}</h6>
										<p class="text-muted mb-0">{{auth()->user()->role}}</p>
									</div>
								</div>
								<a class="dropdown-item" href="./dashboard">Dashboard</a>
								<a class="dropdown-item" href="./myprofile">Profile Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-login-box-line ml-2"></i>Sign out</a>
                       
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
							</div>
						</li>
						<!-- /User Menu -->
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			@endif