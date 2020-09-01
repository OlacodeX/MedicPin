@extends('layouts.main')

@section('content')
@include('inc.navmain')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Add Operation</h4>
               </div>
            </div>
            <div class="iq-card-body">
                @include('inc.messages')
                {!! Form::open(['action' => 'HospitalController@store_op', 'method' => 'POST', 'class' => 'text-center mt-4', 'id' => 'form-wizard1', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                **/ !!}
                  <ul id="top-tab-list" class="p-0">
                     <li class="active" id="account">
                        <a href="javascript:void();">
                        <i class="ri-lock-unlock-line"></i><span>Details</span>
                        </a>
                     </li>
                     <li id="personal">
                        <a href="javascript:void();">
                        <i class="ri-user-fill"></i><span>Medical Team</span>
                        </a>
                     </li>
                     <li id="payment">
                        <a href="javascript:void();">
                        <i class="ri-camera-fill"></i><span>Report</span>
                        </a>
                     </li>
                  </ul>
                  <!-- fieldsets -->
                  <fieldset>
                     <div class="form-card text-left">
                        <div class="row">
                           <div class="col-7">
                              <h3 class="mb-4">Operation Details:</h3>
                           </div>
                           <div class="col-5">
                              <h2 class="steps">Step 1 - 3</h2>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="mb-4">Operation Details:</h5>
                            </div> 
                            <div class="col-md-12">
                               <div class="form-group">
                                  <label>Patient Pin: *</label>
                                  <div class="inner-addon right-addon">
                                      <i class="fa fa-expeditedssl"></i>
                                  <input type="text" class="form-control" name="pin" placeholder="Enter patient medicpin here...." />
                               </div>
                               </div>
                            </div>
                            <div class="col-md-12">
                            <p>Patient not on MedicPin? Input Information And We Will Send An Invite</p>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="name">Name:</label>
                               <div class="inner-addon right-addon">
                                   <i class="fa fa-user"></i>
                               <input type="text" class="form-control" id="name" name="name" placeholder="Patient Name">
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Gender">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="add">Address</label>
                               <div class="inner-addon right-addon">
                                   <i class="fa fa-address-book-o"></i>
                               <input type="text" class="form-control" name="add" id="add" placeholder="Street Address">
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="mobno">Mobile Number:</label>
                               <div class="inner-addon right-addon">
                                   <i class="fa fa-phone"></i>
                               <input type="text" class="form-control" id="number" name="number" placeholder="Mobile Number">
                               </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                               <label for="email">Email:</label>
                               <div class="inner-addon right-addon">
                                   <i class="fa fa-envelope"></i>
                               <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                               
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mb-4">Operation Details:</h5>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                            {{Form::label('type', 'Operation Type')}}
                            <select onchange="yesnoCheck(this);" class="form-control" name="type">
                                <option value="N/A">-Operation Type-</option>
                                <option value="Bariatric Surgery">Bariatric Surgery</option>
                                <option value="Breast Surgery">Breast Surgery</option>
                                <option value="Colon and Rectal Surgery">Colon and Rectal Surgery</option>
                                <option value="Endocrine Surgery">Endocrine Surgery</option>
                                <option value="General Surgery">General Surgery</option>
                                <option value="Gynecological Surgery">Gynecological Surgery</option>
                                <option value="Hand Surgery">Hand Surgery</option>
                                <option value="Head and Neck Surgery">Head and Neck Surgery</option>
                                <option value="Hernia Surgery">Hernia Surgery</option>
                                <option value="Neurosurgery">Neurosurgery</option>
                                <option value="Orthopedic Surgery">Orthopedic Surgery</option>
                                <option value="Ophthalmological Surgery">Ophthalmological Surgery</option>
                                <option value="Outpatient Surgery">Outpatient Surgery</option>
                                <option value="Pediatric Surgery">Pediatric Surgery</option>
                                <option value="Plastic and Reconstructive Surgery">Plastic and Reconstructive Surgery</option>
                                <option value="Robotic Surgery">Robotic Surgery</option>
                                <option value="Thoracic Surgery">Thoracic Surgery</option>
                                <option value="Trauma Surgery">Trauma Surgery</option>
                                <option value="Urologic Surgery">Urologic Surgery</option>
                                <option value="Vascular Surgery">Vascular Surgery</option>
                                <option value="Minimally Invasive Surgery">Minimally Invasive Surgery</option>
                            </select>
                        </div>
                        <div id="Breast" style="display: none;">
                           {{Form::label('main operation', 'Main Operation')}}
                           
                           <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                               {{Form::select('disease1', ['N/A' => '-select-','Breast augmentation surgery' => 'Breast augmentation surgery','Breast reduction surgery' => 'Breast reduction surgery'], 'N/A', ['class' => 'form-control'])}}
                          
                            </div>
                            <div id="Colon" style="display: none;">
                               {{Form::label('main operation', 'Main Operation')}}
                               
                               <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                   {{Form::select('disease2', ['N/A' => '-select-','Anal cancer' => 'Anal cancer','Anal condyloma' => 'Anal condyloma','Anal Fissure' => 'Anal Fissure',
                                   'Anal Fistula' => 'Anal Fistula','Anal incontinence' => 'Anal incontinence','Anal sphincter repair' => 'Anal sphincter repair','Anorectal disease' => 'Anorectal disease','Colon cancer' => 'Colon cancer','Diverticular disease' => 'Diverticular disease','Hemorrhoids' => 'Hemorrhoids','Hereditary colon and rectal cancer' => 'Hereditary colon and rectal cancer','Inflammatory bowel disease (IBS)' => 'Inflammatory bowel disease (IBS)','Polyps' => 'Polyps','Rectal cancer' => 'Rectal cancer','Rectal prolapse' => 'Rectal prolapse'], 'N/A', ['class' => 'form-control'])}}
                              
                                </div>
                        <div id="Endocrine" style="display: none;">
                           {{Form::label('main operation', 'Main Operation')}}
                           
                           <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                               {{Form::select('disease3', ['N/A' => '-select-','Thyroid surgery' => 'Thyroid surgery','Minimally invasive parathryoidectomy' => 'Minimally invasive parathryoidectomy','Laparoscopic adrenalectomy' => 'Laparoscopic adrenalectomy'], 'N/A', ['class' => 'form-control'])}}
                          
                            </div>
                            <div id="Gynecological" style="display: none;">
                               {{Form::label('main operation', 'Main Operation')}}
                               
                               <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                   {{Form::select('disease4', ['N/A' => '-select-','Endometrial Ablation' => 'Endometrial Ablation','Gynecologic Cancer Surgery' => 'Gynecologic Cancer Surgery','Interventional Radiology' => 'Interventional Radiology',
                                   'Tubal Ligation' => 'Tubal Ligation','UAE' => 'UAE'], 'N/A', ['class' => 'form-control'])}}
                              
                                </div>
                                <div id="Orthopedic" style="display: none;">
                                   {{Form::label('main operation', 'Main Operation')}}
                                   
                                   <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                       {{Form::select('disease5', ['N/A' => '-select-','Achilles Tear Surgery' => 'Achilles Tear Surgery','Arthroscopic Surgery' => 'Arthroscopic Surgery','Meniscus Repair Surgery' => 'Meniscus Repair Surgery',
                                       'Open-Knee Surgery' => 'Open-Knee Surgery','Shoulder Surgery' => 'Shoulder Surgery','Spinal Surgery' => 'Spinal Surgery'], 'N/A', ['class' => 'form-control'])}}
                                  
                                    </div>
                                    <div id="Out" style="display: none;">
                                       {{Form::label('main operation', 'Main Operation')}}
                                       <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                           {{Form::select('disease6', ['N/A' => '-select-','Arthroscopy' => 'Arthroscopy','Breast Biopsy' => 'Breast Biopsy','Burn Excision/Debridement' => 'Burn Excision/Debridement','Tonsillectomy' => 'Tonsillectomy','Tubal Ligation' => 'Tubal Ligation','Vasectomy' => 'Vasectomy','Ventral Hernia' => 'Ventral Hernia','Cataract Surgery' => 'Cataract Surgery','Caesarean Section' => 'Caesarean Section','Circumcision' => 'Circumcision','Dental Restoration' => 'Dental Restoration','Gastric Bypass' => 'Gastric Bypass','Head and Neck Surgery' => 'Head and Neck Surgery','Hysterectomy' => 'Hysterectomy','Knee/Hip Replacement' => 'Knee/Hip Replacement','Laparoscopy' => 'Laparoscopy','Liver Resection' => 'Liver Resection','Lung Resection' => 'Lung Resection','Major Abdominal Procedure' => 'Major Abdominal Procedure','Major Vascular Surgery' => 'Major Vascular Surgery','Mastectomy (Radical)' => 'Mastectomy (Radical)','Mediport Insertion or Removal' => 'Mediport Insertion or Removal','Prostate Surgery' => 'Prostate Surgery','Removal of Hardware (Plates and Screws)' => 'Removal of Hardware (Plates and Screws)','Sinus Endoscopy' => 'Sinus Endoscopy'], 'N/A', ['class' => 'form-control'])}}
                                      
                                        </div>
                                        <div id="Robotic" style="display: none;">
                                           {{Form::label('main operation', 'Main Operation')}}
                                           
                                           <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                               {{Form::select('disease7', ['N/A' => '-select-',' Hysterectomies' => ' Hysterectomies','Myomectomies' => 'Myomectomies','Hiatal and hernia repairs' => 'Hiatal and hernia repairs','GERD related diagnoses (reflux)' => 'GERD related diagnoses (reflux)','Urological Surgery' => 'Urological Surgery',' Gynecological Surgery' => ' Gynecological Surgery',' Thoracic Surgery' => 'Thoracic Surgery',
                                               'Breast Surgery' => 'Breast Surgery','Adrenal gland removal' => 'Adrenal gland removal','Esophageal stricture' => 'Esophageal stricture','Colorectal Surgery' => 'Colorectal Surgery','Gallbladder removal (cholecystectomy)' => 'Gallbladder removal (cholecystectomy)'], 'N/A', ['class' => 'form-control'])}}
                                          
                                            </div>
                                            <div id="Thoracic" style="display: none;">
                                               {{Form::label('main operation', 'Main Operation')}}
                                               <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                                   {{Form::select('disease8', ['N/A' => '-select-','Lung Airway Surgery' => 'Lung Airway Surgery','Pleural Tumors Surgery' => 'Pleural Tumors Surgery','Pulmonary Lobectomy and Other Lung Cancer Surgery' => 'Pulmonary Lobectomy and Other Lung Cancer Surgery'], 'N/A', ['class' => 'form-control'])}}
                                              
                                            </div>
                                            <div id="Vascular" style="display: none;">
                                               {{Form::label('main operation', 'Main Operation')}}
                                               <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
                                                   {{Form::select('disease9', ['N/A' => '-select-','Angioplasty and stents' => 'Angioplasty and stents','Aneurysm repair' => 'Aneurysm repair','Carotid endarterectomy' => 'Carotid endarterectomy',
                                                   'Lower extremity/limb salvage' => 'Lower extremity/limb salvage','Thrombolytic therapy' => 'Thrombolytic therapy'], 'N/A', ['class' => 'form-control'])}}
                                              
                                                </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Operation Status">Operation Status</label>
                                <select class="form-control" id="status" name="status">
                                   <option>Select</option>
                                   <option value="Successful">Successful</option>
                                   <option value="Not Successful">Not Successful</option>
                                   <option value="Cancelled">Cancelled</option>
                                </select>

                            </div>
                        </div>
                        </div>
                     </div>
                     
                     <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                  </fieldset>
                  <fieldset>
                     <div class="form-card text-left">
                        <div class="row">
                           <div class="col-7">
                              <h3 class="mb-4">Medical Team:</h3>
                           </div>
                           <div class="col-5">
                              <h2 class="steps">Step 2 - 3</h2>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Doctor(s) pin: *</label>
                                 <p>You Can Add Up To Five(5) Doctors</p>
                                 <input type="text" class="form-control fie" name="doc_pin1" placeholder="Enter Doctor Pin Here" required /> <br>
                                 <input type="text" class="form-control fie" name="doc_pin2" placeholder="Enter Doctor Pin Here" /><br>
                                 <input type="text" class="form-control fie" name="doc_pin3" placeholder="Enter Doctor Pin Here" /><br>
                                 <input type="text" class="form-control fie" name="doc_pin4" placeholder="Enter Doctor Pin Here" /><br>
                                 <input type="text" class="form-control fie" name="doc_pin5" placeholder="Enter Doctor Pin Here" />
                                <style>
                                       
                                    input.form-control.fie{
                                        display:none;
                                        margin-bottom: 3px;
                                    }
                                    #loadMoreeinput {
                                        transition: all 600ms ease-in-out;
                                        -webkit-transition: all 600ms ease-in-out;
                                        -moz-transition: all 600ms ease-in-out;
                                        -o-transition: all 600ms ease-in-out;
                                        
                                    }
                                </style>
                                 <div class="text-center col-sm-12">
                                     <a href="" id="loadMoreeinput" class="btn btn-info pull-left"><i class="fa fa-plus"></i>Add More Fields</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                     <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                  </fieldset>
                  <fieldset>
                     <div class="form-card text-left">
                        <div class="row">
                           <div class="col-7">
                              <h3 class="mb-4">Upload Operation Report:</h3>
                           </div>
                           <div class="col-5">
                              <h2 class="steps">Step 3 - 3</h2>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile" name="report">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                     </div>
                    </div>
                    
                     <button type="submit" name="" class="btn btn-primary next action-button float-right" value="Submit" >Submit</button>
                     <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                  </fieldset>
                  {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</div>

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
            Copyright 2020 <a href="#">XRay</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->
@endsection