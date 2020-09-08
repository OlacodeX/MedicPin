@extends('layouts.main')

@section('content')

<!-- Sign up Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0" style="padding-bottom: 400px;">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                    <a class="sign-in-logo mb-5 text-white" href="./"><h3 class="text-white">MedicPin EHR</h3></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="img/cope.png" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Go paperless</h4>
                            <p>
                                Manage appointments, access medical records anytime, anywhere and lots more....
                            </p>
                        </div>
                        <div class="item">
                            <img src="img/hp.jpg" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">No more loss of records and data</h4>
                            <p>Migrate from paper records to cloud data management....</p>
                        </div>
                        <div class="item">
                            <img src="img/bg3.jpg" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">MedicPin EHR Services</h4>
                            <p>Fast, Secure and Reliable.....</p>
                        </div>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="{{ route('login') }}" class="text-white">Sign In</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="https://www.facebook.com/"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="https://www.twitter.com/"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!----
                    <style>
                        section.sign-in-page { 
                            margin-bottom: 100px;
                         }
                         
                         section.sign-in-page div.sign-in-page-bg::after { position: absolute; content: ""; top: 0; bottom: 0; left: 0; right: 270px; z-index: -1; border-radius: 40px; background: rgba(8, 155, 171, 1); background: -moz-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -webkit-gradient(left top, right top, color-stop(0%, rgba(8, 155, 171, 1)), color-stop(100%, rgba(13, 181, 200, 1))); background: -webkit-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -o-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -ms-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: linear-gradient(to right, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#089bab', endColorstr='#0db5c8', GradientType=1); }

                         section.sign-in-page div.sign-in-page-bg { position: relative; overflow: hidden; }
                        div.sign-in-from { padding: 20px 60px; border-radius: 37px; position: absolute; top: 2%; bottom: 2%; left: 0; right: 0; background: #fff; }
                    </style>---->
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Complete Sign Up</h1>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <input id="name" type="hidden" name="name" value="{{$name}}">
                                <input id="email" type="hidden" name="email" value="{{ $email }}">
                                <input id="gender" type="hidden"  name="email" value="{{ $gender }}">
                                <input id="password" type="hidden"  name="password" value="{{ $password }}">
                                <input id="password_confirmation" type="hidden"  name="password_confirmation" value="{{ $password_confirmation }}">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <select class="form-control mb-0" id="cc" name="cc">
                                                      <option>-select country code-</option>
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
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="374">Armenia 374</option>
                                                      <option value="297">Aruba 297</option>
                                                      <option value="61">Australia 61</option>
                                                      <option value="43">Austria 43</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                      <option value="994">Azerbaijan 994</option>
                                                   </select>
                                        </div>
                                        <div class="col-sm-9">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                        <input id="phone" type="number" class="form-control mb-0 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Your phone number" autofocus>
        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                        </div>
                                </div>
                                </div>
                                <div class="form-group">
                            <select class="form-control mb-0" id="type" name="type">
                                      <option>-select account type-</option>
                                      <option value="Organization/HMO">Organization/HMO</option>
                                      <option value="Personal/Individual">Personal/Individual</option>
                                   </select>
                                </div>
                                <div class="form-group">
                            <select class="form-control mb-0" id="role" name="role" onchange="yesnoCheck(this);">
                                      <option>-I am a...-</option>
                                      <option value="Nurse">Nurse</option>
                                      <option value="Pharmacist">Pharmacist</option>
                                      <option value="Patient">Patient</option>
                                      <option value="Biochemist/Microbiologist">Biochemist/Microbiologist</option>
                                      <option value="Doctor">Doctor</option>
                                      <option value="Ward Maid">Ward Maid</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="nhis" name="nhis" style="display: none;">
                                      <option>Patient Type</option>
                                      <option value="NHIS">NHIS</option>
                                      <option value="Non NHIS">Non NHIS</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="selectex" name="expertise" style="display: none;">
                                      <option>Expertise</option>
                                      <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                      <option value="Anesthesiologist">Anesthesiologist</option>
                                      <option value="Cardiologist">Cardiologist</option>
                                      <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                      <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                      <option value="Dermatologist">Dermatologist</option>
                                      <option value="Endocrinologist">Endocrinologist</option>
                                      <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                      <option value="Family Physician">Family Physician</option>
                                      <option value="Gastroenterologist">Gastroenterologist</option>
                                      <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                      <option value="Hematologist">Hematologist</option>
                                      <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                      <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                      <option value="Internist">Internist</option>
                                      <option value="Medical Geneticist">Medical Geneticist</option>
                                      <option value="Nephrologist">Nephrologist</option>
                                      <option value="Neurologist">Neurologist</option>
                                      <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                      <option value="Oncologist">Oncologist</option>
                                      <option value="Ophthalmologist">Ophthalmologist</option>
                                      <option value="Osteopath">Osteopath</option>
                                      <option value="Otolaryngologist">Otolaryngologist</option>
                                      <option value="Pathologist">Pathologist</option>
                                      <option value="Pediatrician">Pediatrician</option>
                                      <option value="Physiatrist">Physiatrist</option>
                                      <option value="Plastic Surgeon">Plastic Surgeon</option>
                                      <option value="Podiatrist">Podiatrist</option>
                                      <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                      <option value="Psychiatrist">Psychiatrist</option>
                                      <option value="Pulmonologist">Pulmonologist</option>
                                      <option value="Radiologist">Radiologist</option>
                                      <option value="Rheumatologist">Rheumatologist</option>
                                      <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                      <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                      <option value="General Surgeon">General Surgeon</option>
                                      <option value="Urologist">Urologist</option>
                                   </select>
                                </div>
                                <style>
                                    
                                            input.form-control.fie{
                                                padding-top: 90px;
                                                padding-bottom: 90px;
                                                text-align: center;
                                                background: #aaaaaa;
                                                border:#00b2ac 2px dashed;
                                                border-radius: 0;
                                            }
                                            input.fie[type="file"]{
                                    -webkit-appearance: none;
                                    text-align: center;
                                    -webkit-rtl-ordering:  left;
                                    }
                                    input.fie[type="file"]::-webkit-file-upload-button{
                                    -webkit-appearance: none;
                                    margin: 0 0 0 300px;
                                    border: 1px solid #00b2ac;
                                    border-radius: 4px;
                                    padding: 10px 30px;
                                    background: transparent;
                                    color: #00b2ac;
                                    font-weight: bold;
                                    }
                                    input.fie[type="file"]::-webkit-file-upload-text{
                                    -webkit-appearance: none;
                                    display: none;
                                    }
                                </style>
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Picture') }}</label>
                                        <input id="pp" type="file" class="form-control @error('pp') is-invalid @enderror fie" name="pp">
        
                                        @error('pp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
<!-- Sign up END -->
@endsection