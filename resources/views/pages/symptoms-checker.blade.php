<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/symptoms-checker.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:39:31 GMT -->
<head>
      <meta charset="utf-8">
      <meta name="title" content="The Cov">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="The Cov" />
      <meta property="og:url" content="index-2.html"/>
      <meta property="og:title" content="The Cov is html 5 Template">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="The Cov is html 5 Template Developed with By Steelthemes For Medical">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Symptom Checker | The Cov | Responsive HTML 5 Template</title>
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
         <div class="preloader">
            <div class="preloader_box">
               <div class="loader">
                  <img src="assets/image/preloader.png" class="img-fluid" alt="img">
                  <p>please Wait...</p>
               </div>
            </div>
         </div>
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
                           <h6>You are not feeling well? </h6>
                           <h1> COVID-19 Symptom Checker</h1>
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item"><a href="#">Prevention</a></li>
                              <li class="bread_crumb-item active"> Symptom Checker</li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->
            <!-----------symptoms-checker--------------->
            <section class="symptoms_checker  pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="contnet_box">
                           <div class="title text-center">
                              <h1>Fill the simple form below</h1>
                              <p> Enter more symptoms for more accurate results, starting with your most severe<br class="md_display_none"> symptom. Look through a list of common symptoms.</p>
                           </div>
                           <div class="alert" role="alert">
                              <span class="linearicons-warning"></span> The symptom checker results show a list of possible conditions, not an actual diagnosis. Consult your doctor if you are concerned.
                           </div>
                           <div class="symptoms_checker_form type_one">
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group first_box">
                                          <div class="input-group-prepend">
                                             <a class="quicklinks" href="#">coughs <span class="linearicons-cross"></span></a>
                                             <a class="quicklinks" href="#">fever <span class="linearicons-cross"></span></a>
                                             <a class="quicklinks" href="#">sore throat <span class="linearicons-cross"></span></a>
                                             <a class="quicklinks" href="#">headache <span class="linearicons-cross"></span></a>
                                          </div>
                                          <input type="text" name="search" class="search" placeholder="Start typing your symptoms..." />
                                          <a href="#" class="clearsymptoms">Clear all symptoms</a>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="form-group clearfix second_group">
                                          <h2>Gender</h2>
                                          <div class="mg_top check_box">
                                             <input name="checkbox" type="checkbox" id="test7" required="required">
                                             <label for="test7">Male</label>
                                          </div>
                                          <div class="mg_top check_box">
                                             <input name="checkbox" type="checkbox" id="test1" required="required">
                                             <label for="test1">Female</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="form-group third_box">
                                          <h2>Age range</h2>
                                          <select name="age" id="age">
                                             <option selected="selected">30-38 years (adult)</option>
                                             <option>3</option>
                                             <option>4</option>
                                             <option>5</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="form-group">
                                          <h2>Select Region</h2>
                                          <select name="location" id="location">
                                             <option selected="selected">Germany</option>
                                             <option>3</option>
                                             <option>4</option>
                                             <option>5</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="form-group">
                                          <button class="sumptoms_submit" type="button">Submit symptoms</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="text_box">
                                    <h2>How to use it?</h2>
                                    <small>Enter symptoms in your own words or pick from the drop-down list:</small>
                                    <ul>
                                       <li>
                                          Medical terms are best but if you don’t know them, just enter your symptoms in normal, everyday language. 
                                       </li>
                                       <li>
                                          Enter each symptom separately or put them all on one line but separated by commas. 
                                       </li>
                                       <li>
                                          Enter the meaning of abnormal test results in words rather than numbers: for example, ‘high blood pressure’ rather than ‘BP 160/100’ 
                                       </li>
                                      
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="text_box">
                                    <h2>Instruction</h2>
                                    <p>
                                       If you’re feeling under the weather but aren’t sure what it could be, an online symptom checker can help you identify whether you need to seek immediate medical attention.
                                    </p>
                                    <p> Online symptom checkers are calculators that ask users to input details about their signs and symptoms of sickness, along with their gender, age and location. Using computerised algorithms, the self diagnosis
                                       tool will then give a range of conditions that might fit the problems a user is experiencing. They can also advice someone whether to seek advice from a healthcare professional and the level of urgency in
                                       which to do so.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="text_box">
                              <h2>How do I know if I’m sick?</h2>
                              <p>Using an online symptom checker is simple. For instance, you might be a 45 year old woman from the UK who is currently experiencing headache, a fever and a sore throat. Inputting this information into the symptom checker
                                 will give you some likely ‘common’ diagnoses. These include: throat, tonsillitis, sinusitis and flu.
                              </p>
                              <p> But the self-diagnosis calculator will also give a list of rarer but more serious diagnoses in a tab called ‘red flags’. Here you’ll find links to our patient information leaflets about much less common conditions,
                                 such as temporal arteritis, meningitis and toxic shock syndrome. If, after reading the information, you think one of these serious conditions could apply to you, you should seek medical advice immediately.
                              </p>
                           </div>
                           <div class="text_box">
                              <h2>What’s the difference between a sign and a symptom? </h2>
                              <p>‘Sign’ and ‘symptom’ are often used interchangeably, but if we’re going to be pedantic, they do actually mean different things.</p>
                              <p>If you’re feeling ill it might not be immediately obvious to somebody looking at you that you’re sick. For instance, if you’re experiencing pain, fatigue or dizziness, only you know what that feels like. These are symptoms
                                 - which can only be described by the person experiencing them.
                              </p>
                              <p> Signs, on the other hand, can be observed by an outsider too. For example, indicators to other people that you’re unwell, such as: sweating, sneezing or looking pale. Or, things that can be measured, such as a high
                                 blood pressure reading or a fever determined with a thermometer, count as signs.
                              </p>
                           </div>
                           <div class="symptoms_result_box">
                              <div class="upper_box">
                                 <div class="row">
                                    <div class="col-lg-3">
                                       <div class="result_heading">
                                          <h2>Results</h2>
                                          <p>See the result below</p>
                                       </div>
                                    </div>
                                    <div class="col-lg-9">
                                       <div class="patient_details">
                                          <h2>Your details</h2>
                                          <ul>
                                             <li> Symptoms: <span>fever, sore throat, headache</span></li>
                                             <li>Gender: <span>Male</span> </li>
                                             <li> Age range:<span> 30-39 yrs</span> </li>
                                             <li> Region:<span> Germany</span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="lower_box">
                                 <div class="row">
                                    <div class="col-lg-3">
                                       <div class="percentage">
                                          <h1>Compromised:</h1>
                                          <div class="progress mx-auto" data-value='47'>
                                             <span class="progress-left">
                                             <span class="progress-bar"></span>
                                             </span>
                                             <span class="progress-right">
                                             <span class="progress-bar"></span>
                                             </span>
                                             <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                <div class="h2 font-weight-bold">47%</div>
                                             </div>
                                          </div>
                                          <div class="result_final">
                                             <p>Estimable state:</p>
                                             <h6> Good</h6>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-9">
                                       <div class="patient_result_description">
                                          <div class="text">
                                             <h2>Possible diagnoses</h2>
                                             <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip.
                                             </p>
                                          </div>
                                          <div class="text">
                                             <h2> Description</h2>
                                             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                             </p>
                                          </div>
                                          <div class="text">
                                             <h2> Suggestion</h2>
                                             <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                                esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                                             </p>
                                          </div>
                                          <a href="#" class="theme_btn tp_two">Make another check</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text_box">
                              <h2> How safe and accurate are symptom checkers?</h2>
                              <p> Most doctors agree that online symptom checkers are can encourage people with life-threatening symptoms to seek urgent attention, potentially saving lives. They’re also useful for reassuring patients who may have sought
                                 urgent care when they didn’t need to.
                              </p>
                              <p> However, one study suggested that online symptom checkers tend to be over-cautious, which could lead to an increase in unnecessary appointments, rather than a reduction. Another piece of research from the United States
                                 found that doctors are twice as likely to make a correct diagnosis as online symptom checkers.
                              </p>
                              <p> While these self diagnosis tools can certainly be useful for determining whether a trip to hospital is necessary, they can’t match the expertise of an experienced health professional.</p>
                           </div>
                           <div class="alert" role="alert">
                              <span class="linearicons-warning"></span>
                              <div class="text">
                                 <h2>Disclaimer</h2>
                                 <p>This symptom checker is provided by Isabel Healthcare Limited. Isabel Symptom Checker ("Isabel") and any content accessed through Isabel is for informational purposes only, and is not intended to constitute professional
                                    medical advice, diagnosis or treatment. EMIS shall be in no way responsible for your use of Isabel, or any information that you obtain from Isabel. You acknowledge that when using Isabel you do so at your own
                                    choice and in agreement with this disclaimer. Do not ignore or delay obtaining professional medical advice because of information accessed through Isabel. Seek immediate medical assistance or call your doctor
                                    for all medical emergencies. By using Isabel you agree to the terms and conditions.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------symptoms-checker-end-------------->
            <!-----------newsletter--------------->
            <section class="newsletter type_one pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="heading white  tp_one">
                           <h1>Subscribe our newsletter </h1>
                           <p> Join our subscribers list to get latest news and updates about COVID-19<br class="md_display_none"> delivered directly in your inbox.</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="subscribe_box tp_one">
                           <form>
                              <div class="form_group">
                                 <input type="text" placeholder="Type here your question...">
                                 <button class="search_btn" type="submit">Subscribe</button>
                              </div>
                              <div class="form_group mg_top check_box">
                                 <input name="checkbox" type="checkbox" id="test3" required="required">
                                 <label for="test3">I accept the <a href="#">Privacy Policy.</a></label>
                              </div>
                           </form>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------newsletter-end-------------->
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

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/symptoms-checker.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:39:32 GMT -->
</html>