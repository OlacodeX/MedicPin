@extends('layouts.main')
<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/add-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:41:12 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
            @section('page_title')
            {{config('app.name')}} | Add Record
            @endsection
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../css/responsive.css">
   </head>
@section('content')
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="../">
               <img src="../img/yy.jpg" class="img-fluid" alt="">
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
                     @if (auth()->user()->role == 'Patient')
                     <li>
                        <a href="../dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                       
                     </li>
                     <li class="active">
                        <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../myprofile">My Profile</a></li>
                           <li><a href="../notifications">My Notifications</a></li>
                           <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                           <li><a href="">My Appointments</a></li>
                        </ul>
                     </li>
                     <li><a href="../pharmacy" class="iq-waves-effect"><i class="ion-medkit"></i><span>Pharmacy</span></a></li>
                     <li><a href="../chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                     <li><a href="../questions" class="iq-waves-effect"><i class="ri-message-line"></i><span>Forum</span></a></li>
                     <li>
                        <a href="../"><i class="ri-home-4-line"></i><span>Homepage</span></a>
                       
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
                        <a href="../dashboard" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                       
                     </li>
                     <li class="active">
                        <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Doctor's Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../myprofile">My Profile</a></li>
                           <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                           <li><a href="../patients/create">Add Patient</a></li>
                           <li><a href="../patients">Patients List</a></li>
                           <li><a href="../transfered_patients">Transferred Patients</a></li>
                           <li><a href="../notifications">Sent Notifications</a></li>
                           <li><a href="../notifications/create">Send Notification</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#user-info1" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ion-medkit"></i><span>Pharmacy</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        
                        <ul id="user-info1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="../add_drug">Add Drug</a></li>
                            <li><a href="../myshop">My Shop</a></li>
                            <li><a href="../pharmacy">Pharmacy Shop</a></li>
                         </ul>
                    </li>
                     <li><a href="../blood_bank" class="iq-waves-effect"><i class="ion-medkit"></i><span>Blood Bank</span></a></li>
                     <li><a href="../hospitals" class="iq-waves-effect"><i class="ion-medkit"></i><span>My Hospital</span></a></li>
                     <li><a href="../chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                     <li><a href="../questions" class="iq-waves-effect"><i class="ri-message-line"></i><span>Forum</span></a></li>
                     <li>
                        <a href="../" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Homepage</span></a>
                       
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
                    <a href="../">
                    <img src="../img/yy.jpg" class="img-fluid" alt="">
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
                                <a href="../chat/{{$message->id}}" class="iq-sub-card" >
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
                                <a href="../chat" class="btn btn-primary" style="margin-bottom: 20px;">See All Messages</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </li>
                    
                    <li class="nav-item">
                        <a href="../cart" class="iq-waves-effect" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Shopping Cart"><i class="ri-shopping-cart-2-line"></i></a>
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
                                      <li class="breadcrumb-item"><a href="{{ route('logout') }}">Sign out<i class="ri-login-box-line ml-2"></i></a></li>
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
                     <ul id="progressbar" class="text-center">
                         <li class="active step0" id="step1">Cart</li>
                         <li class="step0" id="step2">Address</li>
                         <li class="step0" id="step3">Payment</li>
                     </ul>
                     <div id="cart" class="card-block show b-0">
                         <div class="row">
                            @if (count($cartItems) > 0)
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    @foreach ($cartItems as $cartItem)
                                    <div class="ckeckout-product-lists">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                          <div class=" ml-3 checkout-product-details">
                                             <h5>{{$cartItem->drug_name}}</h5>
                                             <p class="mb-0"><b>{{$cartItem->quantity}}</b></p>
                                          </div>
                                       </div>
                                          <div class="checkout-amount-data text-center">
                                             <div class="price">
                                                <h5>&#8358;{{$cartItem->price}}</h5>
                                             </div>
                                             <div class="checkout-button">
                                                {!!Form::open(['action' => 'CartController@delete','id' => 'my_form_1','method' => 'GET', 'class' => 'pull-left', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $cartItem->id)}}
                                                {!!Form::close()!!}
                                                <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();"class="btn btn-light d-block"><i class="ri-close-line mr-1"></i>Remove</a>
                                            </div>
                                          </div>
                                       </div>
                                    </div><br>
                                    @endforeach 
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <hr>
                                    <p><b>Price Details</b></p>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                       <span class="text-dark"><strong>Total</strong></span>
                                       <span class="text-dark"><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
                                    </div>
                                    <a id="place-order" href="javascript:void();" type="button" class="btn btn-primary d-block mt-1 next">Place order</a>

                                 </div>
                              </div>
                           </div>
                        </div>
                        @else
                        <p>You have no items in your cart yet</p>    
                        @endif
                     </div>
                     <div id="address" class="card-block b-0">
                         <div class="row">
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Add New Address</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form onsubmit="required()">
                                    <div class="row mt-3">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="fname">Full Name: *</label> 
                                              <input type="text" class="form-control" name="fname" required="">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group"> 
                                              <label for="mno">Mobile Number: *</label> 
                                              <input type="text" class="form-control" name="mno" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="houseno">Flat, House No: *</label> 
                                              <input type="text" class="form-control" name="houseno" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="landmark">Landmark e.g. near apollo hospital:: *</label> 
                                              <input type="text" class="form-control" name="landmark" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="city">Town/City: *</label> 
                                              <input type="text" class="form-control" name="city" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="pincode">Pincode: *</label> 
                                              <input type="text" class="form-control" name="pincode" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="state">State: *</label> 
                                              <input type="text" class="form-control" name="state" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="addtype">Address Type</label>
                                                <select class="form-control" id="addtype" required="">
                                                   <option>Home</option>
                                                   <option>Office</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <button id="savenddeliver" type="submit" class="btn btn-primary">Save And Deliver Here</button>
                                          </div>
                                    </div>
                                 </form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <h4 class="mb-2">Nik John</h4>
                                    <div class="shipping-address">
                                       <p class="mb-0">9447 Glen Eagles Drive</p>
                                       <p>Lewis Center, OH 43035</p>
                                       <p>UTC-5: Eastern Standard Time (EST)</p>
                                       <p>202-555-0140</p>
                                    </div>
                                    <hr>
                                    <a id="deliver-address" href="javascript:void();" type="button" class="btn btn-primary d-block mt-1 next">Deliver To this Address</a>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <div id="payment" class="card-block b-0">
                         <div class="row">
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Payment Options</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex justify-content-between align-items-center">
                                          <img src="images/booking/cart.png" alt="" height="40" width="50">
                                          <span>US Unlocked Debit Card 12XX XXXX XXXX 0000</span>
                                       </div>
                                       <div>
                                       <span>Nik John</span>
                                       <span>28/2020</span>
                                    </div>
                                    </div>
                                    <form class="mt-3">
                                       <div class="d-flex align-items-center">
                                          <span>Enter CVV: </span>
                                          <div class="cvv-input ml-3 mr-3">
                                             <input type="text" class="form-control" required=""> 
                                          </div>
                                          <button type="submit" class="btn btn-primary">Continue</button>
                                       </div>
                                    </form>
                                    <hr>
                                    <div class="card-lists">
                                       <div class="form-group">
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="credit" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="credit"> Credit / Debit / ATM Card</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="netbaking" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="netbaking"> Net Banking</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="emi" name="emi" class="custom-control-input">
                                                <label class="custom-control-label" for="emi"> EMI (Easy Installment)</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="cod" name="cod" class="custom-control-input" >
                                                <label class="custom-control-label" for="cod"> Cash On Delivery</label>
                                             </div>
                                       </div>
                                    </div>
                                    <hr>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <h4 class="mb-2">Price Details</h4>
                                    <div class="d-flex justify-content-between">
                                       <span>Price For {{App\StoreCart::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->count() }} Item(s)</span>
                                       <span><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                       <span>Delivery Charges</span>
                                       <span class="text-success">Free</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                       <span>Amount Payable</span>
                                       <span><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
                                    </div>
                                 </div>
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
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END --> 
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'pre' );
            CKEDITOR.replace( 'note' );
         </script> 
      <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="../js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="../js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="../js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="../js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="../js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="../js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="../js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="../js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="../js/lottie.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="../js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="../js/custom.js"></script>
        
@endsection