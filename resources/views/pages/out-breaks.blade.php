<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="Medicpin">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Medicpin" />
      <meta property="og:url" content="index-2.html"/>
      <meta property="og:title" content="Covid-19 outbreak ">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="Medicpin responds to Covid19 by integrating prompt response of patients data">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title> Medicpin | Covid 19 - Outbreak</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!---------favicon--------------->
      <link rel="icon" type="image/png" href="assets/image/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="assets/image/favicon-16x16.png" sizes="16x16">
      <!---------favicon--------------->
   </head>
   <body class="scroll_bar_style_one">
      <div class="page_wapper">
         <!--page_wapper-->
         <!--Start Preloader-->
         <!-- <div class="preloader">
            <div class="preloader_box">
               <div class="loader">
                  <img src="assets/image/preloader.png" class="img-fluid" alt="img">
                  <p>please Wait...</p>
               </div>
            </div>
         </div> -->
         <!--End Preloader-->
         <!--Header-->
         <header class="header_v1">
            <!--Header-v1--->
            <section class="navbar_outer">
               <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                  <div class="container">
                     <a class="navbar-brand" href="./"><img src="assets/image/logo-default.png" class="img-fluid" alt="img"></a>
                     <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                     <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="navbarnav">
                           <li class="nav-item home  nav_item drop_down">
                              <a class="nav-link link_hd" href="#"> <i class="linearicons-home4 home_icon"></i> </a></li>
                           <li class="nav-item nav_item"><a class="nav-link link_hd" href="./about">About </a></li>
                           <li class="nav-item nav_item"><a class="nav-link" href="./out-breaks">Covid-19 </a></li>
                           <li class="nav-item nav_item"><a class="nav-link" href="./blog">  Updates  </a></li>
                           <li class="nav-item nav_item"><a class="nav-link link_hd" href="./faqs">Faqs</a></li>
                        </ul>
                        <ul class="navbar-nav navbar-mobile navbar_right">
                           <li  class="nav-item  drop_down">
                              <a  href="#"> <i class="linearicons-magnifier search_icon"></i></a>
                              <ul class="navbar-nav nav_search_submenu submenu">
                                 <li class="nav_search">
                                    <form>
                                       <div class="form_group">
                                          <input type="text" name="search" placeholder="Enter Keywords..." />
                                          <button class="search_btn" type="submit"><i class="linearicons-arrow-right"></i></button>
                                       </div>
                                    </form>
                                 </li>
                              </ul>
                           </li>
                           @guest
                           <li><a class="theme_btn tp_two" href="{{ route('login') }}"><span class="linearicons-enter icon"></span>Access Health Records</a></li>
                           <li style="margin-left: 10px;"><a class="theme_btn tp_two" href="{{ route('register') }}"><span class="linearicons-toggle icon"></span>Sign Up</a></li>
                           
                           @else
                           <li><a class="theme_btn tp_two" href="./dashboard"><span class="linearicons-files icon"></span>Dashboard</a></li>
                           <li class="two" style="margin-left: 10px;">
                              <style>
                                 a.theme_btn.tp_two.two,
                                 li.two{
                                    background: transparent;
                                     border:1px solid #dd2d4e;
                                     color: #dd2d4e;
                                     border-radius: 30px;
                                     padding: 0px;
                                 }
                                 
                              </style>
                              <a class="theme_btn tp_two two" style="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="linearicons-exit icon"></span>
                             Sign out
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form> 
                           
                           </a>
                        </li>
                           @endguest
                           
                        </ul>
                     </div>
                     <div class="options_menu ">
                        <!-- /.site-header__cart -->
                        <a href="#" class="site-header__sidemenu-nav side-menu__toggler">
                           <span class="site-header__sidemenu-nav-line"></span>
                           <!-- /.site-header__sidemenu-nav-line -->
                           <span class="site-header__sidemenu-nav-line"></span>
                           <!-- /.site-header__sidemenu-nav-line -->
                           <span class="site-header__sidemenu-nav-line"></span>
                           <!-- /.site-header__sidemenu-nav-line -->
                           <!-- /.site-header__sidemenu -->
                        </a>
                     </div>
                  </div>
               </div>
               <!--Header-v1-end-->
            </section>
         </header>
         <!--Header-->
         <main class="main-content">
            <!------main-content------>
            <!-----------page_title--------------->
            <section class="page_title medium  pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 text-center">
                        <!---------col----------->
                        <div class="content_box">
                           <h6>How the coronavirus diseases </h6>
                           <h1>Mapping the Coronavirus Outbreak</h1>
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item active">Outbreaks</li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->
            <!-----------counter--------------->
            <section class="counter type_two">
               <div class="container">
                  <div class="counter_outer_box style_two">
                     <div class="row">
                        <!---------row----------->
                        <div class="col-lg-4 col-md-12">
                           <!---------col----------->
                           <div class="heading tp_one">
                              <h6>Worldwide Tracker</h6>
                              <h1>Pandemic Statistics</h1>
                              <p>Last updated: March 27, 2020, 14:49 GMT</p>
                           </div>
                           <!---------col-end---------->
                        </div>
                        <div class="col-lg-8 col-md-12 d-flex">
                           <!---------col----------->
                           <div class="counter_box_outer">
                              <div class="counter_box type_two one">
                                 <div class="image_box">
                                    <img src="assets/image/svg/fun-1.svg" class="img-fluid" alt="svg_iage" />
                                 </div>
                                 <div class="text_box">
                                    <h2><span class="odometer " data-count="558357"></span></h2>
                                    <h6>Coronavirus Cases</h6>
                                 </div>
                              </div>
                              <div class="counter_box type_two two">
                                 <div class="image_box">
                                    <img src="assets/image/svg/fun-2.svg" class="img-fluid" alt="svg_iage" />
                                 </div>
                                 <div class="text_box">
                                    <h2><span class="odometer " data-count="25262"></span></h2>
                                    <h6>Deaths</h6>
                                 </div>
                              </div>
                              <div class="counter_box type_two three">
                                 <div class="image_box">
                                    <img src="assets/image/svg/fun-3.svg" class="img-fluid" alt="svg_iage" />
                                 </div>
                                 <div class="text_box">
                                    <h2><span class="odometer " data-count="128718"></span></h2>
                                    <h6>Recovered</h6>
                                 </div>
                              </div>
                           </div>
                           <!---------col-end---------->
                        </div>
                        <!----------row-end---------->
                     </div>
                  </div>
               </div>
            </section>
            <!-----------counter-end-------------->
            <!-----------interactive_map--------------->
            <section class="interactive_map type_one pdt_100  pdb_100">
               <div class="container-fluid">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h1>Real-time COVID-19 Tracking</h1>
                           <p>Confirmed Cases and Deaths by Country, Territory, or Conveyance. The coronavirus COVID-19 is affecting 200 <br class="md_display_none">countries and territories around the world and 2 international conveyances</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-md-12">
                        <!---------col----------->
                        <div class="map_box">
                           <img src="assets/image/resources/interactive-map.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="pin_marker_outer type_one">
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                           <div class="pin">
                              <div class="pin_box">
                                 <h2>Italy</h2>
                                 <p>Confirmed Cases</p>
                                 <h6> 97,689</h6>
                              </div>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------interactive_map-end-------------->
            <!-----------overall_deatils table--------------->
            <section class="overall_deatils type_one   pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Now                </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Yesterday</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Last 10 days</a>
                           </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="table-responsive">
                                 <table id="outbreaks" class="table  table-striped table-bordered" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>Country,<br> Other</th>
                                          <th>Total<br>Cases</th>
                                          <th>New<br>Cases</th>
                                          <th>Total<br> Deaths</th>
                                          <th>New<br>Deaths</th>
                                          <th>Total<br>Recoveres</th>
                                          <th>Active<br>Cases</th>
                                          <th>Serious,<br>Critical</th>
                                          <th>Cases<br>/1M pop</th>
                                          <th>Deaths<br> /1M pop</th>
                                          <th>Reported<br>1st case</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="total_row_world odd" role="row">
                                          <td>World</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                       <tr>
                                          <td>USA</td>
                                          <td>161,647</td>
                                          <td>+18,156</td>
                                          <td>2,998</td>
                                          <td>+415</td>
                                          <td>5,254</td>
                                          <td>153,395</td>
                                          <td>3,512</td>
                                          <td>488</td>
                                          <td>9</td>
                                          <td>Jan 20</td>
                                       </tr>
                                       <tr>
                                          <td>Spain</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>China</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Germany</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>France</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Iran</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>UK</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Switzerland</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Belgium</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Netherlands</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Turkey</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>South Korea</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Austria</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Canada</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Portugal</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <td>Total</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                    </tfoot>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="table-responsive">
                                 <table id="outbreakstwo" class="table table-responsive table-striped table-bordered" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>Country,<br> Other</th>
                                          <th>Total<br>Cases</th>
                                          <th>New<br>Cases</th>
                                          <th>Total<br> Deaths</th>
                                          <th>New<br>Deaths</th>
                                          <th>Total<br>Recoveres</th>
                                          <th>Active<br>Cases</th>
                                          <th>Serious,<br>Critical</th>
                                          <th>Cases<br>/1M pop</th>
                                          <th>Deaths<br> /1M pop</th>
                                          <th>Reported<br>1st case</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="total_row_world odd" role="row">
                                          <td>World</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                       <tr>
                                          <td>USA</td>
                                          <td>161,647</td>
                                          <td>+18,156</td>
                                          <td>2,998</td>
                                          <td>+415</td>
                                          <td>5,254</td>
                                          <td>153,395</td>
                                          <td>3,512</td>
                                          <td>488</td>
                                          <td>9</td>
                                          <td>Jan 20</td>
                                       </tr>
                                       <tr>
                                          <td>Spain</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>China</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Germany</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>France</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Iran</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>UK</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Switzerland</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Belgium</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Netherlands</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Turkey</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>South Korea</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Austria</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Canada</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Portugal</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <td>Total</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                    </tfoot>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                              <div class="table-responsive">
                                 <table id="outbreaksthree" class="table table-responsive table-striped table-bordered" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>Country,<br> Other</th>
                                          <th>Total<br>Cases</th>
                                          <th>New<br>Cases</th>
                                          <th>Total<br> Deaths</th>
                                          <th>New<br>Deaths</th>
                                          <th>Total<br>Recoveres</th>
                                          <th>Active<br>Cases</th>
                                          <th>Serious,<br>Critical</th>
                                          <th>Cases<br>/1M pop</th>
                                          <th>Deaths<br> /1M pop</th>
                                          <th>Reported<br>1st case</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="total_row_world odd" role="row">
                                          <td>World</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                       <tr>
                                          <td>USA</td>
                                          <td>161,647</td>
                                          <td>+18,156</td>
                                          <td>2,998</td>
                                          <td>+415</td>
                                          <td>5,254</td>
                                          <td>153,395</td>
                                          <td>3,512</td>
                                          <td>488</td>
                                          <td>9</td>
                                          <td>Jan 20</td>
                                       </tr>
                                       <tr>
                                          <td>Spain</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>China</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Germany</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>France</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Iran</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>UK</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Switzerland</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Belgium</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Netherlands</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Turkey</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>South Korea</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Austria</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Canada</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                       <tr>
                                          <td>Portugal</td>
                                          <td>101,739</td>
                                          <td>+4,050</td>
                                          <td>11,591</td>
                                          <td>+812</td>
                                          <td>14,620</td>
                                          <td>75,528</td>
                                          <td>3,981</td>
                                          <td>1,683	</td>
                                          <td>192</td>
                                          <td>Jan 29</td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <td>Total</td>
                                          <td>781,979</td>
                                          <td>+58,589</td>
                                          <td>37,606</td>
                                          <td>+3,541</td>
                                          <td>164,753</td>
                                          <td>579,620</td>
                                          <td>29,590</td>
                                          <td>100.3</td>
                                          <td>4.8</td>
                                          <td>Jan 10</td>
                                       </tr>
                                    </tfoot>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------overall_deatils-end-------------->
            <!-----------out_break_updates--------------->
            
            <!-----------out_break_updates-end-------------->
            <!-----------FEELING UNWELL?--------------->
            <section class="unwell type_one  pdb_80 pdt_80">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12  text-center">
                        <!---------col----------->
                        <div class="heading white  tp_one">
                           <h1>Feeling unwell? </h1>
                           <p>Assess your symptoms online with our free symptom checker.</p>
                        </div>
                        <a href="#" class="theme_btn tp_one"><span class="linearicons-syringe"></span>Symptom Checker</a>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------unwell-end-------------->
            <!-----------footer--------------->
            <!-----------footer--------------->
           <section class="footer type_two pdt_100  pdb_70">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <!---------col----------->
                     <div class="footer_widgets type_two">
                        <h3 class="widgets_title logo">
                           <a href="./">
                           <img src="assets/image/footer-logo.png" class="img-fluid" alt="logo" />
                           </a>
                        </h3>
                        <div class="widget_content">
                           <p>We offer innovative solutions to helps reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record, thereby saving time and energy.</p>
                           <a href="about.html" class="read_more tp_one">  View More<span class="linearicons-arrow-right"></span></a>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                     <!---------col----------->
                     <div class="footer_widgets type_two">
                        <h3 class="widgets_title">Getting familiar</h3>
                        <div class="widget_content">
                           <ul class="links">
                              <li><a href="./about">About Us </a></li>
                              <li><a href="./faqs">Frequently Asked Question</a></li>
                              <li><a href="./out-breaks">Response to Covid19</a></li>
                              <li><a href="{{route('login')}}">Doctors Page</a></li>
                           </ul>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                     <!---------col----------->
                     <div class="footer_widgets type_two">
                        <h3 class="widgets_title">Electronic Health Records</h3>
                        <div class="widget_content">
                           <ul class="links">
                     <li><a href="{{route('login')}}">Access Health Records</a></li>
                              <li><a href="./privacy">Privacy Policy</a></li>
                              <li><a href="./terms">Terms and Conditions</a></li>
                              <li><a href="./blog">Latest Updates</a></li>
                      
                           </ul>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                     <!---------col----------->
                     <div class="footer_widgets type_two">
                        <h3 class="widgets_title">Contacts</h3>
                        <div class="widget_content">
                           <h2 class="emergency_contact"><a href="#">08025510164</a></h2>
                           <ul class="contact_all">
                              <li><a href="#"><span class="linearicons-home4"></span>90, Aladelola Street, Ketu, Lagos</a></li>
                              <li><a href="#"><span class="fa fa-skype"></span>Skype ID: <small>medicpin</small></a></li>
                              <li><a href="#"><span class="linearicons-envelope-open"></span>Email: <small>info@medicpin.com</small></a></li>
                           </ul>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------footer-end-------------->
         <!-----------footerlast UNWELL?--------------->
         <section class="footerlast type_two  pdb_40 pdt_50">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-8 col-md-12">
                     <!---------col----------->
                     <ul>
                        <li>Medicpin © Copyright 2020 | Protect Yourself</li>
                        <li>|</li>
                        <li><a href="./terms">Term of Use </a> <a href="./privacy">  Privacy Policy  </a> <a href="./about">  Read More</a></li>
                     </ul>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-4 col-md-12 text-right">
                     <!---------col----------->
                     <p>Developed <span class="linearicons-heart"></span> by<small> <a href="https://www.stark.com.ng"> Stark Limited</a></small></p>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------footerlast-end-------------->
         <!------main-content-end----->
      </main>
      <!--page_wapper-end---->
   </div>
   <!--Scroll to top-->
   <a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
   <!---------mbile-navbar----->
   <div class="bsnav-mobile ">
      <div class="bsnav-mobile-overlay"></div>
      <div class="navbar ">
         <button class="navbar-toggler toggler-spring mobile-toggler"><span class="linearicons-cross close_arrow"></span></button>
         <div class="search_form">
            <form>
               <div class="form-group">
                  <input type="text" name="search" placeholder="Search..." />
                  <button class="serach_btn" type="submit"><i class="linearicons-magnifier search_icon"></i></button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!---------mbile-navbar----->
   <!-- /.side-menu__block -->
   <div class="side-menu__block">
      <div class="side-menu__block-overlay custom-cursor__overlay">
         <div class="cursor"></div>
         <div class="cursor-follower"></div>
      </div>
      <!-- /.side-menu__block-overlay -->
      <div class="side-menu__block-inner">
         <div class="row ">
            <div class="col-lg-12 ">
               <div class="side-menu__block-contact ">
                  <span class="side_menu_close linearicons-cross close_arrow"> </span>
                  <h2>Get in touch</h2>
                  <p>  If you have any question about Medicpin, please fill below  the contact form.</p>
                  <div class="form_outer">
                     <form>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="from_group">
                                 <input type="text" name="name" placeholder="Your Name" />
                                 <small class="linearicons-user"></small>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="from_group">
                                 <input type="email" name="email" placeholder="Your Email Address" />
                                 <small class="linearicons-envelope-open"></small>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="from_group">
                                 <input type="text" name="phone" placeholder="Your Phone" />
                                 <small class="linearicons-telephone"></small>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="from_group text-area">
                                 <textarea rows="5" placeholder="Your Message..."></textarea>
                                 <small class="linearicons-pencil4"></small>
                              </div>
                           </div>
                           <div class="col-lg-7">
                              <div class="form-group mg_top check_box">
                                 <input name="checkbox" type="checkbox" id="test7" required="required">
                                 <label for="test7">I accept the <a href="./privacy" target="_blank">Privacy Policy.</a></label>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="from_group">
                                 <button class="submit_btn" type="submit">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- /.side-menu__block-contact -->
               <div class="side-menu__block-contact">
                  <h3 class="side-menu__block__title">Social Network</h3>
                  <!-- /.side-menu__block__title -->
                  <ul class="social_media">
                     <li><a href="https://facebook.com/medicpin"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="https://twitter.com/medicpin"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://youtube.com/medicpin"><i class="fa fa-youtube-play"></i></a></li>
                     <li><a href="https://instagram.com/medicpin"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="https://vimeo.com/medicpin"><i class="fa fa-vimeo"></i></a></li>
                  </ul>
                  <!-- /.side-menu__block-contact__list -->
                  <ul class="links">
                     <li><a href="./terms">Term of Use </a></li>
                     <li> <a href="./privacy">  Privacy Policy  </a></li>
                     <li> <a href="./about">  Read More</a></li>
                  </ul>
               </div>
               <!-- /.side-menu__block-contact -->
               <p class="side-menu__block__text site-footer__copy-text">
                  <a href="./"> Medicpin © Copyright 2020 | Protect Yourself.</a> 
               </p>
               <p  class="side-menu__block__text site-footer__copy-text">Developed <span class="linearicons-heart"></span> by<small><a href="https://www.stark.com.ng"> Stark Limited</a></small></p>
            </div>
         </div>
      <!-- /.side-menu__block -->
       <!-----------------------------------script--------------------------->
       <script src="assets/js/all.js"></script> 
       <script src="assets/js/custom.js"></script>
        <!-----------------------------------script-------------------
        <script src="assets/js/jquery.js "></script>
        <script src="assets/js/popper.min.js "></script>
        <script src="assets/js/bootstrap.min.js "></script>
        <script src="assets/js/bsnav.min.js "></script>
        <script src="assets/js/jquery-ui.js "></script>
        <script src="assets/js/wow.js "></script>
        <script src="assets/js/owl.js "></script>
        <script src="assets/js/jquery.fancybox.js "></script>
        <script src="assets/js/TweenMax.min.js "></script>
        <script src="assets/js/appear.js "></script>
        <script src="assets/js/moment.js "></script>
        <script src="assets/js/odometer.min.js "></script>
        <script src="assets/js/pagenav.js "></script>
        <script src="assets/js/custom.js "></script>------------------->
   </body>

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/out-breaks.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:39:13 GMT -->
</html>