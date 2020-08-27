@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | {{auth()->user()->name}}
@endsection
@section('content')
<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:39:48 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                     <li class="active">
                        <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Doctor's Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="./myprofile">My Profile</a></li>
                           <li><a href="./notifications">Sent Notifications</a></li>
                           <li><a href="./notifications/create">Send Notification</a></li>
                           <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                           <li><a href="patients/create">Add Patient</a></li>
                           <li><a href="./patients">Patients List</a></li>
                           <li><a href="./transfered_patients">Transferred Patients</a></li>
                           <li><a href="./add_drug">Add Drug</a></li>
                           <li><a href="./myshop">My Shop</a></li>
                           <li><a href="./schedule">To Do List</a></li>
                           <li><a href="./blood_bank">Blood Bank</a></li>
                        </ul>
                     </li>
                     <li><a href="./pharmacy" class="iq-waves-effect"><i class="ion-medkit"></i><span>Pharmacy</span></a></li>
                     <li><a href="./chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
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
                 <ul class="navbar-nav ml-auto navbar-list pull-right">
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
                    <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="../images/user/1.jpg" class="img-fluid rounded" alt="user"></a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                       <div class="iq-card shadow-none m-0">
                             <div class="d-inline-block w-100 text-center p-3">
                                <a class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
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
          <div class="row">
             <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body profile-page p-0">
                      <div class="profile-header">
                         <div class="cover-container">
                            <img src="images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded img-fluid w-100"> 
                            <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                               <li><a href="patients/{{$pro->id}}/edit" title="Edit Profile"><i class="ri-pencil-line"></i></a></li>
                               
                            </ul>
                         </div>
                         <div class="profile-info p-4">
                            <div class="row">
                               <div class="col-sm-12 col-md-6">
                                  <div class="user-detail pl-5">
                                     <div class="d-flex flex-wrap align-items-center">
                                        <div class="profile-img pr-4">
                                           <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid" />
                                        </div>
                                        <div class="profile-detail d-flex align-items-center">
                                           <h3>{{$pro->name}}</h3>
                                           <p class="m-0 pl-3"> {{$pro->role}}</p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-sm-12 col-md-6">
                                  <ul class="nav nav-pills d-flex align-items-end float-right profile-feed-items p-0 m-0">
                                     <li>
                                        <a class="nav-link active" data-toggle="pill" href="mailto:{{$pro->email}}">{{$pro->email}}</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             @if (auth()->user()->role == 'Patient')
              <!-- 
             <div class="col-sm-12">
                <div class="row">
                   <div class="col-lg-3 profile-left">
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">News</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="m-0 p-0">
                               <li class="d-flex mb-2">
                                  <div class="news-icon"><i class="ri-chat-4-fill"></i></div>
                                  <p class="news-detail mb-0">there is a meetup in your city on fryday at 19:00. <a href="#">see details</a></p>
                               </li>
                               <li class="d-flex">
                                  <div class="news-icon mb-0"><i class="ri-chat-4-fill"></i></div>
                                  <p class="news-detail mb-0">20% off coupon on selected items at pharmaprix </p>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Gallery</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <p class="m-0">132 pics</p>
                            </div>
                         </div>
                         <div class="iq-card-body p-0">
                            <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g2.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g3.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g4.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g5.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g6.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g7.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g8.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g9.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Twitter Feeds</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <div class="twit-feed">
                               <div class="media-support-header mb-2">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                                  </div>
                                  <div class="media-support-info">
                                     <h6 class="mb-0"><a href="#" class="">Anna Sthesia</a></h6>
                                     <p>@anna59 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Html</a>
                                     <a href="#" class="twit-meta-tag pr-2">#Bootstrap</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="twit-feed">
                               <div class="media-support-header mb-2">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/02.jpg" alt="">
                                  </div>
                                  <div class="media-support-info">
                                     <h6 class="mb-0"><a href="#" class="">Paige Turner</a></h6>
                                     <p>@paige30 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Js</a>
                                     <a href="#" class="twit-meta-tag pr-2">#Bootstrap</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="twit-feed">
                               <div class="media-support-header">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/03.jpg" alt="">
                                  </div>
                                  <div class="media-support-info mt-2">
                                     <h5 class="mb-0"><a href="#" class="">Greta Life</a></h5>
                                     <p>@greta07 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Html</a>
                                     <a href="#" class="twit-meta-tag pr-2">#CSS</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 profile-center">
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="profile-feed" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-body p-0">
                                  <div class="user-post-data p-3">
                                     <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                           <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                           <h5 class="mb-0"><a href="#" class="">Anna Sthesia</a></h5>
                                           <p class="mb-0 text-primary">colleages</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <a href="#" class="text-secondary">29 mins <i class="ri-more-2-line ml-3"></i></a>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-share-forward-line mr-2"></i></i>Share</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Copy Link</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="user-post">
                                     <a href="javascript:void();"><img src="images/page-img/p1.jpg" alt="post-image" class="img-fluid" /></a>
                                  </div>
                                  <div class="comment-area p-3">
                                     <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                           <div class="d-flex align-items-center feather-icon mr-3">
                                              <a href="javascript:void();"><i class="ri-heart-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                           <div class="d-flex align-items-center message-icon">
                                              <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                           </div>
                                           <span class="ml-2">+140 more</span>
                                        </div>
                                     </div>
                                     <hr>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                     <hr>
                                     <ul class="post-comments p-0 m-0">
                                        <li class="mb-2">
                                           <div class="d-flex flex-wrap">
                                              <div class="user-img">
                                                 <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                              </div>
                                              <div class="comment-data-block ml-3">
                                                 <h6>Monty Carlo</h6>
                                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="javascript:void();">like</a>
                                                    <a href="javascript:void();">reply</a>
                                                    <a href="javascript:void();">translate</a>
                                                    <span> 5 minit </span>
                                                 </div>
                                              </div>
                                           </div>
                                        </li>
                                        <li>
                                           <div class="d-flex flex-wrap">
                                              <div class="user-img">
                                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                              </div>
                                              <div class="comment-data-block ml-3">
                                                 <h6>Paul Molive</h6>
                                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="javascript:void();">like</a>
                                                    <a href="javascript:void();">reply</a>
                                                    <a href="javascript:void();">translate</a>
                                                    <span> 5 minit </span>
                                                 </div>
                                              </div>
                                           </div>
                                        </li>
                                     </ul>
                                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Lovely!">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                        </div>
                                     </form>
                                  </div>                              
                               </div>
                            </div>
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-body p-0">
                                  <div class="user-post-data p-3">
                                     <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                           <img class="rounded-circle img-fluid" src="images/user/02.jpg" alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                           <h5 class="mb-0"><a href="#" class="">jenny issad</a></h5>
                                           <p class="mb-0 text-primary">colleages</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <a href="#" class="text-secondary">1 hr <i class="ri-more-2-line ml-3"></i></a>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-share-forward-line mr-2"></i></i>Share</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Copy Link</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                   <hr class="mt-0">
                                     <p class="p-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                     
                                  <div class="comment-area p-3"><hr class="mt-0">
                                     <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                           <div class="d-flex align-items-center feather-icon mr-3">
                                              <a id="clickme" href="javascript:void();"><i class="ri-heart-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                           <div class="d-flex align-items-center message-icon">
                                              <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                           </div>
                                           <span class="ml-2">+140 more</span>
                                        </div>
                                     </div>
                                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Lovely!">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                        </div>
                                     </form>
                                  </div>                              
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-activity" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Activity timeline</h4>
                                  </div>
                                  <div class="iq-card-header-toolbar d-flex align-items-center">
                                     <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                        View All
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right p-0">                                         
                                           <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>View</a>
                                           <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="iq-timeline">
                                     <li>
                                        <div class="timeline-dots"></div>
                                        <h6 class="float-left mb-1">Client Login</h6>
                                        <small class="float-right mt-1">24 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-success"></div>
                                        <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                        <small class="float-right mt-1">23 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-danger"></div>
                                        <h6 class="float-left mb-1">Dev Meetup</h6>
                                        <small class="float-right mt-1">20 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi bears jelly lollipop apple</p>
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/10.jpg" alt="">
                                              </a>
                                           </div>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-primary"></div>
                                        <h6 class="float-left mb-1">Client Call</h6>
                                        <small class="float-right mt-1">19 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-warning"></div>
                                        <h6 class="float-left mb-1">Mega event</h6>
                                        <small class="float-right mt-1">15 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-friends" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Friends</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="suggestions-lists m-0 p-0">
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paul Molive</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paul Molive</h6>
                                           <p class="mb-0">trainee</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Anna Mull</h6>
                                           <p class="mb-0">Web Developer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paige Turner</h6>
                                           <p class="mb-0">trainee</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton43" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Barb Ackue</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton44" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Greta Life</h6>
                                           <p class="mb-0">Tester</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton45" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Ira Membrit</h6>
                                           <p class="mb-0">Android Developer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton46" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Pete Sariya</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton47" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                  </ul>
                                  <a href="javascript:void();" class="btn btn-primary d-block"><i class="ri-add-line"></i> Load More</a>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-profile" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Profile</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <div class="user-detail text-center">
                                     <div class="user-profile">
                                        <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                                     </div>
                                     <div class="profile-detail mt-3">
                                        <h3 class="d-inline-block">Nik Jone</h3>
                                        <p class="d-inline-block pl-3"> - Web designer</p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">About User</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                 <div class="user-bio">
                                     <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Joined:</h6>
                                  <p>November 15, 2012</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Lives:</h6>
                                  <p>United States of America</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Email:</h6>
                                  <p><a href="https://iqonic.design/cdn-cgi/l/email-protection#8de3e4e6e7e2e3e8cdeae0ece4e1a3eee2e0"> <span class="__cf_email__" data-cfemail="ea8483818085848faa8d878b8386c4898587">[email&#160;protected]</span></a></p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Url:</h6>
                                  <p><a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank"> www.bootstrap.com </a></p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Contact:</h6>
                                  <p><a href="tel:001 4544 565 456">(001) 4544 565 456</a></p>
                                 </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 profile-right">
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">About</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <div class="about-info m-0 p-0">
                               <div class="row">
                                  <div class="col-12"><p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p></div>
                                  <div class="col-3">Email:</div>
                                  <div class="col-9"><a href="https://iqonic.design/cdn-cgi/l/email-protection#7b1512101114151e3b1f1e16141455181416"> <span class="__cf_email__" data-cfemail="385651535257565d785c5d555757165b5755">[email&#160;protected]</span> </a></div>
                                  <div class="col-3">Phone:</div>
                                  <div class="col-9"><a href="tel:001 2351 256 12">001 2351 256 12</a></div>
                                  <div class="col-3">Location:</div>
                                  <div class="col-9">USA</div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">stories</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="media-story m-0 p-0">
                               <li class="d-flex mb-4 align-items-center active">
                                  <img src="images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>Web Design</h5>
                                     <p class="mb-0">1 hour ago</p>
                                  </div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <img src="images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>App Design</h5>
                                     <p class="mb-0">4 hour ago</p>
                                  </div>
                               </li>
                               <li class="d-flex align-items-center">
                                  <img src="images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>Abstract Design</h5>
                                     <p class="mb-0">9 hour ago</p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Suggestions</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                               <a href="#"><i class="ri-more-fill"></i></a>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="suggestions-lists m-0 p-0">
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paul Molive</h6>
                                     <p class="mb-0">4 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paul Molive</h6>
                                     <p class="mb-0">4 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Anna Mull</h6>
                                     <p class="mb-0">6 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paige Turner</h6>
                                     <p class="mb-0">8 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Barb Ackue</h6>
                                     <p class="mb-0">1 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Greta Life</h6>
                                     <p class="mb-0">3 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Ira Membrit</h6>
                                     <p class="mb-0">12 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Pete Sariya</h6>
                                     <p class="mb-0">2 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                            </ul>
                               <a href="javascript:void();" class="btn btn-primary d-block"><i class="ri-add-line"></i> Load More</a>
                         </div>
                      </div>
                   </div>
                </div>--->
                @endif
             </div>
          </div>
       </div>
    </div>
 </div>
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
</body>

<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:39:53 GMT -->



@endsection
