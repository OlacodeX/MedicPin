<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="title" content="Medicpin">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Medicpin" />
      <meta property="og:url" content="medicpin.com"/>
      <meta property="og:title" content="Medicpin is an Electronic Health Records system">
      <meta property="og:image" content="assets/image/content-image.jpg">
      <meta property="og:description" content="A leading electonic health records system, built to aid emergency support for patients to instant access to medical information ">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Medicpin | Leading Electronic Record</title>
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
                           <style>
                              li.nav-item.nav_item.none{
                                 display: none;
                              }
 /*
 ===========================================================================
 media queries
 ===========================================================================
 */
 
 @media(max-width:1199px) {
	 li.nav-item.nav_item.none{
		display:inline-block;
	 }
 }
 
 @media(max-width:992px) {
	 li.nav-item.nav_item.none{
		display:inline-block;
	 }
 }
 
 @media(max-width:768px) {
	 li.nav-item.nav_item.none{
		display:inline-block;
	 }
 }
 
 @media(max-width:600px) {
	 li.nav-item.nav_item.none{
		display:inline-block;
	 }
 }
 
 @media(max-width:400px) {
	 li.nav-item.nav_item.none{
		display:inline-block;
	 }
 }
                           </style>
                           @guest
                           <li class="nav-item nav_item"><a class="theme_btn tp_two" href="{{ route('login') }}"><span class="linearicons-enter icon"></span>Access Health Records</a></li>
                           <li style="margin-left: 10px;"><a class="theme_btn tp_two" href="{{ route('register') }}"><span class="linearicons-toggle icon"></span>Sign Up</a></li>
                           
                           @else
                           <li class="nav-item nav_item none" >
                              
                              <a class="nav-link" style="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="linearicons-exit icon"></span>
                             Sign out
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form> 
                           
                           </a>
                        </li>
                           <li class="nav-item nav_item none" style="margin-left: 10px;"><a class="theme_btn tp_two" href="./dashboard"><span class="linearicons-files icon"></span>Dashboard</a></li>
                          
                           @endguest
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
            <!-------slider--section------>
            <section class="banner type_two" style="background:url(assets/image/main-slider/slider-2-1.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 d-flex  pr_0">
                        <div class="content_outer">
                           <div class="inner_box">
                              <h6 class="wow slideInDown" data-wow-delay="100ms" data-wow-duration="1500ms">Take your hospital digital in record time with Medicpin</h6>
                              <h1 class="wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">COVID-19 Symptom Checker</h1>
                              <p class="wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms"> Enter more symptoms for more accurate results, starting with your most severe symptom. Look through a list of common symptoms.</p>
                           </div>
                           <div class="symptoms_checker_form type_one wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                       <div class="form-group first_box">
                                          <div class="input-group-prepend">
                                             <a class="quicklinks" href="#">Coughs <span class="linearicons-cross"></span></a>
                                             <a class="quicklinks" href="#">Fever <span class="linearicons-cross"></span></a>
                                          </div>
                                          <input type="text" name="search" class="search" placeholder="Start typing your symptoms..." />
                                          <a href="#" class="clearsymptoms">Clear all symptoms</a>
                                       </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                       <div class="form-group clearfix second_group">
                                          <h2>Gender</h2>
                                          <div class="mg_top check_box">
                                             <input name="checkbox" type="checkbox" id="test2" required="required">
                                             <label for="test2">Male</label>
                                          </div>
                                          <div class="mg_top check_box">
                                             <input name="checkbox" type="checkbox" id="test1" required="required">
                                             <label for="test1">Female</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                       <div class="form-group third_box">
                                          <h2>Age range</h2>
                                          <select name="age" id="age">
                                             <option selected="selected">30-38 years (adult)</option>
                                             <option>50-65 years (aged)</option>
                                             <option>70-85 (old)</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group" >
                                          <h2>Select Region</h2>
                                          <select name="location" id="location">
                                             <option selected="selected">Nigeria</option>
                                             <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <button class="sumptoms_submit" type="button">Submit symptoms</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="image_box wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <img src="assets/image/main-slider/slider--graphic-2-1.png" class="img-fluid" alt="img" />
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------slider--section-end----->
            <!-----------counter--------------->
            <section class="counter type_two wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
               <div class="container">
                  <div class="counter_outer_box">
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
            <!-----------about--------------->
            <section class="about type_two pdt_100 pdb_100 wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>
