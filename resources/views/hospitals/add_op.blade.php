@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Operation Record</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Operation Record</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   

   <div class="col-md-12">
            @include('inc.messages')
            {!! Form::open(['action' => 'HospitalController@store_op', 'method' => 'POST', 'id' => 'form-wizard1', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
            **/ !!}
      <div class="card">
         <div class="card-header">
            <h4 class="card-title"><b>Patient Details</b></h4>
         </div>
         <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-focus">
                                 <div class="inner-addon right-addon">
                                     <i class="fa fa-expeditedssl"></i>
                                 <input type="text" class="form-control floating" name="pin" placeholder="Enter patient medicpin here...." />
                                 </div>
                                 <label class="focus-label">Patient Pin: *</label>
                              </div>
                           </div>
                           <div class="col-md-12">
                           <p>Patient not on MedicPin? Input Information And We Will Send An Invite</p>
                           </div>
                       <div class="col-md-6">
                           <div class="form-group form-focus">
                              <div class="inner-addon right-addon">
                                  <i class="fa fa-user"></i>
                              <input type="text" class="form-control floating" id="name" name="name" placeholder="Patient Name">
                              </div>
                              <label for="name" class="focus-label">Name:</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group form-focus">
                               
                               <select class="form-control floating" id="gender" name="gender">
                                  <option>Select gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group form-focus">
                              <div class="inner-addon right-addon">
                                  <i class="fa fa-user"></i>
                              <input type="text" class="form-control floating" name="add" id="add" placeholder="Street Address">
                              </div>
                              <label for="add" class="focus-label">Address</label>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group form-focus">
                              <div class="inner-addon right-addon">
                                  <i class="fa fa-phone"></i>
                              <input type="text" class="form-control floating" id="number" name="number" placeholder="Mobile Number">
                              </div>
                              <label for="mobno" class="focus-label">Mobile Number:</label>
                           </div>
                       </div>
                           <div class="col-md-6">
                               <div class="form-group form-focus">
                              <div class="inner-addon right-addon">
                                  <i class="fa fa-envelope"></i>
                              <input type="email" class="form-control floating" id="email" placeholder="Email" name="email">
                              
                                   </div>
                                   <label for="email" class="focus-label">Email:</label>
                               </div>
                           </div>
                        </div>
         </div>
      </div>
      
                           <div class="card">
                              <div class="card-header">
                                 <h4 class="card-title"><b> Operation Details</b></h4>
                              </div>
                              <div class="card-body">
                              <div class="row">
                           
                           <div class="col-md-6">
                               <div class="form-group form-focus">
                           
                           <select onchange="yesnoCheck(this);" class="form-control" name="type">
                               <option value="N/A">-Select Operation Type-</option>
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
                           <select class="form-control" id="status" name="status">
                              <option>Select Operation Status</option>
                              <option value="Successful">Successful</option>
                              <option value="Not Successful">Not Successful</option>
                              <option value="Cancelled">Cancelled</option>
                           </select>

                       </div>
                   </div>
                        </div>
                     </div>
                  </div>

                        
      <div class="card" style="margin-top: 15px;">
         <div class="card-header">
            <h5 class="card-title"><b>Medical Team</b></h5>
         </div>
         <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Doctor(s) pin: *</label>
                                 <p>You Can Add Up To Five(5) Doctors</p>
                                 <input type="text" class="form-control fie floating" name="doc_pin1" placeholder="Enter Doctor Pin Here" required /><br>
                                  
                                 <input type="text" class="form-control fie floating" name="doc_pin2" placeholder="Enter Doctor Pin Here" /><br>
                                 
                                 <input type="text" class="form-control fie floating" name="doc_pin3" placeholder="Enter Doctor Pin Here" /><br>
                                 
                                 <input type="text" class="form-control fie floating" name="doc_pin4" placeholder="Enter Doctor Pin Here" /><br>
                                 
                                 <input type="text" class="form-control fie floating" name="doc_pin5" placeholder="Enter Doctor Pin Here" />
                                
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
                                     <a href="" id="loadMoreeinput" class="btn bg-info-light pull-left"><i class="fa fa-plus"></i>Add More Fields</a>
                                 </div>
                              </div>
                        </div>
                        </div>
                     </div>
                  </div>

                     
                        
      <div class="card" style="margin-top: 15px;">
         <div class="card-header">
            <h5 class="card-title"><b>Upload Operation Report And Submit Form</b></h5>
         </div>
         <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-focus">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="customFile" name="report">
                                       <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                              </div>
                              </div>
                        </div>
                        </div>
                        <button type="submit" name="" class="btn btn-sm bg-info-light" value="Submit" >Submit Form</button>
                     
                  </div>
                        
                           {!! Form::close() !!}
                        </div>
      </div>
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

<script>  
   function yesnoCheck(that) {
     //for reg page
     if (that.value == "Doctor") {
         document.getElementById("selectex").style.display = "block";
     } else {
         document.getElementById("selectex").style.display = "none";
     }
     if (that.value == "Married") {
         document.getElementById("children").style.display = "block";
     } else {
         document.getElementById("children").style.display = "none";
     }
     if (that.value == "Divorced") {
         document.getElementById("children").style.display = "block";
     } else {
         document.getElementById("children").style.display = "none";
     }
     if (that.value == "Widowed") {
         document.getElementById("children").style.display = "block";
     } else {
         document.getElementById("children").style.display = "none";
     }
     if (that.value == "HMO") {
         document.getElementById("hmoname").style.display = "block";
         document.getElementById("role").style.display = "none";
         document.getElementById("m_status").style.display = "none";
     } else {
         document.getElementById("hmoname").style.display = "none";
     }
     if (that.value == "Organization") {
         document.getElementById("orgname").style.display = "block";
         document.getElementById("role").style.display = "none"
         document.getElementById("m_status").style.display = "none";
     } else {
         document.getElementById("orgname").style.display = "none";
     }
     if (that.value == "Personal/Individual") {
        document.getElementById("role").style.display = "block";
         document.getElementById("m_status").style.display = "block";
     } 
     if (that.value == "Patient") {
         document.getElementById("nhis").style.display = "block";
         document.getElementById("add").style.display = "block";
         document.getElementById("username").style.display = "block";
     } else {
         document.getElementById("nhis").style.display = "none";
         document.getElementById("add").style.display = "none";
         document.getElementById("username").style.display = "none";
     }
     if (that.value == "NHIS") {
        document.getElementById("nhiss").style.display = "block";
     } else {
         document.getElementById("nhiss").style.display = "none";
     }


     if (that.value == "Breast Surgery") {
         document.getElementById("Breast").style.display = "block";
         document.getElementById("Breast").style.paddingTop = "16px";
     } else {
         document.getElementById("Breast").style.display = "none";
         document.getElementById("Breast").style.paddingTop = "0";
     }
     if (that.value == "Colon and Rectal Surgery") {
         document.getElementById("Colon").style.display = "block";
         document.getElementById("Colon").style.paddingTop = "16px";
     } else {
         document.getElementById("Colon").style.display = "none";
         document.getElementById("Colon").style.paddingTop = "0";
     }
     if (that.value == "Endocrine Surgery") {
         document.getElementById("Endocrine").style.display = "block";
         document.getElementById("Endocrine").style.paddingTop = "16px";
     } else {
         document.getElementById("Endocrine").style.display = "none";
         document.getElementById("Endocrine").style.paddingTop = "0";
     }
     if (that.value == "Gynecological Surgery") {
         document.getElementById("Gynecological").style.display = "block";
         document.getElementById("Gynecological").style.paddingTop = "16px";
     } else {
         document.getElementById("Gynecological").style.display = "none";
         document.getElementById("Gynecological").style.paddingTop = "0";
     }
     if (that.value == "Orthopedic Surgery") {
         document.getElementById("Orthopedic").style.display = "block";
         document.getElementById("Orthopedic").style.paddingTop = "16px";
     } else {
         document.getElementById("Orthopedic").style.display = "none";
         document.getElementById("Orthopedic").style.paddingTop = "0";
     }
     if (that.value == "Outpatient Surgery") {
         document.getElementById("Out").style.display = "block";
         document.getElementById("Out").style.paddingTop = "16px";
     } else {
         document.getElementById("Out").style.display = "none";
         document.getElementById("Out").style.paddingTop = "0";
     }
     if (that.value == "Robotic Surgery") {
         document.getElementById("Robotic").style.display = "block";
         document.getElementById("Robotic").style.paddingTop = "16px";
     } else {
         document.getElementById("Robotic").style.display = "none";
         document.getElementById("Robotic").style.paddingTop = "0";
     }
     if (that.value == "Thoracic Surgery") {
         document.getElementById("Thoracic").style.display = "block";
         document.getElementById("Thoracic").style.paddingTop = "16px";
     } else {
         document.getElementById("Thoracic").style.display = "none";
         document.getElementById("Thoracic").style.paddingTop = "0";
     }
     if (that.value == "Vascular Surgery") {
         document.getElementById("Vascular").style.display = "block";
         document.getElementById("Vascular").style.paddingTop = "16px";
     } else {
         document.getElementById("Vascular").style.display = "none";
         document.getElementById("Vascular").style.paddingTop = "0";
     }
 }
 </script>
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