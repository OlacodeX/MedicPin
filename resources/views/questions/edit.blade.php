@extends('layouts.maininnerr')

@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card" style="padding-bottom: 30px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Your Question.</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                                             form tag and set it to multipart/form-data--->
                        {!! Form::open(['action' => ['QuestionsController@update', $question->id],'method' => 'POST'])!!}
                        @include('inc.messages')
                        <div class="form-group">
                           <label for="question">Edit Question</label>
                           {!!Form::textarea('question', $question->question, ['class' => 'form-control', 'id' =>'question'], 'required')!!}
                        </div>
                        @if ($question->question_cat !== '')
                        <div class="form-group">
                           <label for="question">Who should answer?</label>
                          <select class="form-control mb-0" id="selectex" name="expertise">
                          <option value="{{$question->question_cat}}">{{$question->question_cat}}</option>
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
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update Question', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                        {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'question' );
                    </script> 
                                <hr>
                          </div>
                       </div>
                    </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END -->
@endsection