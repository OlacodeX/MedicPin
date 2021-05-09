@extends('layouts.main')

@section('content')	<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="./" class="navbar-brand logo">
                    <img src="assets/img/mpin.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="./" class="menu-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
          </div>
          <style>
             ul.main-nav{
                padding-left: 70px;
             }
@media (max-width: 1300px) {
             ul.main-nav{
                padding-left: 5px;
             }
          }
@media only screen and (max-width: 768px) {
             ul.main-nav{
                padding-left: 5px;
             }
          }

          </style>
          
                <ul class="main-nav">
                    <li>
                        <a href="./">Home</a>
                    </li>
                    <li class="has-submenu active">
                        <a href="#">Doctor's Resources <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="active"><a href="./dashboard">Dashboard</a></li>
                   <li><a href="./appointments" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>My Appointments</span></a></li>
                   
                     <li><a href="./blood_bank" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Blood Bank</span></a></li>
                     
                  <li><a href="./add_op" class="iq-waves-effect"><i class="ri-folders-fill"></i><span>Add Operation Record</span></a></li>
                  <li><a href="./chat" class="iq-waves-effect"><i class="ri-message-line"></i><span>Inbox</span></a></li>
                  <li><a href="./questions" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Forum</span></a></li>
                  
                            <li class="has-submenu">
                                <a href="#">To Do</a>
                                <ul class="submenu">
                         <li><a href="./schedule">My To Do</a></li>
                         <li><a href="./schedule/create">Add To Do</a></li>
                                </ul>
                            </li>
                   <li><a href="./notifications">Sent Notifications</a></li>
                   <li><a href="./notifications/create">Send Notification</a></li>
                   <!---<li><a href="profile-edit.html">User Edit</a></li>--->
                   <li><a href="./doctors">Doctors List</a></li>
                   <li>
                    <a href="./mybills"><i class="ri-device-fill"></i><span>My Bills</span></a>
                   
                 </li>
                        </ul>
                    </li>	
                    <li class="has-submenu">
                        <a href="#">Patients <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                   <li><a href="./doctors">Patients List</a></li>
                   <li><a href="./transfered_patients">Transferred Patients</a></li>  
                   <li><a href="./patients/create">Add Patient</a></li>
                        </ul>
                    </li>	
                    <li class="has-submenu">
                        <a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                   <li><a href="./pharmacist_shop" class="iq-waves-effect"><i class="ion-medkit"></i><span>Buy Drugs</span></a></li>
                   <!----
                            <li><a href="pharmacy-index.html">Pharmacy</a></li>
                            <li><a href="pharmacy-details.html">Pharmacy Details</a></li>
                            <li><a href="pharmacy-search.html">Pharmacy Search</a></li>
                            <li><a href="product-all.html">Product</a></li>
                            <li><a href="product-description.html">Product Description</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="product-checkout.html">Product Checkout</a></li>
                            <li><a href="payment-success.html">Payment Success</a></li>--->
                        </ul>
             </li>
             <!----
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="voice-call.html">Voice Call</a></li>
                            <li><a href="video-call.html">Video Call</a></li>
                            <li><a href="search.html">Search Doctors</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li class="has-submenu">
                                <a href="invoices.html">Invoices</a>
                                <ul class="submenu">
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="invoice-view.html">Invoice View</a></li>
                                </ul>
                            </li>
                            <li><a href="blank-page.html">Starter Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="admin/index.html" target="_blank">Admin</a></li>
                            <li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
                        </ul>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Login / Signup</a>
                    </li>--->
                </ul>	 
            </div>		 
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>							
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +234 802 551 0164</p>
                    </div>
                </li>
                
						<li class="nav-item">
							<a class="nav-link header-login" href="./login">login / Signup </a>
						</li>
                <!-- /User Menu -->
                
            </ul>
        </nav>
    </header>
    <!-- /Header -->
