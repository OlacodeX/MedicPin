<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:41:13 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      @section('page_title')
      {{config('app.name')}} | Records
      @endsection
      <link rel="icon" href="{{asset('img/yy.jpg')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
      <!-- loader END -->
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
                         <li>
                            <a href="./dashboard"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                           
                         </li>
                         <li class="active">
                            <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Doctor's Resources</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                               <li><a href="./myprofile">My Profile</a></li>
                               <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                               <li><a href="patients/create">Add Patient</a></li>
                               <li><a href="./patients">Patients List</a></li>
                               <li><a href="./notifications">Sent Notifications</a></li>
                               <li><a href="./notifications/create">Send Notification</a></li>
                            </ul>
                         </li>
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
                  <a href="./" class="logo">
                  <img src="img/yy.jpg" class="img-fluid" alt="">
                  
                  </a>
               </div>
            </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Patient Records</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$username}}'s Medical Records</li>
                     </ul>
                  </nav>
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
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                         <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                 <h4 class="card-title">Summary</h4>
                                 <small>Most Recent Record Dated {{$record->created_at}}</small>
                             </div>
                         </div>
                              <div class="">
                                @if (auth()->user()->role == 'Patient')
                                 <div class="iq-card-body chat-page p-0">
                                    <div class="chat-data-block">
                                    <div class="row" style="padding-left: 10px;">

                                 <div class="">
                                        <div class="iq-card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Blood pressure</span>
                                                           <h2>{{$record->bp}}
                                                               <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                           <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                               <div class="iq-progress-bar">
                                                                   <span class="bg-primary" data-percent={{$record->bp}}></span>
                                                               </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Temperature</span>
                                                            <h2>{{$record->temp}}Celsius 
                                                            <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                            <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-success" data-percent={{$record->temp}}></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Heart Rate</span>
                                                            @if (empty($record->h_rate))
                                                            <h2>N/A
                                                            <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                            <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-danger" data-percent='0'></span>
                                                                </div>
                                                            </div>
                                                            @else
                                                            
                                                            <h2>{{$record->h_rate}}%
                                                               <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                               <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                   <div class="iq-progress-bar">
                                                                       <span class="bg-danger" data-percent={{$record->h_rate}}></span>
                                                                   </div>
                                                               </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                      <div class="">
                                      <div class="row">
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                        <span class="font-size-14">Genotype</span>
                                                        <h6>
                                                            {{$record->genotype}}
                                                        </h6>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                        <span class="font-size-14">Blood Group</span>
                                                        <h6>
                                                            {{$record->b_group}}
                                                        </h6>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                        <span class="font-size-14">Weight</span>
                                                        <h6>
                                                            {{$record->weight}}kg
                                                        </h6>
        
                                                     </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                        <span class="font-size-14">Height</span>
                                                        <h6>
                                                            {{$record->height}}
                                                        </h6>
        
                                                     </div>
                                                  </div>
                                              </div>
                                           </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Oxygen Saturation</span>
                                                            <h6>
                                                                {{$record->oxygen}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Glucose level</span>
                                                            <h6>
                                                                {{$record->glucose}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Respiratory rate</span>
                                                            <h6>
                                                                {{$record->r_rate}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">BMI</span>
                                                            <h6>
                                                                {{$record->BMI}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">General Note</span>
                                                            <h6>
                                                                {{$record->note}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><br>
                                      <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                      <div class="col-md-12 collapse" id="records">
                                          <div class="iq-card shadow-none mb-0">
                                              <div class="iq-card-body p-1">
                                                 <div class="">
                                                  @if (count($records) > 0)
                                                  <div class="col-sm-12 col-md-6">
                                                     <div class="user-list-files d-flex">
                                                         <a href="javascript:void();" class="chat-icon-delete">
                                                           Pdf
                                                         </a>
                                                       </div>
                                                  </div>
                                               </div>
                                               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                 <thead>
                                                     
                                                     <tr>
                                                        <th>Date</th>
                                                        <th>Temperature</th>
                                                        <th>BP</th>
                                                        <th>Heart Rate</th>
                                                        <th>Genotype</th>
                                                        <th>Blood Group</th>
                                                        <th>Weight</th>
                                                        <th>Height</th>
                                                        <th>Oxygen Saturation</th>
                                                        <th>Glucose Level</th>
                                                        <th>Respiratory Rate</th>
                                                        <th>BMI</th>
                                                        <th>Note</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                  @foreach ($records as $record)
                                                     <tr>
                                                        <td class="text-center">{{$record->created_at}}</td>
                                                        <td>{{$record->temp}}</td>
                                                        <td>{{$record->bp}}</td>
                                                        <td>{{$record->h_rate}}</td>
                                                        <td>{{$record->genotype}}</td>
                                                        <td>{{$record->b_group}}</td>
                                                        <td>{{$record->weight}}</td>
                                                        <td>{{$record->height}}</td>
                                                        <td>{{$record->oxygen}}</td>
                                                        <td>{{$record->glucose}}</td>
                                                        <td>{{$record->r_rate}}</td>
                                                        <td>{{$record->BMI}}</td>
                                                        <td>{{$record->note}}</td>
                                                     </tr> 
                                                     @endforeach                      
                                                 </tbody>
                                               </table>
                                            </div>
                                                  <div class="col-md-6">
                                                      <div style="text-align:right;">
                                                              <!-----The pagination link----->
                                                              {{$records->links()}}
                                                      </div>
                                                      @else
                                                      <p>No Record Found</p>    
                                                      @endif
                                                 </div>
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                   <hr>
                                </div>
                                @endif
                                @if (auth()->user()->role == 'Doctor')
                                 <div class="mt-4 pl-3">
                                       <style>
                                          div.col-sm-2 .iq-card.shadow-none.mb-0,
                                          .iq-card-body.p-1{
                                             box-shadow: 0 5px 6px 0 rgba(105, 105, 105, 0.2);

                                          }
                                          li.top{
                                             margin-top: 20px;
                                          }
                                          ul.top{
                                             padding-left: 0;
                                             margin-left: 0;
                                          }
                                          .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h6,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h2{
                                             padding-left: 20px;
                                          }
                                          a.btn.btn-primary{
                                             margin-left: 10px;
                                          }
                                       @media only screen and (max-width: 768px) {
                                          div.col-md-3{
                                             width: 50%;
                                             float: left;
                                             margin-bottom: 30px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0{
                                             width: 150px;
                                             margin-left: 10px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body h6{
                                             padding-left: 20px;
                                          }
                                            
                                            
                                          }
                                       </style>
                                            <div class="iq-card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                               <span class="font-size-14">Blood pressure</span>
                                                               <h2>{{$record->bp}}
                                                                   <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                               <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                   <div class="iq-progress-bar">
                                                                       <span class="bg-primary" data-percent={{$record->bp}}></span>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Temperature</span>
                                                                <h2>{{$record->temp}}C
                                                                <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-success" data-percent={{$record->temp}}></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Heart Rate</span>
                                                                <h2>{{$record->h_rate}}%
                                                                <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-danger" data-percent={{$record->h_rate}}></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                          <div class="">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Genotype</span>
                                                            <h6>
                                                                {{$record->genotype}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Blood Group</span>
                                                            <h6>
                                                                {{$record->b_group}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                         <div class="">
                                                            <span class="font-size-14">Weight</span>
                                                            <h6>
                                                                {{$record->weight}}kg
                                                            </h6>
            
                                                         </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                         <div class="">
                                                            <span class="font-size-14">Height</span>
                                                            <h6>
                                                                {{$record->height}}cm
                                                            </h6>
            
                                                         </div>
                                                      </div>
                                                  </div>
                                              </div>
                           
                                              <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Oxygen Saturation</span>
                                                           <h6>
                                                               {{$record->oxygen}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Glucose level</span>
                                                           <h6>
                                                               {{$record->glucose}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Respiratory rate</span>
                                                           <h6>
                                                               {{$record->r_rate}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">BMI</span>
                                                           <h6>
                                                               {{$record->BMI}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6 text-center">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">General Note</span>
                                                           <h6>
                                                               {{$record->note}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6 text-center">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Prescription</span>
                                                           <h6>
                                                               {{$record->prescription}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                   
                                          </div><br>
                                          <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                          <div class="col-md-12 collapse" id="records">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                      @if (count($records) > 0)
                                                      <div class="col-sm-12 col-md-6">
                                                         <div class="user-list-files d-flex">
                                                             <a href="javascript:void();" class="chat-icon-delete">
                                                               Pdf
                                                             </a>
                                                           </div>
                                                      </div>
                                                   </div>
                                                   <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                     <thead>
                                                         
                                                     <tr>
                                                      <th>Date</th>
                                                      <th>Temperature</th>
                                                      <th>BP</th>
                                                      <th>Heart Rate</th>
                                                      <th>Genotype</th>
                                                      <th>Blood Group</th>
                                                      <th>Weight</th>
                                                      <th>Height</th>
                                                      <th>Oxygen Saturation</th>
                                                      <th>Glucose Level</th>
                                                      <th>Respiratory Rate</th>
                                                      <th>BMI</th>
                                                      <th>Note</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                @foreach ($records as $record)
                                                   <tr>
                                                      <td class="text-center">{{$record->created_at}}</td>
                                                      <td>{{$record->temp}}</td>
                                                      <td>{{$record->bp}}</td>
                                                      <td>{{$record->h_rate}}</td>
                                                      <td>{{$record->genotype}}</td>
                                                      <td>{{$record->b_group}}</td>
                                                      <td>{{$record->weight}}</td>
                                                      <td>{{$record->height}}</td>
                                                      <td>{{$record->oxygen}}</td>
                                                      <td>{{$record->glucose}}</td>
                                                      <td>{{$record->r_rate}}</td>
                                                      <td>{{$record->BMI}}</td>
                                                      <td>{{$record->note}}</td>
                                                   </tr> 
                                                         @endforeach                      
                                                     </tbody>
                                                   </table>
                                                </div>
                                                      <div class="col-md-6">
                                                          <div style="text-align:right;">
                                                                  <!-----The pagination link----->
                                                                  {{$records->links()}}
                                                          </div>
                                                          @else
                                                          <p>No Record Found</p>    
                                                          @endif
                                                     </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                       <hr>
                                </div>   
                                @endif
                                 </div>
                              </div>
                     <!----
                              <div class="col-lg-12 chat-data p-0 chat-data-right">
                                 <div class="tab-content">
                                    <div class="tab-pane fade" id="chatbox10" role="tabpanel">
                                       <div class="chat-head">
                                          <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                             <div id="sidebar-toggle" class="sidebar-toggle">
                                                <i class="ri-menu-3-line"></i>
                                             </div>
                                              <div class="avatar chat-user-profile m-0 mr-3">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-50 ">
                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                              </div>
                                              <h5 class="mb-0">Monty Carlo</h5>
                                            </div>
                                            <div id="chat-user-detail-popup" class="scroller">
                                                <div class="user-profile text-center">
                                                   <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                   <div class="user mb-4">
                                                    <a class="avatar m-0">
                                                      <img src="images/user/08.jpg" alt="avatar">
                                                    </a>
                                                  <div class="user-name mt-4"><h4>Monty Carlo</h4></div>
                                                  <div class="user-desc"><p>Cape Town, RSA</p></div>
                                                  </div>
                                                  <hr>
                                                  <div class="chatuser-detail text-left mt-4">
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Nik Name:</div>
                                                         <div class="col-6 col-md-6 text-right">Babe</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Tel:</div>
                                                         <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                         <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Gender:</div>
                                                         <div class="col-6 col-md-6 text-right">Female</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Language:</div>
                                                         <div class="col-6 col-md-6 text-right">Engliah</div>
                                                      </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                              <a href="javascript:void();" class="chat-icon-phone">
                                                <i class="ri-phone-line"></i>
                                              </a>
                                             <a href="javascript:void();" class="chat-icon-video">
                                                <i class="ri-vidicon-line"></i>
                                              </a>
                                              <a href="javascript:void();" class="chat-icon-delete">
                                                <i class="ri-delete-bin-line"></i>
                                              </a>
                                              <span class="dropdown">
                                                <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                </span>
                                              </span>
                                            </div>
                                          </header>
                                        </div>
                                       <div class="chat-content scroller">
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>How can we help? We're here for you! 😄</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Hey John, I am looking for the best admin template.</p>
                                                <p>Could you please help me to find it out? 🤔</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Absolutely!</p>
                                                <p>Sofbox Dashboard is the responsive bootstrap 4 admin template.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Looks clean and fresh UI.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Thanks, from ThemeForest.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>I will purchase it for sure. 👍</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Okay Thanks..</p>
                                              </div>
                                            </div>
                                          </div>
                                       </div>
                                       <div class="chat-footer p-3 bg-white">
                                          <form class="d-flex align-items-center"  action="javascript:void(0);">
                                           <div class="chat-attagement d-flex">
                                              <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                              <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                             </div>
                                           <input type="text" class="form-control mr-3" placeholder="Type your message">
                                           <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                         </form>
                                       </div>
                                    </div>
                                    --------------
                                 </div>
                              </div>--->
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
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
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
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:41:14 GMT -->
</html>