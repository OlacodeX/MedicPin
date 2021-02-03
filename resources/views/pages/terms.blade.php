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
                              <h1>   Terms and Conditions of Use of Medicpin.com</h1>
                              <ul class="bread_crumb text-center">
                                 <li class="bread_crumb-item"><a href="#">   <i class="linearicons-home4 home_icon"></i> </a></li>
                                 <li class="bread_crumb-item"><a href="#">Terms of Use</a></li>
                                 <li class="bread_crumb-item"><a href="#">Terms and Conditions</li>
                                 <li class="bread_crumb-item active">  Terms and Conditions of Use of Medicpin.com</li>
                              </ul>
                             
                           </div>
                           <!-----blog_upper_box-end------>
                           <!-----blog_lower_box------->
                           <div class="blog_detail_lower_box">
                              
							 <p><b> Please read the Terms and Conditions of use carefully before using this site.</b></p>
                              <p>This site is to use by our visitors for now. And by using this site, you the user, are agreeing to comply with and be bound by the following terms of use. After reviewing the following terms and conditions thoroughly, by using our site you agree to any of the terms and conditions.</p>
                               </p>Medicpin.com provides a personalized subscription service that allows our members to access to medical data over the Internet to certain Internet-connected computers and mobile other devices through compatible mediums.</p>
                               <p><b>Acceptance of our Terms</p></b>
                                <p>By visiting the website Medicpin.com, viewing, accessing, or otherwise using any of the services or information created, collected, compiled, or submitted to Medicpin.com, you agree to be bound by the following Terms and Conditions of Service. If you do not want to be bound by our Terms, your only option is not to visit, view, or otherwise use the services of Medicpin.com. You understand, agree, and acknowledge that these Terms constitute a legally binding agreement between you and Medicpin.com and that your use of Medicpin.com shall indicate your conclusive acceptance of this agreement.</p>
                                <p><b>Provision of Services</b></p>
                                 <p>You agree and acknowledge that Medicpin.com is entitled to modify, improve or discontinue any of its services at its sole discretion and without notice to you even if it may result in you being prevented from accessing any information contained in it. Furthermore, you agree and acknowledge that Medicpin.com is entitled to provide services to you through subsidiaries or affiliated entities.</p>
								<p><b>Proprietary Rights</b></p>
                               <p>You acknowledge and agree that Medicpin.com may contain proprietary and confidential information including trademarks, service marks, and patents protected by intellectual property laws and international intellectual property treaties. Medicpin.com authorizes you to view and make a single copy of portions of its content for offline, personal, and non-commercial use. Our content may not be sold, reproduced, or distributed without our written permission. Any third-party trademarks, service marks, and logos are the property of their respective owners. Any further rights not specifically granted herein are reserved.</p>
								<p><b>Submitted Content</b></p>
								<p>When you submit content to Medicpin.com, you simultaneously grant Medicpin.com an irrevocable, worldwide, royalty license to publish, display, modify, distribute and syndicate your content worldwide. You confirm and warrant that you have the required authority to grant the above license to Medicpin.com.</p>
								<p><b>Termination of Agreement</b></p>
								<p>The Terms of this agreement will continue to apply in perpetuity until terminated by either party without notice at any time for any reason. Terms that are to continue in perpetuity shall be unaffected by the termination of this agreement.</p>
								<p><b>Disclaimer of Warranties</b></p>
								<p>You understand and agree that your use of Medicpin.com is entirely at your own risk and that our services are provided "As Is" and "As Available". Medicpin.com does not make any express or implied warranties, endorsements or representations whatsoever as to the operation of the Medicpin.com website, information, content, materials, or products. This shall include, but not be limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement, and warranties that access to or use of the service will be uninterrupted or error-free or that defects in the service will be corrected.</p>
								<p><b>Limitation of Liability</b></p>
                                <p>You understand and agree that Medicpin.com and any of its subsidiaries or affiliates shall in no event be liable for any direct, indirect, incidental, consequential, or exemplary damages. This shall include, but not be limited to damages for loss of profits, business interruption, business reputation or goodwill, loss of programs or information or other intangible loss arising out of the use of or the inability to use the service, or information, or any permanent or temporary cessation of such service or access to information, or the deletion or corruption of any content or information, or the failure to store any content or information. The above limitation shall apply whether or not Medicpin.com has been advised of or should have been aware of the possibility of such damages. In jurisdictions where the exclusion or limitation of liability for consequential or incidental damages is not allowed, the liability of Medicpin.com is limited to the greatest extent permitted by law.</p>
                                <p><b>External Content</b></p>
                                <p>Medicpin.com may include hyperlinks to third-party content, advertising or websites. You acknowledge and agree that Medicpin.com is not responsible for and does not endorse any advertising, products, or resource available from such resources or websites.</p>
								<p><b>Jurisdiction</b></p>
								<p>You expressly understand and agree to submit to the personal and exclusive jurisdiction of the courts of the country, state, province or territory determined solely by Medicpin.com to resolve any legal matter arising from this agreement or related to your use of Medicpin.com. If the court of law having jurisdiction, rules that any provision of the agreement is invalid, then that provision will be removed from the Terms and the remaining Terms will continue to be valid.</p>
								<p><b>Entire Agreement<b></p>
							    <p>You understand and agree that the above Terms constitute the entire general agreement between you and Medicpin.com. You may be subject to additional Terms and conditions when you use, purchase or access other services, affiliate services or third-party content or material.</p>
								<p><b>Membership<b></p>
								<p>Your Medicpin.com membership will continue until terminated. To use the Medicpin.com service you must have Internet access and provide us with one or more Payment Methods. "Payment Method" means a current, valid, accepted method of payment, as may be updated from time to time, and which may include payment through your account with a third party. Additional user's membership starts from the date, the account gets created and is irrespective of activation of the account by the additional users. Unless you cancel your membership before your billing date, you authorize us to charge the membership fee for the next billing cycle to your Payment Method (see "Cancellation" below).</p>
								<p>We may offer a number of membership plans, including special promotional plans or memberships offered by third parties in conjunction with the provision of their own products and services. We are not responsible for the products and services provided by such third parties. Some membership plans may have differing conditions and limitations, which will be disclosed at your sign-up or in other communications made available to you. You can find specific details regarding your Medicpin.com membership by visiting our website and clicking on the "Settings" link available at the top of the pages of the Medicpin.com website under your profile name.</p>
								<p><b>Free Trials<b></p>
								<p>Your Medicpin.com membership may start with a free trial. The duration of the free trial period of your membership will be specified during sign-up and is intended to allow new members and certain former members to try the service. The start and end of trail for all additional user is the same as the primary account.
                                Free trial eligibility is determined by Medicpin.com at its sole discretion and we may limit eligibility or duration to prevent free trial abuse. We reserve the right to revoke the free trial and put your account on hold in the event that we determine that you are not eligible. We may use information such as device ID, method of payment or an account email address used with an existing or recent Medicpin.com membership to determine eligibility. For combinations with other offers, restrictions may apply
                                We will charge the membership fee for the next billing cycle to your Payment Method at the end of the free trial period unless you cancel your membership prior to the end of the free trial period. The end data of the trial is listed on the top navigation bar.</p>
								<p><b>Billing Cycle<b></p>
								<p>The membership fee for the Medicpin.com service and any other charges you may incur in connection with your use of the service, such as taxes and possible transaction fees, will be charged to your Payment Method on the specific billing date indicated on your "Settings" page "Subscriptions" Subsection. The length of your billing cycle will depend on the type of subscription that you choose while in the free trail. In some cases, your payment date may change, for example if your Payment Method has not successfully settled or if your paid membership began on a day not contained in a given month. We may authorize your Payment Method in anticipation of membership or service-related charges through various methods, including authorizing it for up to approximately one month of service as soon as you register. In some instances, your available balance or credit limit may be reduced to reflect the authorization during your free trial period.</p>
							    <p><b>Payment Methods<b></p>
								<p>To use the Medicpin.com service you must provide one or more Payment Methods. You authorize us to charge any Payment Method associated to your account in case your primary Payment Method is declined or no longer available to us for payment of your subscription fee. You remain responsible for any uncollected amounts. If a payment is not successfully settled, due to expiration, insufficient funds, or otherwise, and you do not cancel your account, we may suspend your access to the service until we have successfully charged a valid Payment Method. For some Payment Methods, the issuer may charge you certain fees, such as foreign transaction fees or other fees relating to the processing of your Payment Method. Local tax charges may vary depending on the Payment Method used. Check with your Payment Method service provider for details.</p>
								<p><b>Cancellation</b></p>
								<p>You can cancel your Medicpin.com membership at any time, and you will continue to have access to the Medicpin.com service through the end of your billing period. To the extent permitted by the applicable law, payments are non-refundable, and we do not provide refunds or credits for any partial membership periods or unused Medicpin.com content. If you signed up for Medicpin.com using your account with a third party as a Payment Method and wish to cancel your Medicpin.com membership, you may need to do so through such third party.</p>
								<p><b>Changes to the Price and Subscription Plans</b></p>
								<p>We may change our subscription plans and the price of our service from time to time; however, any price changes or changes to your subscription plans will apply no earlier than 30 days following notice to you.</p>
								<p><b>Third-party integration</b></p>
								<p>We are not responsible for the products and services provided by such third parties. Third party integration are governed by the third-party partners and they may exercise their own terms and privacy for any integration that they provide or host through Medicpin.com. We suggest you read the third party terms and privacy carefully.</p>
								<p></b>Changes to the Terms</b></p>
								<p>Medicpin.com reserves the right to modify these Terms from time to time at our sole discretion and without any notice. Changes to our Terms become effective on the date they are posted and your continued use of Medicpin.com after any changes to Terms will signify your agreement to be bound by them.</p>

                              <!-----blog_lower_box-end------>
                           </div>
                           <div class="more_content">
                              <div class="row">
                                 <div class="col-lg-8">
                                    <ul class="tags">
                                       <li><span class="linearicons-tags"></span></li>
                                       <li class="clearfix"><a href="#">vaccine</a></li>
                                       <li class="clearfix"><a href="#">medicine</a></li>
                                       <li class="clearfix"><a href="#">coronavirus</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-lg-4">
                                    <ul class="media">
                                       <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                       <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                       <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                       <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                       <li><a href="#"><span class="fa fa-envelope-open"></span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="more_post_slide">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="previous_post post_link">
                                       <a href="#" class="links"><span class="linearicons-arrow-left"></span> Previous Post </a>
                                       <h2><a href="#">What can I do under the new rules?</a></h2>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="next_post post_link text-right">
                                       <a href="#" class="links"> Next Post <span class="linearicons-arrow-right"></span></a>
                                       <h2><a href="#">Are you washing your hands properly?</a></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="experts_blog">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="owl-carousel one_items">
                                       <div class="expert_box type_two">
                                          <div class="image_box">
                                             <img src="assets/image/resources/expert-blog-page.png" class="img-fluid" alt="img" />
                                          </div>
                                          <div class="content_box">
                                             <h2><a href="#">Robert Watson</a></h2>
                                             <small> Pharmaceutical expert</small>
                                             <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ullam corporis suscipit laboriosam, nisi ut aliquid exam.</p>
                                             <a href="#" class="read_more tp_one"> View all Experts <span class="linearicons-arrow-right"></span></a>   
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
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
            <section class="comments pdt_100 pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-2 col-md-12">
                        <!---------enpty_column----------->
                     </div>
                     <div class="col-lg-8 col-md-12">
                        <!---------col----------->
                        <div class="heading tp_one">
                           <h1>5 Comments</h1>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-2 col-md-12">
                        <!---------enpty_column----------->
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
                        <div class="commnent_box one">
                           <!---------commnent_box----------->
                           <div class="image">
                              <img src="assets/image/resources/comment-1.png" class="img-fluid" alt="authour" />
                           </div>
                           <div class="content">
                              <div class="upper_box">
                                 <h2>Rebecca Sterling</h2>
                                 <h6 class="time"><span class="linearicons-clock"></span>32 min ago</h6>
                              </div>
                              <p> Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                              <a href="#" class="read_more tp_one"> Replay<span class="linearicons-arrow-right"></span></a>
                           </div>
                           <!---------commnent_box----------->
                        </div>
                        <div class="commnent_box two">
                           <!---------commnent_box----------->
                           <div class="image">
                              <img src="assets/image/resources/comment-2.png" class="img-fluid" alt="authour" />
                           </div>
                           <div class="content">
                              <div class="upper_box">
                                 <h2>Robert Kane</h2>
                                 <h6 class="time"><span class="linearicons-clock"></span>32 min ago</h6>
                              </div>
                              <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
                              <a href="#" class="read_more tp_one"> Replay<span class="linearicons-arrow-right"></span></a>
                           </div>
                           <!---------commnent_box----------->
                        </div>
                        <div class="commnent_box three">
                           <!---------commnent_box----------->
                           <div class="image">
                              <img src="assets/image/resources/comment-3.png" class="img-fluid" alt="authour" />
                           </div>
                           <div class="content">
                              <div class="upper_box">
                                 <h2>Liu Jackson</h2>
                                 <h6 class="time"><span class="linearicons-clock"></span>32 min ago</h6>
                              </div>
                              <p>  Similique sunt in culpa qui officia deserunt mollitia animi...</p>
                              <a href="#" class="read_more tp_one"> Replay<span class="linearicons-arrow-right"></span></a>
                           </div>
                           <!---------commnent_box----------->
                        </div>
                        <div class="commnent_box one">
                           <!---------commnent_box----------->
                           <div class="image">
                              <img src="assets/image/resources/comment-4.png" class="img-fluid" alt="authour" />
                           </div>
                           <div class="content">
                              <div class="upper_box">
                                 <h2>Ian Gorkovszkij </h2>
                                 <h6 class="time"><span class="linearicons-clock"></span>32 min ago</h6>
                              </div>
                              <p> Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
                              <a href="#" class="read_more tp_one"> Replay<span class="linearicons-arrow-right"></span></a>
                           </div>
                           <!---------commnent_box----------->
                        </div>
                        <div class="commnent_box two">
                           <!---------commnent_box----------->
                           <div class="image">
                              <img src="assets/image/resources/comment-5.png" class="img-fluid" alt="authour" />
                           </div>
                           <div class="content">
                              <div class="upper_box">
                                 <h2>Naomi Hill</h2>
                                 <h6 class="time"><span class="linearicons-clock"></span>32 min ago</h6>
                              </div>
                              <p>      Nam libero tempore, cum soluta nobis est eligendi optio...</p>
                              <a href="#" class="read_more tp_one"> Replay<span class="linearicons-arrow-right"></span></a>
                           </div>
                           <!---------commnent_box----------->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-2 col-md-12">
                        <!---------enpty_column----------->
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
                        <div class="replay_form">
                           <div class="heading tp_one">
                              <h1>Leave your reply</h1>
                           </div>
                           <form>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input type="text" name="name" placeholder="Your name" />
                                       <small class="linearicons-user"></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input type="text" name="skype" placeholder="Your Skype ID" />
                                       <small class="linearicons-envelope-open"></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="text" name="subject" placeholder="Subject" />
                                       <small class="linearicons-bubbles"></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group textarea">
                                       <textarea name="message" placeholder="Additional message..." rows="4"></textarea>
                                       <small class="linearicons-pencil4"></small>
                                    </div>
                                 </div>
                                 <div class="col-lg-10">
                                    <div class="form-group mg_top accept check_box">
                                       <input name="checkbox" type="checkbox" id="test1" required="required">
                                       <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-2">
                                    <div class="form-group">
                                       <button class="submit_btn" type="submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
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
            <!--------comments-------->
            <!-----------blog--------------->
            <section class="blog type_one  pdt_100  pdb_50">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6>Recent from Updates</h6>
                           <h1>Latest Blog Posts</h1>
                           <p>Find out updates you need to know about preventing, isolating and treating <br class="md_display_none">coronavirus and COVID-19.</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 padding_zero">
                        <!---------col----------->
                        <div class="owl-carousel four_items">
                           <!---------blog_box----------->
                           <div class="blog_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/blog-1-1.jpg" class="img-fluid" alt="img" />
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">What can I do under the new rules?</a></h2>
                                 <ul>
                                    <li><span class="linearicons-calendar-full"></span>02 Apr 2020</li>
                                    <li><span class="linearicons-bubbles"></span> 21</li>
                                 </ul>
                                 <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths globally...</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                           <!---------blog_box----------->
                           <div class="blog_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/blog-1-2.jpg" class="img-fluid" alt="img" />
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">What you need to know about C19 and pregnancy</a></h2>
                                 <ul>
                                    <li><span class="linearicons-calendar-full"></span>31 Mar 2020</li>
                                    <li><span class="linearicons-bubbles"></span> 39</li>
                                 </ul>
                                 <p> Until now, doctors have been reassuring pregnant women that they are no more at risk from COVID-19 than anyone else.</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                           <!---------blog_box----------->
                           <div class="blog_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/blog-1-3.jpg" class="img-fluid" alt="img" />
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Are you washing your hands properly?</a></h2>
                                 <ul>
                                    <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                    <li><span class="linearicons-bubbles"></span> 42 </li>
                                 </ul>
                                 <p> Most of us know how important it is to practise good hand hygiene. But just because you're washing your hands often...</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------blog-end-------------->
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

<!-- Mirrored from demo9.steelthemes.com/html/the-cov-v-1/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Aug 2020 18:40:12 GMT -->
</html>