@extends('layouts.main')

@section('content')
@include('inc.navmain')




     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="row">
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Drug Cover Image</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        {!! Form::open(['action' => 'PatientsController@store_drug', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image">
                                      <h5 class="upload-button">Image upload</h5> 
                                     <br><input class="iq-bg-primary" type="file" accept="image/*" name="img">
                                  </div>
                                </div>
                                <style>
                                   input.iq-bg-primary{
                                      width: 200px;
                                   }
                                </style>
                               <div class="img-extension mt-3">
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div>
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                              <!-- 
                             <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="selectuserrole" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                             </div> -->
                       </div>
                    </div>
              </div>
              <div class="col-lg-9">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">New Drug Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Drug Name">
                                      </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="category">Category:</label>
                                      <select class="form-control" id="selectcat" name="category">
                                         <option>--Select Drug--</option>
                                         <option value="5-alpha-reductase inhibitors">5-alpha-reductase inhibitors</option>
                                         <option value="5-aminosalicylates">5-aminosalicylates</option>
                                         <option value="5HT3 receptor antagonists">5HT3 receptor antagonists</option>

                                         <option value="Ace inhibitors with calcium channel blocking agents">Ace inhibitors with calcium channel blocking agents</option>
                                         <option value="Ace inhibitors with thiazides">Ace inhibitors with thiazides</option>
                                         <option value="Adamantane antivirals">Adamantane antivirals</option>
                                         <option value="Adrenal cortical steroids"> Adrenal cortical steroids</option>
                                         <option value="Adrenal corticosteroid inhibitors"> Adrenal corticosteroid inhibitors</option>
                                         <option value="Adrenergic bronchodilators">Adrenergic bronchodilators</option>
                                         <option value="Agents for hypertensive emergencies">Agents for hypertensive emergencies</option>
                                         <option value="Agents for pulmonary hypertension">Agents for pulmonary hypertension</option>
                                         <option value="Aldosterone receptor antagonists">Aldosterone receptor antagonists</option>
                                         <option value="Alkylating agents">Alkylating agents</option>
                                         <option value="Allergenics">Allergenics</option>
                                         <option value="Alpha-glucosidase inhibitors">Alpha-glucosidase inhibitors</option>
                                         <option value="Alternative medicines">Alternative medicines</option>
                                         <option value="Amebicides">Amebicides</option>
                                         <option value="Aminoglycosides">Aminoglycosides</option>

                                         <option value="Aminopenicillins">Aminopenicillins</option>
                                         <option value="Ampa receptor antagonists">Ampa receptor antagonists</option>
                                         <option value="Analgesic combinations">Analgesic combinations</option>
                                         <option value="Antibiotics/antineoplastics">Antibiotics/antineoplastics</option>
                                         <option value="Anticholinergic antiemetics">Anticholinergic antiemetics</option>
                                         <option value="Anticholinergic antiparkinson agents">Anticholinergic antiparkinson agents</option>
                                         <option value="Anticholinergic bronchodilators">Anticholinergic bronchodilators </option>
                                         <option value="Anticholinergic chronotropic agents">Anticholinergic chronotropic agents</option>
                                         <option value="Angiotensin ii inhibitors with thiazides">Angiotensin ii inhibitors with thiazides</option>
                                         <option value="Angiotensin receptor blockers">Angiotensin receptor blockers</option>
                                         <option value="Angiotensin receptor blockers and neprilysin inhibitors">Angiotensin receptor blockers and neprilysin inhibitors</option>
                                         <option value="Anorectal preparations">Anorectal preparations</option>

                                         <option value="Anorexiants">Anorexiants</option>
                                         <option value="Antacids">Antacids</option>
                                         <option value="Anthelmintics">Anthelmintics</option>
                                         <option value="Anticholinergics/antispasmodics">Anticholinergics/antispasmodics</option>
                                         <option value="Anti-infectives">Anti-infectives</option>
                                         <option value="Anti-pd-1 monoclonal antibodies">Anti-pd-1 monoclonal antibodies</option>
                                         <option value="Antiadrenergic agents (central) with thiazides">Antiadrenergic agents (central) with thiazides</option>
                                         <option value="Antiadrenergic agents (peripheral) with thiazides">Antiadrenergic agents (peripheral) with thiazides</option>
                                         <option value="Angiotensin ii inhibitors with thiazides">Angiotensin ii inhibitors with thiazides</option>
                                         <option value="Antiadrenergic agents, centrally acting">Antiadrenergic agents, centrally acting</option>
                                         <option value="Antiadrenergic agents, peripherally acting">Antiadrenergic agents, peripherally acting</option>
                                         <option value="Antiandrogens">Antiandrogens</option>
                                         
                                         <option value="Antianginal agents">Antianginal agents</option>
                                         <option value="Antiarrhythmic agents">Antiarrhythmic agents</option>
                                         <option value="Antiasthmatic combinations">Antiasthmatic combinations</option>
                                         <option value="Anticoagulant reversal agents">Anticoagulant reversal agents</option>
                                         <option value="Anticoagulants">Anticoagulants</option>
                                         <option value="Anticonvulsants">Anticonvulsants</option>
                                         <option value="Antidepressants">Antidepressants</option>
                                         <option value="Antidiabetic agents">Antidiabetic agents</option>
                                         <option value="Antidiabetic combinations">Antidiabetic combinations</option>
                                      
                                      
                                      </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="price">Price:</label>
                                      <small> Specify in Naira</small>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-dollar"></i>
                                      <input type="text" class="form-control" id="price" placeholder="How much do you sell?" name="price">
                                      </div>
                                   </div>
                                </div>
                                <hr>
                                <!----
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="Blood Group">Blood Group</label>
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option>Select</option>
                                          <option value="O+">O+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB+">AB+</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="bp">Blood Pressure</label>
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="h_rate">Heart Rate</label>
                                       <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="genotype">Genotype</label>
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option>Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="weight">Weight</label>
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="height">Height</label>
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="temprature">Temperature</label>
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature">
                                    </div>
                                </div>
                                ----->
                                <button type="submit" class="btn btn-primary">Add Drug</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
        </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:80px;">
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
@endsection