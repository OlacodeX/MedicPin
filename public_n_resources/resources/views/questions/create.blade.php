@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card">
                        {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Have A Question?</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                                <hr>
                                <div class="">
                                    <div class="form-group">
                                       <label for="question">Your Question</label>
                                       <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                                    </div>
                                    @if (auth()->user()->role == 'Doctor')
                                    <div class="form-group">
                                       <label for="question">Who should answer?</label>
                                      <select class="form-control mb-0" id="selectex" name="expertise">
                                         <option value="All Doctors">All Doctors</option>
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
                                        
                                   @endif
                                   <div class="form-group">
                                     <select class="form-control mb-0" id="identity" name="identity">
                                        <option value="">--Reveal Your Identity?--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No, ask as anonymous</option>
                                     </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Ask Question</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
              @else
              <div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
                 <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
                 <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
              
              </div>
              @endif   
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="../privacy">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="../terms">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="../">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END -->
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'question' );
         </script> 
@endsection