<!-- Page Content -->
<div class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="assets/img/login-banner.png" class="img-fluid" alt="MedicPin Login">	
                        </div>
                        <div class="col-md-12 col-lg-6 login-right" style="margin-bottom: 20px;">
                            <div class="login-header">
                                <h3>Complete <span>MedicPin</span> Account Setup</h3>
                            </div>
                            {!! Form::open(['action' => 'PagesController@complete_sign_up_patient', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                            **/ !!}
                           
                                @include('inc.messages')
                                @csrf
                                <!---<input type="hidden" name="role" value="Doctor">--->
                                <div class="form-group form-focus">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                        <input id="name" type="text" class="form-control floating @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your full name">
                                        <label class="focus-label">Your Name</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group form-focus">
                                    <small>Kindly use the email you received this invite from</small>
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-envelope"></i>
                                        <input id="email" type="email" class="form-control floating @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email" required autocomplete="email">
                                        <label class="focus-label">Your Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group form-focus">
                                    <small>Your date of birth</small>
                                    <div class="inner-addon right-addon">
                                       <i class="fa fa-date"></i>
                                        <input id="age" type="date" class="form-control mb-0 @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autocomplete="age" placeholder="How Old Are You?">
                                        <label class="focus-label">Your date of birth</label>
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-sm-5">
                                    <select class="form-control mb-0" id="cc" name="cc">
                                              <option value="">-select country code-</option>
                                              <option value="93">Afghanistan 93</option>
                                              <option value="355"> Albania 355</option>
                                              <option value="213">Algeria 213</option>
                                              <option value="1-684">  American Samoa 1-684</option>
                                              <option value="376">Andorra 376</option>
                                              <option value="244">Angola 244</option>
                                              <option value="1-264"> Anguilla 1-264</option>
                                              <option value="672">Antarctica 672</option>
                                              <option value="1-268">Antigua and Barbuda 1-268</option>
                                              <option value="54"> Argentina 54</option>
                                              <option value="374">Armenia 374</option>
                                              <option value="297">Aruba 297</option>
                                              <option value="61">Australia 61</option>
                                              <option value="43">Austria 43</option>
                                              <option value="994">Azerbaijan 994</option>
                                              <option value="1-242">Bahamas 1-242</option>
                                              <option value="973">Bahrain 973</option>
                                              <option value="880">Bangladesh 880</option>
                                              <option value="1-246">Barbados 1-246</option>
                                              <option value="375">Belarus 375</option>
                                              <option value="32">Belgium 32</option>
                                              <option value="501">Belize 501</option>
                                              <option value="229">Benin 229</option>
                                              <option value="1-441">Bermuda 1-441</option>
                                              <option value="975">Bhutan 975</option>
                                              <option value="591">Bolivia 591</option>
                                              <option value="387">Bosnia and Herzegovina 387</option>
                                              <option value="267">Botswana 267</option>
                                              <option value="55">Brazil 55</option>
                                              <option value="246">British Indian Ocean Territory 246</option>
                                              <option value="1-284">British Virgin Islands 1-284</option>
                                              <option value="673">Brunei 673</option>
                                              <option value="359">Bulgaria 359</option>
                                              <option value="226">Burkina Faso 226</option>
                                              <option value="257">Burundi 257</option>
                                              <option value="855"> Cambodia 855</option>
                                              <option value="237">Cameroon 237</option>
                                              <option value="1">Canada 1</option>
                                              <option value="238"> Cape Verde 238</option>
                                              <option value="1-345">ACayman Islands 1-345</option>
                                              <option value="236">Central African Republic 236</option>
                                              <option value="235"> Chad 235</option>
                                              <option value="56">Chile 56</option>
                                              <option value="86">China 86</option>
                                              <option value="61">Christmas Island 61</option>
                                              <option value="61">Cocos Islands 61</option>
                                              <option value="57">Colombia 57</option>
                                              <option value="269">Comoros 269</option>
                                              <option value="682">Cook Islands 682</option>
                                              <option value="506"> Costa Rica 506</option>
                                              <option value="385"> Croatia 385</option>
                                              <option value="53">Cuba 53</option>
                                              <option value="599">Curacao 599</option>
                                              <option value="357">Cyprus 357</option>
                                              <option value="420">Czech Republic 420</option>
                                              <option value="243">Democratic Republic of the Congo 243</option>
                                              <option value="45">Denmark 45</option>
                                              <option value="253">Djibouti 253</option>
                                              <option value="1-767">Dominica 1-767</option>
                                              <option value="1-809">Dominican Republic 1-809</option>
                                              <option value="1-829">Dominican Republic 1-829</option>
                                              <option value="1-849">Dominican Republic 1-849</option>
                                              <option value="670">East Timor 670</option>
                                              <option value="593">Ecuador 593</option>
                                              <option value="20">Egypt 20</option>
                                              <option value="503"> El Salvador 503</option>
                                              <option value="240">Equatorial Guinea 240</option>
                                              <option value="291"> Eritrea 291</option>
                                              <option value="372">Estonia 372</option>
                                              <option value="251">Ethiopia 251</option>
                                              <option value="500">Falkland Islands 500</option>
                                              <option value="298"> Faroe Islands 298</option>
                                              <option value="679">Fiji 679</option>
                                              <option value="358"> Finland 358</option>
                                              <option value="33">France 33</option>
                                              <option value="689">French Polynesia 689</option>
                                              <option value="241">Gabon 241</option>
                                              <option value="220">Gambia 220</option>
                                              <option value="995">Georgia 995</option>
                                              <option value="49">Germany 49</option>
                                              <option value="233">Ghana 233</option>
                                              <option value="350">Gibraltar 350</option>
                                              <option value="30"> Greece 30</option>
                                              <option value="299">Greenland 299</option>
                                              <option value="1-473">Grenada 1-473</option>
                                              <option value="1-671"> Guam 1-671</option>
                                              <option value="502">Guatemala 502</option>
                                              <option value="44-1481">Guernsey 44-1481</option>
                                              <option value="224">Guinea 224</option>
                                              <option value="245">Guinea-Bissau 245</option>
                                              <option value="592"> Guyana 592</option>
                                              <option value="509"> Haiti 509</option>
                                              <option value="504"> Honduras 504</option>
                                              <option value="852"> Hong Kong 852</option>
                                              <option value="36">Hungary 36</option>
                                              <option value="354">Iceland 354</option>
                                              <option value="91">India 91</option>
                                              <option value="62"> Indonesia 62</option>
                                              <option value="98">Iran 98</option>
                                              <option value="964">Iraq 964</option>
                                              <option value="353">Ireland 353</option>
                                              <option value="44-1624">Isle of Man 44-1624</option>
                                              <option value="972">Israel 972</option>
                                              <option value="39"> Italy 39</option>
                                              <option value="225">Ivory Coast 225</option>
                                              <option value="1-876">Jamaica 1-876</option>
                                              <option value="81">Japan 81</option>
                                              <option value="44-1534"> Jersey 44-1534</option>
                                              <option value="962">Jordan 962</option>
                                              <option value="7"> Kazakhstan 7</option>
                                              <option value="254"> Kenya 254</option>
                                              <option value="686">Kiribati 686</option>
                                              <option value="383">Kosovo 383</option>
                                              <option value="965">Kuwait 965</option>
                                              <option value="996"> Kyrgyzstan 996</option>
                                              <option value="856">Laos 856</option>
                                              <option value="371">Latvia 371</option>
                                              <option value="961">Lebanon 961</option>
                                              <option value="266">Lesotho 266</option>
                                              <option value="231">Liberia 231</option>
                                              <option value="218">Libya 218</option>
                                              <option value="423">Liechtenstein 423</option>
                                              <option value="370">Lithuania 370</option>
                                              <option value="352">Luxembourg 352</option>
                                              <option value="853">Macau 853</option>
                                              <option value="389">Macedonia 389</option>
                                              <option value="261">Madagascar 261</option>
                                              <option value="265">Malawi 265</option>
                                              <option value="60">Malaysia 60</option>
                                              <option value="960"> Maldives 960</option>
                                              <option value="223">Mali 223</option>
                                              <option value="356">Malta 356</option>
                                              <option value="692">Marshall Islands 692</option>
                                              <option value="222"> Mauritania 222</option>
                                              <option value="230">Mauritius 230</option>
                                              <option value="262">Mayotte 262</option>
                                              <option value="52">Mexico 52</option>
                                              <option value="691">Micronesia 691</option>
                                              <option value="373">Moldova 373</option>
                                              <option value="377">Monaco 377</option>
                                              <option value="976">Mongolia 976</option>
                                              <option value="382">Montenegro 382</option>
                                              <option value="1-664">Montserrat 1-664</option>
                                              <option value="212">Morocco 212</option>
                                              <option value="258">Mozambique 258</option>
                                              <option value="95">Myanmar 95</option>
                                              <option value="264">Namibia 264</option>
                                              <option value="674">Nauru 674</option>
                                              <option value="977">Nepal 977</option>
                                              <option value="31">Netherlands 31</option>
                                              <option value="599">Netherlands Antilles 599</option>
                                              <option value="687">New Caledonia 687</option>
                                              <option value="64">New Zealand 64</option>
                                              <option value="505">Nicaragua 505</option>
                                              <option value="227">Niger 227</option>
                                              <option value="234">Nigeria 234</option>
                                              <option value="683">Niue 683</option>
                                              <option value="850">North Korea 850</option>
                                              <option value="1-670">Northern Mariana Islands 1-670</option>
                                              <option value="47">Norway 47</option>
                                              <option value="968">Oman 968</option>
                                              <option value="92">Pakistan 92</option>
                                              <option value="680">Palau 680</option>
                                              <option value="970">Palestine 970</option>
                                              <option value="507">Panama 507</option>
                                              <option value="675">Papua New Guinea 675</option>
                                              <option value="595">Paraguay 595</option>
                                              <option value="51">Peru 51</option>
                                              <option value="63">Philippines 63</option>
                                              <option value="64">Pitcairn 64</option>
                                              <option value="48">Poland 48</option>
                                              <option value="351">Portugal 351</option>
                                              <option value="1-787">Puerto Rico 1-787</option>
                                              <option value="1-939">Puerto Rico 1-939</option>
                                              <option value="974">Qatar 974</option>
                                              <option value="242">Republic of the Congo 242</option>
                                              <option value="262">Reunion 262</option>
                                              <option value="40">Romania 40</option>
                                              <option value="7">Russia 7</option>
                                              <option value="250">Rwanda 250</option>
                                              <option value="590">Saint Barthelemy 590</option>
                                              <option value="290">Saint Helena 290</option>
                                              <option value="1-869">Saint Kitts and Nevis 1-869</option>
                                              <option value="1-758">Saint Lucia 1-758</option>
                                              <option value="590">Saint Martin 590</option>
                                              <option value="508">Saint Pierre and Miquelon 508</option>
                                              <option value="1-784">Saint Vincent and the Grenadines 1-784</option>
                                              <option value="685">Samoa 685</option>
                                              <option value="378">San Marino 378</option>
                                              <option value="239">Sao Tome and Principe 239</option>
                                              <option value="966">Saudi Arabia 966</option>
                                              <option value="221">Senegal 221</option>
                                              <option value="381">Serbia 381</option>
                                              <option value="248">Seychelles 248</option>
                                              <option value="232">Sierra Leone 232</option>
                                              <option value="65">Singapore 65</option>
                                              <option value="1-721">Sint Maarten 1-721</option>
                                              <option value="421">Slovakia 421</option>
                                              <option value="386">Slovenia 386</option>
                                              <option value="677">Solomon Islands 677</option>
                                              <option value="252">Somalia 252</option>
                                              <option value="27">South Africa 27</option>
                                              <option value="82">South Korea 82</option>
                                              <option value="211">South Sudan 211</option>
                                              <option value="34">Spain 34</option>
                                              <option value="94">Sri Lanka 94</option>
                                              <option value="249">Sudan 249</option>
                                              <option value="597">Suriname 597</option>
                                              <option value="47"> Svalbard and Jan Mayen 47</option>
                                              <option value="268">Swaziland 268</option>
                                              <option value="46">Sweden 46</option>
                                              <option value="41">Switzerland 41</option>
                                              <option value="963">Syria 963</option>
                                              <option value="886">Taiwan 886</option>
                                              <option value="992">Tajikistan 992</option>
                                              <option value="255">Tanzania 255</option>
                                              <option value="66">Thailand 66</option>
                                              <option value="228">Togo 228</option>
                                              <option value="690">Tokelau 690</option>
                                              <option value="676">Tonga 676</option>
                                              <option value="1-868">Trinidad and Tobago 1-868</option>
                                              <option value="216">Tunisia 216</option>
                                              <option value="90">Turkey 90</option>
                                              <option value="993">Turkmenistan 993</option>
                                              <option value="1-649">Turks and Caicos Islands 1-649</option>
                                              <option value="688">Tuvalu 688</option>
                                              <option value="1-340">U.S. Virgin Islands 1-340</option>
                                              <option value="256">Uganda 256</option>
                                              <option value="380">Ukraine 380</option>
                                              <option value="971">United Arab Emirates 971</option>
                                              <option value="44">United Kingdom 44</option>
                                              <option value="1">United States 1</option>
                                              <option value="598">Uruguay 598</option>
                                              <option value="998"> Uzbekistan 998</option>
                                              <option value="678">Vanuatu 678</option>
                                              <option value="379">Vatican 379</option>
                                              <option value="58">Venezuela 58</option>
                                              <option value="84">Vietnam 84</option>
                                              <option value="681">Wallis and Futuna 681</option>
                                              <option value="212">Western Sahara 212</option>
                                              <option value="967">Yemen 967</option>
                                              <option value="260">Zambia 260</option>
                                              <option value="263">Zimbabwe 263</option>
                                           </select>
                                </div>
                                <div class="col-sm-7">
                            <div class="inner-addon right-addon">
                                <i class="fa fa-user"></i>
                                <input id="phone" type="number" class="form-control mb-0 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="use format '8123xxxxxx'">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                </div>
                        </div>
                        </div>
                                <!---
                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-twitter"></i>
                                        <input id="twitter" type="url" class="form-control mb-0 @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" autocomplete="twitter" placeholder="Link To Your Twitter Profile" autofocus>
        
                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-facebook"></i>
                                        
                                        <input id="facebook" type="url" class="form-control mb-0 @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" autocomplete="facebook" placeholder="Link To Your Facebook Profile" autofocus>
        
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>---->
                                <div class="form-group">
                                    <select class="form-control mb-0" id="type" name="type">
                                              <option value="">-select account type-</option>
                                              <option value="Organization/HMO">Organization/HMO</option>
                                              <option value="Personal/Individual">Personal/Individual</option>
                                           </select>
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="selectge" name="gender">
                                      <option>Gender</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                   </select>
                                </div>

                                <div class="form-group form-focus">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-expeditedssl"></i>
                                        <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
                                        <label class="focus-label">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group form-focus">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-expeditedssl"></i>
                                        <input id="password-confirm" type="password" class="form-control floating" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                        <label class="focus-label">Confirm Password</label>
                                    </div>
                                </div>
        
                                <div class="d-inline-block w-100">
                                    <button type="submit" class="btn btn-primary float-right">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->
                    
            </div>
        </div>

    </div>

</div>		
<!-- /Page Content -->


<!-- Footer 
<footer class="bg-white iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="./privacy">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="./terms">Terms of Use</a></li>
              </ul>
           </div>
           <div class="col-lg-6 text-right">
              Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
Footer END -->
@endsection