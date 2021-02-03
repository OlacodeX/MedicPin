<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="Medicpin>
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Medicpin" />
      <meta property="og:url" content="medicpin.com/about.html"/>
      <meta property="og:title" content="Medicpin">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="Medicpin is your trusted electronic health records cloud based storage">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title> Medicpin | Safe, Secure Healtg Records</title>
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
         <!--<div class="preloader">
            <!-- <div class="preloader_box">
               <div class="loader">
                  <img src="assets/image/preloader.png" class="img-fluid" alt="img">
                  <p>please Wait...</p>
               </div>
            </div> -->
         <!--</div>
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
            <section class="page_title  pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 text-center">
                        <!---------col----------->
                        <div class="content_box">
                           <h6>Safe, Secure and Trusted EMR </h6>
                           <h1>Health records on the go, from anywhere</h1>
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item"><a href="#">About</a></li>
                              <li class="bread_crumb-item active"> About Medicpin</li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->
            <!-----------about--------------->
            <section class="about type_two pdt_100 pdb_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box">
                           <img src="assets/image/resources/about-page-1-1.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h1> Innovation to help transition health records to cloud based </h1>
                           </div>
                           <p> 
						   Medicpin is an Electronic Medical Records System (EMRs) that provides patients with quick access to a more coordinated and efficient patient-centered health system. In the typical Nigerian hospital setting, it takes a long time from when a patient arrives the hospital, till when the patient is actually attended to. But Medicpin helps to reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record, thereby saving time and energy.
						   </p>
                           <p> Our innovation offers the full spectrum of EHR services to help medical providers and organizations work efficiently. Everything from creating standards of medical records and helping you keep in touch with your patients on the cloud. We are always striving to bring our users the best features we can and a few have been listed below for you.</p></div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="empty_space"></div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>How we are responding to Coronavirus?</h6>
                              <h1> Saving lives takes center stage as we explore technology</h1>
                           </div>
						   <h2> COVID-19 puts new demands on e-health record systems</h2>
						   <p>The ongoing pandemic is putting healthcare systems under strain worldwide and forcing hospitals and other medical facilities to scramble to make sure data can be shared effectively. </p> 
                           <p class="last"> As healthcare providers face unprecedented challenges fighting the COVID-19 outbreak worldwide, electronic health record (EHR) companies like us are having to adapt to shifting requirements for patient care.  With a surge in demand for hospital capacity, we provide solutions to the challenges facing hospitals to quickly deploy EHR systems to alternative care locations. 
                           </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box">
                           <img src="assets/image/resources/protect-1-1.png" class="img-fluid" alt="img">
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------about-end-------------->
            <!-----------about--------------->
            <section class="about_covid_all type_one pdt_100 pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/icon-box-1-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Telehealth with EHRs</a></h2>
                              <p>There is also demand for new EHR functions to address patient needs, particularly around remote healthcare. Telehealth has become a key way doctors can continue to work with and treat patients from a distance, especially as more communities call on residents to stay home. 
                               “Our digital front door is open to help providers respond better to COVID-19, in terms of access, triage, and treatment.
                              </p>
                              <a href="#" class="read_more tp_one">  More About Telehealth/EMR <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/icon-box-1-2.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Interoperability </a></h2>
                              <p> As providers attempt to incorporate data from different sources, we provide solutions to challenges around EHR system interoperability. It is becoming super important that all EHR companies and platforms are able to share patient records in an increasingly fractured care delivery environment. We also help integrate all new peer delivery centers, employee wellness centers, virtual visits, with traditional EHRs?”.
				             </p>
                              <a href="#" class="read_more tp_one">  More About Interoperability <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="assets/image/resources/icon-box-1-3.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Continuous Innovation</a></h2>
                              <p>Healthcare providers and healthcare IT workers are under immense pressure in dealing with the ongoing pandemic, the demands to ramp up capabilities and introduce new capabilities is a catalyst for improving Medicpin EHR systems.
                              Seeing the rapid scale-up and a shift in models especially in the health sector brings to light valid business lessons demanding an innovative approach to drive the industry forward.</p>
                              <a href="#" class="read_more tp_one">  More About Continous Innovation <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------about-end-------------->
            <!-----------prevention--------------->
            <section class="prevention type_three pdt_100">
               <div class="map_bg"><img src="assets/image/resources/world-map-prevention-bg.png" class="img-fluid" alt="img" /></div>
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 col-sm-6">
                        <!---------col----------->
                        <div class="prevention_content">
                           <div class="heading tp_one">
                              <h1>Disease Control and Prevention</h1>
                           </div>
                           <p> Efforts to prevent the virus spreading include travel restrictions, quarantines, curfews, workplace hazard controls, event postponements and cancellations, and facility closures. These include the quarantine of Hubei, national
                              or regional quarantines elsewhere in the world, curfew measures in China and South Korea, various border closures or incoming passenger restrictions, screening at airports and train stations, and outgoing passenger
                              travel bans.
                           </p>
                           <p>The pandemic has led to severe global socioeconomic disruption, the postponement or cancellation of sporting, religious, and cultural events, and widespread fears of supply shortages which have spurred panic buying. Schools
                              and universities have closed either on a nationwide or local basis in more than <span>160 countries</span>, affecting more than <span>1.5 billion students. </span>Misinformation and conspiracy theories about the virus
                              have spread online and there have been incidents of xenophobia and racism against Chinese, and other East and Southeast Asian people. As the pandemic spreads and hotspots form around the globe, such as those in Europe
                              and the United States, discrimination against people from these hotspots has also occurred.
                           </p>
                           <div class="image_box">
                              <img src="assets/image/resources/prevention-three-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="theme_btn_outer">
                              <a href="#" class="theme_btn tp_one"><span class="linearicons-network"></span>   Mapping outbreaks</a>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------prevention-end-------------->
            <!-----------experts--------------->
            <section class="experts type_one pdt_100  pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6> Ask for advice and consult our doctors </h6>
                           <h1>Meet our Experts</h1>
                           <p>Connect with highly qualified and experienced frontline health care workers.
                             Are you experiencing any of the Covid19 Sympthoms and would like to clear your doubt?
                           </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-sm-12 padding_zero">
                        <!---------col----------->
                        <div class="owl-carousel three_items">
                           <!-------expert_box---------->
                           <div class="expert_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/expert-2-1.jpg" class="img-fluid" alt="experts" />
                              </div>
                              <div class="content_box">
                                 <div class="expert_details">
                                    <h2><a href="#">Sheldon Lee Cooper </a></h2>
                                    <p>Rehabilitation therapist</p>
                                 </div>
                                 <div class="expert_contact">
                                    <h6><span>Email: </span> <a href="#">sheldoncooper@thecov.net</a></h6>
                                    <h6><span>Skype ID:</span><a href="#"> thecovnet.cooper</a></h6>
                                    <a href="#" class="theme_btn tp_one"><span class="linearicons-telephone"></span>  +61 (8) 8234 3555</a>
                                 </div>
                                 <ul class="media">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!--------expert_box-wnd-------->
                           <!-------expert_box---------->
                           <div class="expert_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/expert-2-2.jpg" class="img-fluid" alt="experts" />
                              </div>
                              <div class="content_box">
                                 <div class="expert_details">
                                    <h2><a href="#">Kelly Stark</a></h2>
                                    <p> Epidemiological expert</p>
                                 </div>
                                 <div class="expert_contact">
                                    <h6><span>Email: </span> <a href="#"> kellystark@thecov.net</a></h6>
                                    <h6><span>Skype ID:</span><a href="#">   thecovnet.stark</a></h6>
                                    <a href="#" class="theme_btn tp_one"><span class="linearicons-telephone"></span>  +61 (8) 8234 3555</a>
                                 </div>
                                 <ul class="media">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!--------expert_box-wnd-------->
                           <!-------expert_box---------->
                           <div class="expert_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/expert-2-3.jpg" class="img-fluid" alt="experts" />
                              </div>
                              <div class="content_box">
                                 <div class="expert_details">
                                    <h2><a href="#">Deborah W. Burton  </a></h2>
                                    <p>Senior nurse</p>
                                 </div>
                                 <div class="expert_contact">
                                    <h6><span>Email: </span> <a href="#">deborahburton@cthecov.net </a></h6>
                                    <h6><span>Skype ID:</span><a href="#"> thecovnet.burton</a></h6>
                                    <a href="#" class="theme_btn tp_one"><span class="linearicons-telephone"></span>  +61 (8) 8234 3555</a>
                                 </div>
                                 <ul class="media">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!--------expert_box-wnd-------->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------experts-end-------------->
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
                        <a href="https://symptomchecker.isabelhealthcare.com/suggest_diagnoses_advanced/landing_page" class="theme_btn tp_one"><span class="linearicons-syringe"></span>Symptom Checker</a>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
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
            <!-- /.side-menu__block-inner -->
         </div>
      </div>
            <!-- /.side-menu__block-inner -->
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

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:39:10 GMT -->
</html>