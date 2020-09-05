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
                    <style>
                        section.sign-in-page { 
                            margin-bottom: 100px;
                         }
                         
                         section.sign-in-page div.sign-in-page-bg::after { position: absolute; content: ""; top: 0; bottom: 0; left: 0; right: 270px; z-index: -1; border-radius: 40px; background: rgba(8, 155, 171, 1); background: -moz-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -webkit-gradient(left top, right top, color-stop(0%, rgba(8, 155, 171, 1)), color-stop(100%, rgba(13, 181, 200, 1))); background: -webkit-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -o-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: -ms-linear-gradient(left, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); background: linear-gradient(to right, rgba(8, 155, 171, 1) 0%, rgba(13, 181, 200, 1) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#089bab', endColorstr='#0db5c8', GradientType=1); }

                         section.sign-in-page div.sign-in-page-bg { position: relative; overflow: hidden; }
                        div.sign-in-from { padding: 20px 60px; border-radius: 37px; position: absolute; top: 2%; bottom: 2%; left: 0; right: 0; background: #fff; }
                    </style>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign Up</h1>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <!---<input type="hidden" name="role" value="Doctor">--->
                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-user"></i>
                                        <input id="name" type="text" class="form-control mb-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your full name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-envelope"></i>
                                        <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
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
                                <div class="form-group">
                                   <select class="form-control mb-0" id="selectge" name="gender">
                                      <option>Gender</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __('Profile Picture') }}</label>
                                        <input id="pp" class="form-control mb-0" type="file" class="form-control @error('pp') is-invalid @enderror" name="pp">
        
                                        @error('pp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-expeditedssl"></i>
                                        <input id="password" type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="inner-addon right-addon">
                                        <i class="fa fa-expeditedssl"></i>
                                        <input id="password-confirm" type="password" class="form-control mb-0" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                    </div>
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