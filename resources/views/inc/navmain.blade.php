
      <!-- Wrapper Start -->
      <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
           <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="./">
                <img src="./img/yy.jpg" class="img-fluid" alt="">
                <span>
                 {{config('app.name')}}
                </span>
                </a>
              <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                       <div class="wrapper-menu">
                          <div class="main-circle"><i class="ri-more-fill"></i></div>
                          <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                       </div>
                    </div>
                 </div>
           </div>
           <div id="sidebar-scrollbar">
              <nav class="iq-sidebar-menu">
                 <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                    @if (auth()->user()->role == 'Patient')
                    <li>
                       <a href="./dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                      
                    </li>
                    <li class="active">
                       <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="./myprofile">My Profile</a></li>
                          <li><a href="./notifications">My Notifications</a></li>
                          <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                          <li><a href="">My Appointments</a></li>
                       </ul>
                    </li>
                    <li><a href="./pharmacy" class="iq-waves-effect"><i class="ion-medkit"></i><span>Pharmacy</span></a></li>
                    <li><a href="./chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                    <li><a href="./questions" class="iq-waves-effect"><i class="ri-message-line"></i><span>Forum</span></a></li>
                    <li>
                       <a href="./"><i class="ri-home-4-line"></i><span>Homepage</span></a>
                      
                    </li>
                    
                    <li>
                       
                       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-login-box-line ml-2"></i>Sign out</a>
                       
                         

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form> 
                   </li>
                        
                    @endif
                    @if (auth()->user()->role == 'Doctor')
                    <li>
                       <a href="./dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                      
                    </li>
                    <li class="active">
                       <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Doctor's Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="./myprofile">My Profile</a></li>
                          <li><a href="./notifications">Sent Notifications</a></li>
                          <li><a href="./notifications/create">Send Notification</a></li>
                          <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                          <li><a href="./patients/create">Add Patient</a></li>
                          <li><a href="./patients">Patients List</a></li>
                          <li><a href="./transfered_patients">Transferred Patients</a></li>
                       </ul>
                  </li>
                          <li>
                             <a href="#user-info1" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ion-medkit"></i><span>Pharmacy</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                             
                             <ul id="user-info1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                 <li><a href="./add_drug">Add Drug</a></li>
                                 <li><a href="./myshop">My Shop</a></li>
                                 <li><a href="./pharmacy">Pharmacy Shop</a></li>
                              </ul>
                         </li>
                          <li><a href="./blood_bank" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Blood Bank</span></a></li>
                          <li><a href="./hospitals/{{$hospital->id}}" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>My Hospital</span></a></li>
                          <li><a href="./add_op" class="iq-waves-effect"><i class="ri-folders-fill"></i><span>Add Operation Record</span></a></li>
                          <li><a href="./chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                          <li><a href="./questions" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Forum</span></a></li>
                          <li>
                             <a href="./" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Homepage</span></a>
                            
                          </li>
                    
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-login-box-line ml-2"></i>Sign out</a>
                       
                         

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
                   </li>
                   @endif
                   <!----
                    <li class="active">
                       <a href="index.html" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                    </li>                     
                    <li>
                       <a href="dashboard-1.html" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Hospital Dashboard 1 </span></a>
                    </li>
                    <li>
                       <a href="dashboard-2.html" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Hospital Dashboard 2</span></a>
                    </li>
                    <li>
                       <a href="dashboard-3.html" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient Dashboard</span></a>
                    </li>
                    <li>
                       <a href="dashboard-4.html" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Covid-19 Dashboard</span><span class="badge badge-danger">New</span></a>
                    </li>
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                    <li>
                       <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="app/index.html"><i class="ri-inbox-fill"></i>Inbox</a></li>
                          <li><a href="app/email-compose.html"><i class="ri-edit-2-fill"></i>Email Compose</a></li>
                       </ul>
                    </li>
                    
                    <li>
                       <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                          <li><a href="add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                          <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                          <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li>
                       </ul>
                    </li>
                    <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                   
                   <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Chat</span></a></li>
                   
                    
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                    <li>
                       <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                          <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                          <li><a href="ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                          <li><a href="ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                          <li><a href="ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                          <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                          <li><a href="ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                          <li><a href="ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                          <li><a href="ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                          <li><a href="ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                          <li><a href="ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                          <li><a href="ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                          <li><a href="ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                          <li><a href="ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                          <li><a href="ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                          <li><a href="ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                          <li><a href="ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                          <li><a href="ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                          <li><a href="ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                          <li><a href="ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                          <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                          <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                          <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                          <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                          <li><a href="form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                          <li><a href="form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                          <li><a href="data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                          <li><a href="table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                          <li><a href="chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                          <li><a href="chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                          <li><a href="chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-copper-coin-fill"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="icon-dripicons.html"><i class="ri-stack-fill"></i>Dripicons</a></li>
                          <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                          <li><a href="icon-lineawesome.html"><i class="ri-keynote-fill"></i>line Awesome</a></li>
                          <li><a href="icon-remixicon.html"><i class="ri-remixicon-fill"></i>Remixicon</a></li>
                          <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                       </ul>
                    </li>
                    <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                    <li>
                       <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-server-fill"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="sign-in.html"><i class="ri-login-box-fill"></i>Login</a></li>
                          <li><a href="sign-up.html"><i class="ri-logout-box-fill"></i>Register</a></li>
                          <li><a href="pages-recoverpw.html"><i class="ri-record-mail-fill"></i>Recover Password</a></li>
                          <li><a href="pages-confirm-mail.html"><i class="ri-chat-check-fill"></i>Confirm Mail</a></li>
                          <li><a href="pages-lock-screen.html"><i class="ri-file-lock-fill"></i>Lock Screen</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#map" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-2-fill"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="pages-map.html"><i class="ri-google-fill"></i>Google Map</a></li>
                          <li><a href="#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-folders-fill"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="pages-timeline.html"><i class="ri-map-pin-time-fill"></i>Timeline</a></li>
                          <li><a href="pages-invoice.html"><i class="ri-question-answer-fill"></i>Invoice</a></li>
                          <li><a href="blank-page.html"><i class="ri-checkbox-blank-fill"></i>Blank Page</a></li>
                          <li><a href="pages-error.html"><i class="ri-error-warning-fill"></i>Error 404</a></li>
                          <li><a href="pages-error-500.html"><i class="ri-error-warning-fill"></i>Error 500</a></li>
                          <li><a href="pages-pricing.html"><i class="ri-price-tag-3-fill"></i>Pricing</a></li>
                          <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-fill"></i>Pricing 1</a></li>
                          <li><a href="pages-maintenance.html"><i class="ri-git-repository-commits-fill"></i>Maintenance</a></li>
                          <li><a href="pages-comingsoon.html"><i class="ri-run-fill"></i>Coming Soon</a></li>
                          <li><a href="pages-faq.html"><i class="ri-compasses-2-fill"></i>Faq</a></li>
                       </ul>
                    </li>
                    <li class="menu-level">
                       <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                             <ul>
                                <li>
                                   <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                   <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                      <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                   </ul>
                                </li>
                             </ul>
                          </li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                          <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                       </ul>
                    </li>-->
                 </ul>
              </nav>
              <div class="p-3"></div>
           </div>
        </div>
        
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
           <!-- TOP Nav Bar -->
        <div class="iq-top-navbar header-top-sticky">
           <div class="iq-navbar-custom">
              <div class="iq-sidebar-logo">
                 <div class="top-logo">
                    <a href="./">
                    <img src="./img/yy.jpg" class="img-fluid" alt="">
                    <span>
                     {{config('app.name')}}
                    </span>
                    </a>
                 </div>
              </div>
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                 <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                       <input type="text" class="text search-input" placeholder="Type here to search...">
                       <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    </form>
                 </div>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <i class="ri-menu-3-line"></i>
                 </button>
                 <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                       <div class="main-circle"><i class="ri-more-fill"></i></div>
                          <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                    </div>
                 </div>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">
                        <!---
                       <li class="nav-item">
                          <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                          <div class="iq-sub-dropdown">
                             <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                             <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                             <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                             <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                             <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                          </div>
                       </li>--->
                       <li class="nav-item iq-full-screen">
                          <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                       </li>
                       <li class="nav-item dropdown">
                          <a href="#" class="search-toggle iq-waves-effect">
                             <i class="ri-mail-line"></i>
                             <span class="badge badge-pill badge-primary badge-up count-mail">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</span>
                          </a>
                          <!----recent m here--->
                          <div class="iq-sub-dropdown">
                             <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                   <div class="bg-primary p-3">
                                      <h5 class="mb-0 text-white">Unread Messages<small class="badge  badge-light float-right pt-1">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small></h5>
                                   </div>
                                   
                                   @if (count($new_messages) > 0)
                                   @foreach ($new_messages as $message)
                                   <a href="./chat/{{$message->id}}" class="iq-sub-card" >
                                      <div class="media align-items-center">
                                         <div class="media-body ml-3">
                                            <h6 class="mb-0 ">{{$message->sender_name}}</h6>
                                            <small class="float-left font-size-12">{{$message->created_at}}</small>
                                         </div>
                                      </div>
                                   </a>
                                   @endforeach
                                   @else <br>
                                   <p class="text-center">You Have No Unread Messages</p>    
   
                                   @endif
                                   <div class="text-center">
                                   <a href="./chat" class="btn btn-primary" style="margin-bottom: 20px;">See All Messages</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </li>
                       
                       <li class="nav-item">
                           <a href="./cart" class="iq-waves-effect" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Shopping Cart"><i class="ri-shopping-cart-2-line"></i></a>
                           <span class="badge badge-primary badge-up count-mail">{{App\StoreCart::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->count() }}</span>
                        </li>
                    </ul>
                 </div>
                 <ul class="navbar-list">
                    <li>
                       <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                          <img src="img/profile/{{auth()->user()->img}}" class="img-fluid rounded-circle mr-3" alt="user">
                          <div class="caption">
                             <h6 class="mb-0 line-height">{{auth()->user()->name}}</h6>
                             <span class="font-size-12">Available</span>
                          </div>
                       </a>
                       <div class="iq-sub-dropdown iq-user-dropdown">
                          <div class="iq-card shadow-none m-0">
                             <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                   <h5 class="mb-0 text-white line-height">Hello {{auth()->user()->name}}</h5>
                                   <span class="text-white font-size-12">Available</span>
                                </div>
                                <a href="./myprofile" class="iq-sub-card iq-bg-primary-hover">
                                   <div class="media align-items-center">
                                      <div class="rounded iq-card-icon iq-bg-primary">
                                         <i class="ri-file-user-line"></i>
                                      </div>
                                      <div class="media-body ml-3">
                                         <h6 class="mb-0 ">My Profile</h6>
                                         <p class="mb-0 font-size-12">View personal profile details.</p>
                                      </div>
                                   </div>
                                </a>
                                <a href="patients/{{auth()->user()->id}}/edit" class="iq-sub-card iq-bg-primary-hover">
                                   <div class="media align-items-center">
                                      <div class="rounded iq-card-icon iq-bg-primary">
                                         <i class="ri-profile-line"></i>
                                      </div>
                                      <div class="media-body ml-3">
                                         <h6 class="mb-0 ">Edit Profile</h6>
                                         <p class="mb-0 font-size-12">Modify your personal details.</p>
                                      </div>
                                   </div>
                                </a>
                                <div class="d-inline-block w-100 text-center p-3">
                                   <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </li>
                 </ul>
              </nav>

           </div>
        </div>
        <!-- TOP Nav Bar END -->