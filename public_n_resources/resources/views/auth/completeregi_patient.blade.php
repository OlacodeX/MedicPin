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
                            <style>

                                /*---------------------------------------------------------------------
                                                               Sign In
                                -----------------------------------------------------------------------*/
                                .sign-in-page { height: 100%; margin-bottom: 30px; }
                                .sign-in-detail { padding: 100px; height: 100vh; border-radius: 40px; }
                                .sign-in-logo { display: inline-block; width: 100%; }
                                .sign-in-logo img { height: 100px; }
                                .sign-in-from { padding: 20px 60px; border-radius: 37px; position: absolute; top: 0%; bottom: 0%; left: 0; right: 0; background: #fff; }
                                .sign-info { border-top: 1px solid #cdd1f3; margin-top: 30px; padding-top: 20px; }
                                .iq-social-media { margin: 0; padding: 0; float: right; }
                                .iq-social-media li { list-style: none; float: left; margin-right: 10px; }
                                .iq-social-media li:last-child { margin-right: 0; }
                                .iq-social-media li a { height: 30px; width: 30px; text-align: center; font-size: 18px; line-height: 30px; display: inline-block; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px; background: #eff7f8; color: #089bab !important; }
                                .iq-social-media li a:hover { text-decoration: none; }
                                .sign-in-page .sign-in-page-bg { position: relative; overflow: hidden; }
                                .sign-in-page .sign-in-page-bg::after { position: absolute; content: ""; top: 0; bottom: 0; left: 0; right: 270px; z-index: -1; border-radius: 40px; background: rgba(8, 155, 171, 1); background: -moz-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -webkit-gradient(left top, right top, color-stop(0%, rgba(8, 155, 171, 1)), color-stop(100%, rgba(13, 181, 200, 1))); background: -webkit-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -o-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -ms-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: linear-gradient(to right, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#089bab', endColorstr='#0db5c8', GradientType=1); }
                                

                            </style>
                            {!! Form::open(['action' => 'PatientsController@reg_patient', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                            **/ !!}
                                @include('inc.messages')
                                @csrf
                                <input id="name" type="hidden" name="name" value="{{$name}}">
                                <input id="email" type="hidden" name="email" value="{{ $email }}">
                                <input id="gender" type="hidden"  name="gender" value="{{ $gender }}">
                                <input id="cc" type="hidden" name="cc" value="{{ $cc }}">
                                <input id="type" type="hidden" name="type" value="{{ $type }}">
                                <input id="phone" type="hidden"  name="phone" value="{{ $phone }}">
                                <input id="age" type="hidden"  name="age" value="{{ $age }}">
                                <input id="password" type="hidden"  name="password" value="{{ $password }}">

                                <input id="role" type="hidden"  name="role" value="Patient">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-0" name="occupation" id="occupation" placeholder="What do you do for a living?">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-0" name="add" id="add" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-0" name="nok"  placeholder="Next of Kin name">
                                </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control mb-0" name="nokp" id="nokp" placeholder="Next of Kin phone number">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-0" name="nok_relation"  placeholder="Relationship With Next of Kin">
                                </div>
                                <div class="form-group">
                                   <select class="form-control mb-0" id="nhis" name="nhis">
                                      <option value="">Patient Type</option>
                                      <option value="NHIS">NHIS</option>
                                      <option value="Non NHIS">Non NHIS</option>
                                   </select>
                                </div>
                                <!--
                                <div class="form-group">
                                    <input type="text" class="form-control mb-0" name="nhiss" id="nhiss" style="display: none;" placeholder="Enter NHIS number...">
                                </div>-->
                                <div class="form-group">
                                   <select class="form-control mb-0" id="selectex" name="expertise" style="display: none;">
                                      <option value="">Expertise</option>
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
                                            input.form-control.fie[type="file"]{
                                    -webkit-appearance: none;
                                    text-align: center;
                                    -webkit-rtl-ordering:  left;
                                    }
                                    input.form-control.fie[type="file"]::-webkit-file-upload-button{
                                    -webkit-appearance: none;
                                    margin: 0 0 0 150px;
                                    border: 1px solid #00b2ac;
                                    border-radius: 4px;
                                    padding: 3px 30px;
                                    background: transparent;
                                    color: #00b2ac;
                                    font-weight: bold;
                                    }
                                    input.form-control.fie[type="file"]::-webkit-file-upload-text{
                                    -webkit-appearance: none;
                                    display: none;
                                    }
                                </style>
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Picture') }}</label>
                                        <input id="pp" type="file" class="form-control @error('pp') is-invalid @enderror fie image" name="pp">
                                         <!---
                                        <input type="hidden" name="x1" value="" />
                                            <input type="hidden" name="y1" value="" />
                                            <input type="hidden" name="w" value="" />
                                            <input type="hidden" name="h" value="" />--->
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
                            <!--
                            <div class="row mt-5">
                                <p><img id="previewimage" style="display:none;"/></p>
                                @if(session('path'))
                                    <img src="{{ session('path') }}" />
                                @endif
                            </div>--->
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
<!-- Sign up END -->
@endsection