Fast, Secure and Reliable..</h6>
                              <h1>Electronic Health Records on the go.. </h1>
                           </div>
                           <p> We are not about just being paperless, but built for the cloud. Our platform is to help simplify and improve health care delivery in Africa through technological innovations and ideas that enables effective storage and accessment of medical data. 
                           </p>
                           <p class="last"> Manage appointments, access medical records anytime, anywhere and lots more. We empower African health sector to effectively migrate from paper recors to cloud data management. </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box one">
                           <img src="assets/image/resources/about-2-1.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
					 
                  </div>
                  <div class="empty_space"></div>
				  
				  
				  
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box two">
                           <img src="assets/image/resources/about-2-2.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
					 

                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>Africa's Rising Health Innovation</h6>
                              <h1> What is Medicpin and how can our platform benefit you?</h1>
                           </div>
                           <p>Medicpin helps to reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record, thereby saving time and energy.
By adopting Medicpin, accurate and up-to-date information about a patient is available at any point of his/her continuum of care.
                           </p>
                           <a href="#" class="read_more tp_one">  Read more about  <span class="linearicons-arrow-right"></span></a>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------counter-end-------------->
            <!-----------protect--------------->
            <section class="protect type_two pdt_100  pdb_100 wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6> What you need to do</h6>
                           <h1>How to protect yourself?</h1>
                           <p> Our actions as individuals will go a long way in preventing, detecting and isolating potential cases of <br class="md_display_none">coronavirus and COVID-19</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="protect_box_left">
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="content_box">
                                 <h2><a href="#">Stay at home</a></h2>
                                 <p> Stay at home if you perceive the symptoms and consult your doctor on phone.</p>
                              </div>
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-1.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-check"></span>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="content_box">
                                 <h2><a href="#">Use mask </a></h2>
                                 <p> When you are around other people and before you enter a healthcare provider’s.</p>
                              </div>
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-2.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-check"></span>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="content_box">
                                 <h2><a href="#">Wash your hands</a></h2>
                                 <p>Clean your hands with alcohol or wash them with soap for at least 20 seconds.</p>
                              </div>
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-3.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-check"></span>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="content_box">
                                 <h2><a href="#">Drink often</a></h2>
                                 <p> Make sure you have plenty of frequent fluids.</p>
                              </div>
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-4.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-check"></span>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="content_image_box">
                           <img src="assets/image/resources/protect-2-1.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="protect_box_right">
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-5.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-times worng"></span>
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Social distance </a></h2>
                                 <p> Put 6 feet of distance between yourself and people who don’t live in your household.</p>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-6.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-times worng"></span>
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Avoid animals</a></h2>
                                 <p> It appears that COVID-19 can spread from people to animals in some situations.</p>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-7.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-times worng"></span>
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Don't touch your face</a></h2>
                                 <p>Ensure to keep your hands from touching any part of your face to avoid the spread of virus.</p>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                           <!--------protext-box-------->
                           <div class="protect_box type_two">
                              <div class="image_box">
                                 <img src="assets/image/resources/protect-box-2-8.png" class="img-fluid" alt="img" />
                                 <span class="fa fa-times worng"></span>
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Avoid handshaking</a></h2>
                                 <p> Make sure to avoid any form of physical contact, including hand shaking.</p>
                              </div>
                           </div>
                           <!--------protext-box-end------->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------protect-end-------------->
            <!-----------spreading--------------->
            <section class="spreading type_two  pdt_100  pdb_60">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6>Are you spreading Coronavirus? </h6>
                           <h1>Prevent person-to-person transmission of Covid19</h1>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Air by cough or sneeze   </a></h2>
                              <p>While in public places, sneeze in your elbow or within, while on nose mask to help save lives of others.</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-2.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Animal contact </a></h2>
                              <p>Research to ascertain the actual source of the disease is ongoing, physical contacts with animals should be reduced .</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-3.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Personal contact  </a></h2>
                              <p>Handshake, hug and other person-to-person activites should be avoided within this period to avoid virus transmission.</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two  wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-4.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#"> Contaminated objects </a></h2>
                              <p>Touching public facilities, i.e restuarant door handles, poles and chair metals should be avoided. </p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-5.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Droplets from infected persons </a></h2>
                              <p>Transmitted virus can remain on a surfaces, everyone is advised to wear face mask in the public.</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="spreading_box type_two  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/spreading-1-6.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Touching  infected surfaces</a></h2>
                              <p>Disinfect your hands with alcohol-based hand sanitizer and ensure to stay away from physical touch.</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------spreading-end-------------->
            <!-----------symptoms--------------->
            <section class="symptoms type_two pdt_100  pdb_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6> Symptoms of COVID-19</h6>
                           <h1>What are the typical symptoms?</h1>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_two  wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/symptoms-2-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">High fever</a></h2>
                              <p> Fever is key symptom, experts say. Don't fixate on number, but know it's really not fever until your temperature reaches at least 39°C.</p>
                           </div>
                        </div>
                        <!---------symptoms_box-end---------->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_two  wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/symptoms-2-2.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Cough </a></h2>
                              <p> Coughing is another key symptom, but it's not just any cough, said Schaffner. It should be a dry cough that you feel in your chest.</p>
                           </div>
                        </div>
                        <!---------symptoms_box-end---------->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_two  wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/symptoms-2-3.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Sore Throat</a></h2>
                              <p> You feel hot to touch on your chest or back It is a common sign and also may appear in 2-10 days if you affected.</p>
                           </div>
                        </div>
                        <!---------symptoms_box-end---------->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_two  wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/symptoms-2-4.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Headache </a></h2>
                              <p> Around 1 out of every 6 people who gets COVID-19 becomes seriously ill and develops difficulty breathing or shortness of breath. </p>
                           </div>
                        </div>
                        <!---------symptoms_box-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 text-center">
                        <a href="#" class="theme_btn tp_one"><span class="linearicons-man-woman"></span> See more Symptoms</a>
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------symptoms-end-------------->
            <!-----------handwash--------------->
            <section class="handwash type_two pdt_100  pdb_50">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="heading text-center tp_one">
                           <h6>Hand washing process</h6>
                           <h1> How to Wash Your Hands</h1>
                           <p> Are you washing your hands properly? Most of us know how important it is to practise good hand hygiene. <br class="md_display_none"> But just because you're washing your hands often, doesn't mean that you're washing them
                              well.
                           </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="dashed_bg_one"></div>
                     </div>
                     <!---------row----------->
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two  wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-1.png" class="img-fluid" alt="img" />
                              <small>1</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Apply soap on wet hands</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-2.png" class="img-fluid" alt="img" />
                              <small>2</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Rub palm to palm</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-3.png" class="img-fluid" alt="img" />
                              <small>3</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Focus on the back of hands</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-4.png" class="img-fluid" alt="img" />
                              <small>4</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Interface your fingers</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-5.png" class="img-fluid" alt="img" />
                              <small>5</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Clean thumbs</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-6.png" class="img-fluid" alt="img" />
                              <small>6</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Rub nails and fingertips</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-7.png" class="img-fluid" alt="img" />
                              <small>7</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Rinse your hands</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="handwash_box type_two wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="assets/image/resources/hand-wash-2-8.png" class="img-fluid" alt="img" />
                              <small>8</small>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Dry with paper towel</a></h2>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-12">
                        <div class="dashed_bg_two"></div>
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------handwash-end-------------->
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
                           <p>Connect with highly qualified and experienced frontline health care workers. <br class="md_display_none"> Are you experiencing any of the Covid19 Sympthoms and would like to clear your doubt?
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
                           <div class="expert_box type_one wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
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
                           <div class="expert_box type_one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
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
                           <div class="expert_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
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
            <!-----------symptoms-end-------------->
            <!-----------faq--------------->
           <section class="faq type_one faq_tabs pdt_100  pdb_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="heading tp_one">
                           <h6>Have questions? Find answers!</h6>
                           <h1>Frequently Asked Questions</h1>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="search_box tp_one">
                           <form>
                              <div class="form_group">
                                 <input type="text" placeholder="Type here your question..." />
                                 <button class="search_btn" type="submit">Ask now</button>
                              </div>
                           </form>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div id="accordion" class="accordion_box faq_tabs_btn wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <!-------accordin------>
                           <div class="card faqs_card_tpone">
                              <!-------card-start----->
                              <div class="card-header" id="headingOne">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    About Medicpin?
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                 <div class="card-body">
                                    <ul>
                                       <li class="f_tabs_btn" data-tab="#f_tab_1">Electronic Health Records?</li>
                                       <li class="f_tabs_btn" data-tab="#f_tab_2">How can I register to get onboard?</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-------card-end----->
                           </div>
                           <div class="card faqs_card_tpone">
                              <!-------card-start----->
                              <div class="card-header" id="headingTwo">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Getting Started
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="card-body">
                                    <ul>
                                       <li class="f_tabs_btn" data-tab="#f_tab_3">Create an account</li>
                                    </ul>
                                 </div>
                              </div>
                              <!-------card-end----->
                           </div>
                           <div class="card faqs_card_tpone">
                              <!-------card-start----->
                              <!-- <div class="card-header" id="headingThree">
                                 <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Patients
                                    </button>
                                 </h5>
                              </div> -->
                              <!-- <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                 <div class="card-body">
                                    <ul>
                                       <li class="f_tabs_btn" data-tab="#f_tab_6">View List of Patients</li>
                                    </ul>
                                 </div>
                              </div> -->
                              <!-------card-end----->
                           </div>
                            
                         
                           <!-------accordin-end----->
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-8 col-md-12">
                        <!--------col----------->
                        <div class="f_tab_wrapper  wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <!--Tabs Content-->
                           <div class="f_tabs_content">
                              <!--project Tab / Active Tab-->
                              <div class="f_tab" id="f_tab_1">
                                 <div class="faq_content_box">
                                    <h2> What is Medicpin?</h2>
                                    <p> A cloud based electronic health records system, built to empower seamless paperless operations of patients and hospital records.
                                    </p>
                                    <p>The implementation of our solution was deployed, using a well-managed, connected, security enhanced solutions with Web services. Medicpin enables heterogeneous systems to integrate more rapidly and in a more agile manner and help them to realize the promise of information anytime, anywhere, on any device.
                                    </p>
                                    <p>The various components of the EMR System relate with each other dynamically and sequentially. Once a Patient is registered and has a patient ID, this ID becomes his/her access code to be attended to at any unit of the hospital he/she needs to visit. 
                                    </p>
                                    <p> A patient’s record accessed by a doctor during consultation upon supply and entry of the ID. The doctor can then update the patient’s record appropriately, and further refer the patient to other units of the hospital where the same would be done on the patients records. All these updates are done real time as such, it reflects immediately on the patient’s record</p>
                                    <p>In the same vein, other units of the hospital can access and make necessary updates on the patient’s record once their patient ID is supplied. The security of patient’s information is a reason why that ID is only known and unique to individual patients, and also only authorized personnel are given access into the EMR</p>
								</div>
                              </div>
                              <!--project Tab / Active Tab end-->
                              <!--project Tab / Active Tab-->
                              <div class="f_tab" id="f_tab_2">
                                 <div class="faq_content_box">
                                    <h2>How can I register to get a Medicpin?</h2>
                                    <p> Medicpin is accessible to everyone, from anywhere in the world with an internet enabled device, which makes it possible for instant medical data updates from trusted professional.
                                    </p>
                                    <p>
								     Medicpin covers the interest of patients, doctors and institutions in the health sectors, through a service aggregation model by connecting important stakeholders in the medical sectors. 
                                    </p>
                                    <p>Registering an account with Medicpin require a visit to medicpin.com via any internet enabled device from any part of the World. The registration process is simple enough for first time users to easily navigate.
                                    </p>
                                    <p>No payment or fee is required for registration as a patients on Medicpin.com and to use our platform to store medical records, except for special charges placed by the Hospital or associated medical service provided the patient is subscribed.</p>
                                 </div>
                              </div>
                              <!--project Tab / Active Tab end-->
                              <!--project Tab / Active Tab-->
                              <div class="f_tab  active-tab" id="f_tab_3">
                                 <div class="faq_content_box">
                                    <h2>Create an Account</h2>
                                    <p> An account in Medicpin.com provides you with access to the Health Care information system. This will allow you to register a Hospital, and the Doctors, Hospital staff[s] and Patients associated with the hospital. Each type of user will have access to various types of information specific to them.
                                    </p>
                                    <p>You can create an account by clicking on the SIGN UP button. During Sign Up the below added information will be collected to successfully setup the account.
                                      <ul>
									  <li>First Name - First name of the person.</li>
                                      <li>Last Name - Last name of the person.</li>
                                      <li>Email ID -Enter your email address. Your email id will be your username, you can use this email address to sign into your Medicpin.com account. Your email id is not case sensitive and you can use letters, numbers or special characters.
                                      </li>
									  <li>Mobile Number - Select the country code and enter your phone number.</li>
									  <li>Terms and conditions - Kindly read the terms and conditions before signing up for our product, and click on the checkbox provided next to it.</li>
									   <li>By clicking Create Account, you agree that you have read and agreed to our Terms and conditions.</li>
									 </ul>
									  </p>
                                 </div>
                              </div>
		                       <!--project Tab / Active Tab-->	  
							 <!--  <div class="f_tab  active-tab" id="f_tab_4">
                                 <div class="faq_content_box">
                                    <h2>Recovery of Sign in Credentials</h2>
                                    <p> Losing the password to your account in Medicpin.com can be frustrating. To make sure you can get back in to your account quickly, easily and securely, just enter the email address. If we have a valid email address matching the one you have given, we will send you the password immediately, thereby letting you access your account right away.</p>
                                    <p>To recover the password of your account following the 3 simple steps given below.
									
									<ul>
									  <li>Go to Medicpin.com home page.</li>
									  <li>Click on Forgot your password?</li>
									  <li>Enter your email address which should match the email address you signed up in the Email input box and press Get Password.</li>
									   <li>The Account password recovery mail will be sent to your email id.</li>
									</ul>
									  </p>                       
                                 </div>
                              </div> -->
							  <!--project Tab / Active Tab end-->
							  <!--project Tab / Active Tab-->	  
							  <!-- <div class="f_tab  active-tab" id="f_tab_5">
                                 <div class="faq_content_box">
                                    <h2>Supported browsers</h2>
                                    <p> You can access Medicpin.com via a PC, Mac, or Linux computer.<p>To recover the password of your account following the 3 simple steps given below.</p>
									<p>We recommend using a supported browser to get all of Medicpin.com's newest features:</p>
									<p>
									<ul>
									  <li>Google Chrome (current stable version).</li>
									  <li>Firefox 3.6+</li>
									  </ul>
									  </p>        
                                 </div>
                              </div> -->
							  <!--project Tab / Active Tab end-->
							  <!--project Tab / Active Tab-->	  
						<!-- 	  <div class="f_tab  active-tab" id="f_tab_6">
                                 <div class="faq_content_box">
                                    <h2>View List of Patients</h2>
                                    <p> The list of existing patients with the health care institution is displayed in an alphabetical order.</p>
									<p>Search: Enter the name, KPiD, p:phone, e:email, birth date and/or a:address of a particular patient to access their information, click on the search button and select the required patient from the list. By entering three or more characters, a list of matching patients will be shown for the selection.</p>
                                    <p>Click on the [New patient button] to create a new patient.</p>
									<p>The overview of the patient list will provide you with their Name, kPiD/Email, Address, Gender, and Birth Date. Click on any patient from the list to get more information of the particular patient and optionally modify.</p>
                                    <p>Recent: - Click on the to view a list of the recently browsed patients.</p>
									<ul>
									Note:
                                    <li>A list of 15 patients will be available, click on more to view more patients.</li>
                                    <li>The timestamp details of the date/time the patient was accessed will be available below the Birthdate of each patient in the list.</li>
                                    <li>The Archived patient[s] will not appear when searched from respective places in the account.</li>
									</ul>
									<ul>
                                    <li><b>Report:</b> - Click on the [Report Button] to search and view various reports of the patients in your hospital.</li>
                                    <li><b>How to Generate Reports?</b> Search for patients using their name, mobile number, address, birthdate, KPiD or email. Click on [Search More by button] to generate more advanced reports.</li>
                                    <li><b>Gender:</b> Select the checkbox next to the preferred gender[s] to generate reports accordingly.</li>
								    <li><b>Blood Group:</b> Select the checkbox next to the preferred blood group[s] to generate reports accordingly.</li>
                                    <li>Marital Status: Select the checkbox next to the preferred marital status[es] to generate reports accordingly.</li>
									<li>Birth Date Range: Select the preferred Date Range to generate reports of patient[s] born in that duration.</li>
									<li>Date created: Select the preferred Date Range to generate reports of patient[s] created in that duration.</li>
									<li>Label : Search and select the preferred label[s] using the already created label name[s] to generate reports of patient[s] assigned to them.</li>
									<li>Problems: Search problem[s] using ICD codes and SNOMED to generate reports of patient[s] diagnosed with them.</li>
									<li>Symptoms: Search symptom[s] using ICD codes to generate reports of patient[s] associated with them.</li>
									<li>Death Date: The death date and time information of the patient can be added or updated here.</p>
									<li>Record Date & Time - Click on this button to automatically record the current date and time from the system to the Date and Time field preferred Date Range to generate reports of patient[s] who have died in that duration.</p>
									<li>Archived: Select the preferred type to generate reports of patient[s] Archived, UnArchived or both.</p>
									<li>Click on the [print button] to print these reports and/or click on the [export button] to export the generated reports</p>
									<p>Note:</p>
									<li>Reports will be generated and updated once filters are applied and do not require you to click on a search button separately after applying them For Gender, Marital status, and Blood group, all or multiple checkboxes can be checked simultaneously to generate reports accordingly.</p>
									<li>For Problems , multiple ICD codes can be added to generate reports.</li>
									<li>Clicking on the Both option in the Archive filter will enable the users to view the complete list of patients.</li>
									<li>All or multiple report filters can be selected or added simultaneously to generate reports accordingly.</li>
									</ul>
									  </p>                       
                                 </div>
                              </div> -->
							  <!--project Tab / Active Tab end-->
                           </div>
                           <!--Tabs Content-->
                        </div>
                        <!--------col-end------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
		   
		   
		   
		   
            <!-----------faq-end-------------->
            <!-----------blog--------------->
           <section class="blog type_two pdb_30">
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
                           <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                                    <li><span class="linearicons-bubbles"></span>21 </li>
                                 </ul>
                                 <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths.</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                           <!---------blog_box----------->
                           <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                                    <li><span class="linearicons-bubbles"></span>39 </li>
                                 </ul>
                                 <p> Until now, doctors have been reassuring pregnant women that they are no more at risk from COVID.</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                           <!---------blog_box----------->
                           <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <div class="image_box">
                                 <img src="assets/image/resources/blog-1-3.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay ">
                                    <a href="assets/image/resources/blog-1-3.jpg" data-fancybox="gallery " data-caption=" ">
                                    <span class="linearicons-picture2"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <h2><a href="#">Are you washing your hands properly?</a></h2>
                                 <ul>
                                    <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                    <li><span class="linearicons-bubbles"></span>42 </li>
                                 </ul>
                                 <p> Most of us know how important it is to practise good hand hygiene. But just because you're washing hands.</p>
                                 <a href="#" class="read_more tp_one"> Read more  <span class="linearicons-arrow-right"></span></a>
                              </div>
                           </div>
                           <!---------blog_box end----------->
                            <!---------blog_box----------->
                            <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
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
                                    <li><span class="linearicons-calendar-full"></span>30 Apr 2020</li>
                                    <li><span class="linearicons-bubbles"></span>42 </li>
                                 </ul>
                                 <p>In an unprecedented effort to contain the coronavirus outbreak which has caused tens of thousands of deaths...</p>
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
            <!-----------partners--------------->
            <section class="partners type_one pdt_0  pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="owl-carousel six_items">
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-1.png" class="img-fluid" alt="partners" />
                           </div>
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-2.png" class="img-fluid" alt="partners" />
                           </div>
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-3.png" class="img-fluid" alt="partners" />
                           </div>
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-4.png" class="img-fluid" alt="partners" />
                           </div>
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-5.png" class="img-fluid" alt="partners" />
                           </div>
                           <div class="partners_logo type_one">
                              <img src="assets/image/resources/partners-1-6.png" class="img-fluid" alt="partners" />
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------partners-end-------------->
            <!-----------apps--------------->
       
            <!-----------apps-end-------------->
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
                                 <label for="test3">I accept the <a href="./privacy">Privacy Policy.</a></label>
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
</html>