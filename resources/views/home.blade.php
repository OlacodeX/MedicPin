@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Dashboard
@endsection
@section('content')
<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:39:48 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Full calendar -->
    <link href='fullcalendar/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/list/main.css' rel='stylesheet' />
</head>
<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="./">
               <img src="img/yy.jpg" class="img-fluid" alt="">
               <span>
                {{config('app.name')}}
               </span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     @if (auth()->user()->role == 'Doctor')
                     <li class="active">
                        <a href="../dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                       
                     </li>
                     <li>
                        <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Doctor's Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="./myprofile">My Profile</a></li>
                           <li><a href="./notifications">Sent Notifications</a></li>
                           <li><a href="./notifications/create">Send Notification</a></li>
                           <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                           <li><a href="./patients/create">Add Patient</a></li>
                           <li><a href="./patients">Patients List</a></li>
                        </ul>
                     </li>
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
                    @if (auth()->user()->role == 'Patient')
                    <li class="active">
                       <a href="../dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                      
                    </li>
                    <li>
                       <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                       <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                          <li><a href="./myprofile">My Profile</a></li>
                          <li><a href="./notifications">My Notifications</a></li>
                          <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                          <li><a href="">My Appointments</a></li>
                       </ul>
                    </li>
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
                     <!----
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                     <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>
                     <li>
                        <a href="#ecommerce" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>eCommerce</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="product.html">Product</a></li>
                           <li><a href="itemdetails.html">Item Details</a></li>
                           <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Components</span></li>
                     <li>
                        <a href="#menu-design" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Menu Design</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sales-dashboard.html">Horizontal menu</a></li>
                           <li><a href="employee-dashboard.html">Horizontal Top Menu</a></li>
                           <li><a href="course-dashboard.html">Two Sidebar</a></li>
                           <li><a href="finance-dashboard.html">Vertical block menu</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html">colors</a></li>
                           <li><a href="ui-typography.html">Typography</a></li>
                           <li><a href="ui-alerts.html">Alerts</a></li>
                           <li><a href="ui-badges.html">Badges</a></li>
                           <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                           <li><a href="ui-buttons.html">Buttons</a></li>
                           <li><a href="ui-cards.html">Cards</a></li>
                           <li><a href="ui-carousel.html">Carousel</a></li>
                           <li><a href="ui-embed-video.html">Video</a></li>
                           <li><a href="ui-grid.html">Grid</a></li>
                           <li><a href="ui-images.html">Images</a></li>
                           <li><a href="ui-list-group.html">list Group</a></li>
                           <li><a href="ui-media-object.html">Media</a></li>
                           <li><a href="ui-modal.html">Modal</a></li>
                           <li><a href="ui-notifications.html">Notifications</a></li>
                           <li><a href="ui-pagination.html">Pagination</a></li>
                           <li><a href="ui-popovers.html">Popovers</a></li>
                           <li><a href="ui-progressbars.html">Progressbars</a></li>
                           <li><a href="ui-tabs.html">Tabs</a></li>
                           <li><a href="ui-tooltips.html">Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html">Form Elements</a></li>
                           <li><a href="form-validation.html">Form Validation</a></li>
                           <li><a href="form-switch.html">Form Switch</a></li>
                           <li><a href="form-chechbox.html">Form Checkbox</a></li>
                           <li><a href="form-radio.html">Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms-wizard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html">Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html">Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html">Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html">Basic Tables</a></li>
                           <li><a href="data-table.html">Data Table</a></li>
                           <li><a href="table-editable.html">Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html">Morris Chart</a></li>
                           <li><a href="chart-high.html">High Charts</a></li>
                           <li><a href="chart-am.html">Am Charts</a></li>
                           <li><a href="chart-apex.html">Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html">Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html">Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html">line Awesome</a></li>
                           <li><a href="icon-remixicon.html">Remixicon</a></li>
                           <li><a href="icon-unicons.html">unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html">Login</a></li>
                           <li><a href="sign-up.html">Register</a></li>
                           <li><a href="pages-recoverpw.html">Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-user-line"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html">Google Map</a></li>
                           <li><a href="#">Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html">Timeline</a></li>
                           <li><a href="pages-invoice.html">Invoice</a></li>
                           <li><a href="blank-page.html">Blank Page</a></li>
                           <li><a href="pages-error.html">Error 404</a></li>
                           <li><a href="pages-error-500.html">Error 500</a></li>
                           <li><a href="pages-pricing.html">Pricing</a></li>
                           <li><a href="pages-pricing-one.html">Pricing 1</a></li>
                           <li><a href="pages-maintenance.html">Maintenance</a></li>
                           <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                           <li><a href="pages-faq.html">Faq</a></li>
                        </ul>
                     </li><li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                              <li>
                                 <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                 <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                    <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                                 </ul>
                              </li>
                           </li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>---->
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
                <div class="top-logo">
                    <a href="./">
                    <img src="img/yy.jpg" class="img-fluid" alt="">
                    <span>
                     {{config('app.name')}}
                    </span>
                    </a>
                    <div class="iq-menu-bt">
                        <div class="wrapper-menu">
                            <div class="line-menu half start"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu half end"></div>
                        </div>
                    </div>
                </div>
            </div>
             <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-line"></i>
                              <span class="badge badge-pill badge-primary badge-up count-mail">3</span>
                           </a>
                           <!----recent m here--->
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect text-white">
                            
                            @if (auth()->user()->role == 'Patient')
                            <img src="img/cover_img/{{$patient->img}}"
                             class="img-fluid mb-3 avatar-120 rounded-circle" alt="">
                        @endif
                        @if (auth()->user()->role == 'Doctor')
                            <img src="images/user/1.jpg"
                             class="img-fluid mb-3 avatar-120 rounded-circle" alt="">
                        @endif
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a href="{{ route('logout') }}" class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-login-box-line ml-2"></i>Sign out</a>
                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
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
      <!-- Responsive Breadcrumb -->
        <div class="iq-breadcrumb">
            <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12">
                      <div class="iq-card overflow-hidden iq-waves-effect">
                           <div class="navbar-breadcrumb ">
                              <h5 class="mb-0">Dashboard</h5>
                                <nav aria-label="breadcrumb">
                                   <ul class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Patient Dashboard</li>
                                      <li class="breadcrumb-item">
                                        <a href="{{ route('logout') }}" class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ri-login-box-line ml-2"></i>Sign out</a>
                                    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                   </ul>
                                </nav>
                             </div>
                       </div>
                    </div>
                 </div>
              </div>
        </div>
  <!-- Responsive Breadcrumb End-->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <!-- Content Top Banner Start -->
                <div class="col-lg-3 col-md-12">
                  <div class="row">
                  <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-profile-card text-center">
                        <div class="iq-card-body">
                            <div class="iq-team text-center p-0">
                                @if (auth()->user()->role == 'Patient')
                                    <img src="img/cover_img/{{$patient->img}}"
                                     class="img-fluid mb-3 avatar-120 rounded-circle" alt="">
                                @endif
                                @if (auth()->user()->role == 'Doctor')
                                    <img src="images/user/1.jpg"
                                     class="img-fluid mb-3 avatar-120 rounded-circle" alt="">
                                @endif
                                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                <a href="#" class="d-inline-block w-100"><span class="__cf_email__" data-cfemail="b4dadddff4c7dbd2d6dbccd5d0d9ddda9ad7dbd9" style="font-size: 13px;">{{ Auth::user()->email}}</span></a>
                                
                                <hr>
                                
                                @if (auth()->user()->role == 'Patient')
                                <ul class="list-inline mb-0 d-flex justify-content-between">
                                    <li class="list-inline-item">
                                        <h5>Blood</h5>
                                        <p class="text-success">{{$patient->b_group}}</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>Height</h5>
                                        <p class="text-success">{{$patient->height}}cm</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5>Weight</h5>
                                        <p class="text-success">{{$patient->weight}}kg</p>
                                    </li>
                                </ul>
                            
                                @endif
                            </div>
                            <div id="Dash1BarChart"></div>
                        </div>
                    </div>
                  </div>
                  @if (auth()->user()->role == 'Patient')
                  <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Address</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                 data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                 data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                <div class="item">
                                    <div class="">
                                        <p>
                                            {{$patient->address}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                  </div>
                  @endif
                </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    @include('inc.messages')
                    <div class="row">
                        <div class="col-md-12">
                                
                            @if (auth()->user()->role == 'Patient')
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Summary</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="iq-card shadow-none mb-0">
                                                <div class="iq-card-body p-1">
                                                    <span class="font-size-14">Blood pressure</span>
                                                    <h2>{{$patient->bp}}
                                                        <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-primary" data-percent={{$patient->bp}}></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="iq-card shadow-none mb-0">
                                                <div class="iq-card-body p-1">
                                                    <span class="font-size-14">Temperature</span>
                                                    <h2>{{$patient->temp}}
                                                    <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-success" data-percent={{$patient->temp}}></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="iq-card shadow-none mb-0">
                                                <div class="iq-card-body p-1">
                                                    <span class="font-size-14">Heart Rate</span>
                                                    <h2>{{$patient->h_rate}}
                                                    <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-danger" data-percent={{$patient->h_rate}}></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endif
                                
                                        @if (auth()->user()->role == 'Doctor')
                                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Summary</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Total Patients</span>
                                                                <h2>
                                                                    {{App\patients::where('doc_email', auth()->user()->email)->count()}}
                                                                    </h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-primary" data-percent= {{App\patients::where('doc_email', auth()->user()->email)->count()}}></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Upcoming Appointments</span>
                                                                <h2>12</h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-success" data-percent="2"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Unread Notifications</span>
                                                                <h2>
                                                                    {{App\Notifications::where('to_email', auth()->user()->email)->count()}}</h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-danger" data-percent="{{App\Notifications::where('to_email', auth()->user()->email)->count()}}"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden wow fadeInUp" data-wow-delay="0.6s">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Your Patients</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="patients">See All</a>
                                    </div>
                                </div>
                                <style>
                                    div.panel-body,
                                    div.panel-default{
                                        border-radius: 0;
                                        border-top: none;
                                    }
                                    .btn.btn-info.btn-sm{
                                        background: transparent;
                                        border: none;
                                        color: rgb(20, 109, 224);
                                    }
                                </style>
                                <div class="iq-card-body p-0">
                                    @if (count($patients) > 0)
                                    @foreach ($patients as $patient)
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                            
                                    {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                     {{Form::hidden('pin', $patient->pin)}}
                                     {{Form::hidden('username', $patient->username)}}
                                    {!! Form::close() !!}
                                    <div class="panel panel-default">
                                    <div class="panel-body">
                                    <span class="pull-left">{{$patient->name}}</span>
                                    <span class="user-list-files d-flex float-right">
                                    
                                    {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Add New Medical Record"><i class="fa fa-edit"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    {{Form::hidden('username', $patient->username)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="View Medical History"><i class="fa fa-bars"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Transfer Patient"><i class="fa fa-paper-plane-o"></i></button>
                                   
                                    {!!Form::close()!!}
                                        {!!Form::open(['action' => ['PatientsController@destroy', $patient->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('email', $patient->email)}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class ="btn btn-info btn-sm" title="Delete Patient"><i class="fa fa-trash-o"></i></button>
                                       
                                        {!!Form::close()!!}
                                     </span>
                                    </div>
                                    </div>
                                    </a>
                                    @endforeach

                                    @else
                                    <p class="text-center">No Patients Yet</p>    
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                                <div class="iq-card-header d-flex justify-content-between">
                        
                        @if (auth()->user()->role == 'Patient')
                                
                        <div class="iq-header-title">
                            <h4 class="card-title">Notifications</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./notifications" class="">See all</a>
                        </div>
                    </div>
                        @if (count($notices) > 0)
                        <div class="iq-card-body">
                            @foreach ($notices as $notice)
                            <a href="notifications/{{$notice->id}}" style="text-decoration: none;">
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="images/user/01.jpg"
                                     alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">Dr.{!!Str::words( $notice->from_name,1)!!} <br><small
                                            class="text-muted font-size-12">{!!Str::words( $notice->created_at,2)!!}</small></h5>
                                    <i class="ri-close-line float-right"></i>
                                    <p>{!!Str::words( $notice->content,5)!!}</p>
                                </div>
                            </div>
                         </a>
                            <hr>
                            @endforeach
                        </div>
                        @else
                        <p class="text-center">No Notifications Yet</p>    
                        @endif
                        @endif
                        @if (auth()->user()->role == 'Doctor')
                                
                        <div class="iq-header-title">
                            <h4 class="card-title">Sent Notifications</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="#" class="./notifications">See all</a>
                        </div>
                    </div>
                        @if (count($notice_sents) > 0)
                        <div class="iq-card-body">
                            @foreach ($notice_sents as $notice_sent)
                            <a href="notifications/{{$notice_sent->id}}" style="text-decoration: none;">
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="images/user/01.jpg"
                                     alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{!!Str::words( $notice_sent->to_name,1)!!} <small
                                            class="text-muted font-size-12">{!!Str::words( $notice_sent->created_at,2)!!}</small></h5>
                                    <i class="ri-close-line float-right"></i>
                                    <p>{!!Str::words( $notice_sent->content,5)!!}</p>
                                </div>
                            </div>
                          </a>
                            <hr>
                            @endforeach
                        </div>
                        @else
                        <p class="text-center">No Sent Notifications Yet</p>    
                        @endif
                        @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Appointments</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="#" class="dropdown-bg"><i class="ri-add-line mr-2"></i>Book Appointment</a>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id='eventcalendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="js/lottie.js"></script>

<!-- Full calendar -->
<script src='fullcalendar/core/main.js'></script>
<script src='fullcalendar/daygrid/main.js'></script>
<script src='fullcalendar/timegrid/main.js'></script>
<script src='fullcalendar/list/main.js'></script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
       var calendarEl = document.getElementById('eventcalendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
         plugins: [ 'timeGrid', 'dayGrid', 'list' ],
         timeZone: 'UTC',
         defaultView: 'dayGridMonth',
         header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
         },
         events: [
         {
            title: 'All Day Event',
            start: '2019-12-01'
         },
         {
            title: 'Long Event',
            start: '2019-12-07',
            end: '2019-12-10',
            color: 'purple' // override!
         },
         {
            groupId: '999',
            title: 'Repeating Event',
            start: '2019-12-09T16:00:00'
         },
         {
            groupId: '999',
            title: 'Repeating Event',
            start: '2019-12-16T16:00:00'
         },
         {
            title: 'Conference',
            start: '2019-12-11',
            end: '2019-12-13',
            color: 'purple' // override!
         },
         {
            title: 'Meeting',
            start: '2019-12-12T10:30:00',
            end: '2019-12-12T12:30:00',
            color: 'red'
         },
         {
            title: 'Lunch',
            start: '2019-12-12T12:00:00',
            color: 'green'
         },
         {
            title: 'Meeting',
            start: '2019-12-12T14:30:00'
         },
         {
            title: 'Birthday Party',
            start: '2020-01-02T07:00:00'
         },
         {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2020-01-15'
         }
      ]
      });
      calendar.render();
   });

</script>


<!-- Chart Custom JavaScript -->
<script src="js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>

<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:39:53 GMT -->



@endsection
