<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="Medicpin">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Medicpin" />
      <meta property="og:url" content="index-2.html"/>
      <meta property="og:title" content="Medicpin.com">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="Medicpin helps to reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record,">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title> Update  | Medicpin | Trust cloud based health records storage</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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
            <section class="page_title big  pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 text-center">
                        <!---------col----------->
                        <div class="content_box">
                           <h6>Recent from the Blog</h6>
                           <h1>  Latest Updates</h1>
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item"><a href="#">Updates</a></li>
                              <li class="bread_crumb-item active"> Blog</li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->
            <!-----------blog_v1--------------->
            <section class="blog_v1 pdt_80  pdb_100">
               <div class="container">
                  <div class="featured_post">
                     <div class="row">
                        <!---------row----------->
                        <div class="col-lg-12">
                           <!---------blog_box----------->
                           <div class="blog_box type_two">
                              <div class="image_box">
                                 <img src="assets/image/resources/blog-2-1.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay ">
                                    <a href="assets/image/resources/blog-2-1.jpg" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-picture2"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box clearfix">
                                 <h2><a href="#">When will we have a vaccine for COVID-19 Coronavirus?</a></h2>
                                 <ul>
                                    <li><span class="linearicons-calendar-full"></span>02 Apr 2020</li>
                                    <li><span class="linearicons-bubbles"></span> 21 Comments</li>
                                 </ul>
                                 <p>Medical experts around the world are working around the clock to develop a vaccine for COVID-19 as it continues to spread around the globe. But how are vaccines made and when are we likely to have one for coronavirus?</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                        </div>
                        <!---------row-end---------->
                     </div>
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-1.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What can I do under the new rules?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>02 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 21 Comments</li>
                              </ul>
                              <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths globally...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-2.jpg" class="img-fluid" alt="img" />
                              <div class="overlay ">
                                 <a href="assets/image/resources/blog-1-2.jpg" data-fancybox="gallery " data-caption=" ">
                                 <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What you need to know about C19 and pregnancy</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>31 Mar 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 39 Comments</li>
                              </ul>
                              <p> Until now, doctors have been reassuring pregnant women that they are no more at risk from COVID-19 than anyone else.</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-3.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Are you washing your hands properly?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 42 Comments</li>
                              </ul>
                              <p> Most of us know how important it is to practise good hand hygiene. But just because you're washing your hands often...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <!---------row----------->
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-4.jpg" class="img-fluid" alt="img" />
                              <div class="overlay ">
                                 <a href="assets/image/resources/blog-1-4.jpg" data-fancybox="gallery " data-caption=" ">
                                 <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What is an underlying health condition? </a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>02 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 21 Comments</li>
                              </ul>
                              <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths globally...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-5.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">How to stay healthy while working at home</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>31 Mar 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 39 Comments</li>
                              </ul>
                              <p> Until now, doctors have been reassuring pregnant women that they are no more at risk from COVID-19 than anyone else.</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-6.jpg" class="img-fluid" alt="img" />
                              <div class="overlay ">
                                 <a href="assets/image/resources/blog-1-6.jpg" data-fancybox="gallery " data-caption=" ">
                                 <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What is shielding and who needs it?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 42 Comments</li>
                              </ul>
                              <p> Most of us know how important it is to practise good hand hygiene. But just because you're washing your hands often...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <!---------row----------->
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-7.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What to do if you need to see a GP or get medication?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>02 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 21 Comments</li>
                              </ul>
                              <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths globally...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-8.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Do you need to disinfect your home?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>31 Mar 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 39 Comments</li>
                              </ul>
                              <p> Until now, doctors have been reassuring pregnant women that they are no more at risk from COVID-19 than anyone else.</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <div class="col-lg-4">
                        <!---------blog_box----------->
                        <div class="blog_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-1-9.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">What is social distancing?</a></h2>
                              <ul>
                                 <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                 <li><span class="linearicons-bubbles"></span> 42 Comments</li>
                              </ul>
                              <p> Most of us know how important it is to practise good hand hygiene. But just because you're washing your hands often...</p>
                              <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!----------row----------->
                     <div class="col-lg-12">
                        <div class="pageination_box">
                           <ul class="pagination">
                              <li class="disabled"><a href="#"><small class="linearicons-arrow-left"></small> Previous Post</a></li>
                              <li class="active"><a href="#">1 </a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li class="disabled"><span>...</span></li>
                              <li><a href="#">7</a></li>
                              <li><a href="#">Next Post<small class="linearicons-arrow-right"></small></a> </li>
                           </ul>
                        </div>
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------blog_v1-end-------------->
            <!-----------apps--------------->
            <section class="apps type_one   pdt_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box">
                           <img src="assets/image/resources/apps-1-1.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="app_content">
                           <div class="heading  tp_one">
                              <h6>Need support? </h6>
                              <h1> Download theCov app now!</h1>
                              <p>Use our application to stay informated about news purposes, get updates,<br class="md_display_none"> tracking tipps and get assistance if you need any help!</p>
                           </div>
                           <div class="search_box tp_one">
                              <form>
                                 <div class="form_group">
                                    <input type="text" placeholder="Type here your question...">
                                    <button class="search_btn" type="submit">Subscribe</button>
                                 </div>
                              </form>
                           </div>
                           <div class="apps_link">
                              <ul>
                                 <li>
                                    <a href="#"><img src="assets/image/resources/apps-btn-1-1.png" class="img-fluid" alt="apps" /></a>
                                 </li>
                                 <li>
                                    <a href="#"><img src="assets/image/resources/apps-btn-1-2.png" class="img-fluid" alt="apps" /></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------apps-end-------------->
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

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:39:47 GMT -->
</html>