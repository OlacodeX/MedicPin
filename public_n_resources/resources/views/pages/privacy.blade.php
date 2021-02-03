<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="Medicpin">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Medicpin" />
      <meta property="og:url" content="index-2.html"/>
      <meta property="og:title" content="Electonic Health Records(EMR)">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="Secure cloud based storage for patients records.">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>	Terms and Conditions | Medicpin</title>
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
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->   
            <!-----------blog_detail--------------->
            <section class="blog_detail no_sidebar  pdb_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="featured_image">
                           <div class="image_box">
                              <img src="assets/image/resources/blog-single-1.jpg" class="img-fluid" alt="img" />
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-2 col-md-12">
                        <!---------enpty_column----------->
                     </div>
                     <div class="col-lg-8 col-md-12">
                        <!---------col----------->
                        <div class="blog_detail_content">
                           <!-----blog_upper_box------->
                           <div class="blog_detail_upper_box">
                              <h1>   Privacy Policy for Medicpin</h1>
                              <ul class="bread_crumb text-center">
                                 <li class="bread_crumb-item"><a href="#">   <i class="linearicons-home4 home_icon"></i> </a></li>
                                 <li class="bread_crumb-item"><a href="#">Policy</a></li>
                                 <li class="bread_crumb-item"><a href="#">Privacy Policy</li>
                                 <li class="bread_crumb-item active">  Medicpin Privacy Policy </li>
                              </ul>
                             
                           </div>
                           <!-----blog_upper_box-end------>
                           <!-----blog_lower_box------->
                           <div class="blog_detail_lower_box">
                              
							 <p><b>Privacy Policy of Medicpin.com</b></p>
<p><b>At Medicpin.com we are committed to safeguarding and preserving the privacy of our visitors. This Website Privacy Policy has been provided by a legal resource and reviewed and approved by their solicitors.</p>
<p><b>This Privacy Policy explains what happens to any personal data that you provide to us, or that we collect from you whilst you visit our site. We do update this Policy from time to time so please do review this Policy regularly.</p>
<p><b>Information We Collect</b></p>
<p><b>In running and maintaining our website we may collect and process the following data about you: </b></p>
<p>
<ul>
<li>Information about your use of our site including details of your Patient Medical Records, pages viewed and the resources that you access. Such information includes traffic data, location data and other communication data.</li>
<li>Information provided voluntarily by you like name, e-mail address, mailing address, phone number, medical history etc.</li>
<li>Information that you provide when you communicate with us by any means.</li>
</ul>
</p>
<p><b>Use of Cookies</b></p>
<p>Cookies provide information regarding the computer used by a visitor. We may use cookies where appropriate to gather information about your computer fin order to assist us in improving our website.</p>
<p>We may gather information about your general internet use by using the cookie. Where used, these cookies are downloaded to your computer and stored on the computer's hard drive. Such information will not identify you personally. It is statistical data. This statistical data does not identify any personal details whatsoever.</p>
<p>You can adjust the settings on your computer to decline any cookies if you wish. This can easily be done by activating the reject cookies setting on your computer.</p>

<p><b>Use of your Information</b></p>
<p>The information that we collect from you may be used in one of the following ways:</p>	
<ul>
<li>To personalize your experience - Your information helps us to better respond to your individual needs.</li>
<li>To improve customer service - Your information helps us to more effectively respond to your customer service requests and support needs.</li>
<li>To process transactions - Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the service requested.</li>
<li>To send periodic emails - The email address you provide may be used to send you information, respond to inquiries, and/or other requests or questions.</li>
</ul>
<p><b>Securing your Information</b></p>
<p>We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information. We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Database to be only accessed by those authorized with special access rights to our systems, and are required to keep the information confidential. After a transaction, your private information (credit cards, social security numbers, financials, etc.) will not be stored on our servers.</p>
<p>Unfortunately the sending of information via the internet is not totally secure and on occasion such information can be intercepted. We cannot guarantee the security of data that you choose to send us electronically, sending such information is entirely at your own risk.</p>
<p>Disclosing your Information</p>
<p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.</p>
<p>We may release your information in the circumstances detailed below.</p>
<ul>
<li>In the event that we sell any or all of our business to the buyer.</li>
<li>Where we are legally required by law to disclose your personal information.</li>
<li>To further fraud protection and reduce the risk of fraud.</li></ul>

<p><b>Third party links</b></p>
<p>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. Where we provide a link it does not mean that we endorse or approve that site's policy towards visitor privacy. You should review their privacy policy before sending them any personal data.</p>
<p><b>Access to Information</b></p>
<p>In accordance with the Data Protection Act you have the right to access any information that we hold relating to you. Please note that we reserve the right to charge a fee to cover costs incurred by us in providing you with the information.</b>

</p><b>Children Online Privacy Protection Act Compliance</b></p>
<p><b>We are in compliance with the requirements of COPPA (Childrens Online Privacy Protection Act), we do not collect any information from anyone under 13 years of age. Our website, products and services are all directed to people who are at least 13 years old or older.</b></p>
<p><b>Online Privacy Policy Only</b></p>
<p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
<p><b>Your Consent</b></p>
<p>By using our site, you consent to our online privacy policy.</p>
<p><b>Changes to our Privacy Policy</b></p>
<p>If we decide to change our privacy policy, we will post those changes on this page, and/or send an email notifying you of any changes.</p>


                              <!-----blog_lower_box-end------>
                           </div>

                      </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-2 col-md-12">
                        <!---------enpty_column----------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------blog_detail-end-------------->  
            <!--------comments-------->
            
            <!--------comments-------->
            <!-----------blog--------------->
           
            <!-----------blog-end-------------->
            <!-----------FEELING UNWELL?--------------->
            
            <!-----------unwell-end-------------->
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

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:40:12 GMT -->
</html>