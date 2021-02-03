@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->


     {!! Form::open(['action' => 'ConsortationsController@diag', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
**/ !!}
  <div class="">
     <div class="row">
        <div class="col-12">
           <h3 class="mb-4">Schedule Lab Test:</h3>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="">
              <label for="Test Name">Test Name</label>
              <select aria-multiselectable="true" multiple name="name[]" class="form-control" id="test_name">
                 <option>select</option>
                 <option value="one">select-2</option>
                 <option value="two">select-3</option>
                 <option value="three">select-4</option>
                 <option>select-5</option>
                 <option>select-6</option>
                 <option>select-7</option>
                 <option>select-8</option>
              </select> <br>
              <input type="hidden" name="p_pin" value="{{$detail->pin}}">
           </div><br>
           <p>
           <a href="#LabHistory" data-toggle="collapse" class="btn btn-primary">Lab History of Patient</a>
        </p>
              <div class="col-md-12 collapse" id="LabHistory">
               <div class="iq-card shadow-none mb-0">
               </div>
        </div>
     </div>
  </div>
  <button type="submit" class="btn btn-primary">Send Request To Lab Department</button>
  {!! Form::close() !!}

     <div class="">
      <div class="row">
         <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     @php
                         $detail = App\patients::where('pin', $pin)->first();
                     @endphp
                     <h4 class="card-title">Add New Record For {{$detail->name}}</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="row">
                     <div class="col-md-3">
                        <ul id="top-tabbar-vertical" class="p-0">
                           <li class="active" id="personal">
                              <a href="javascript:void();">
                              <i class="ri-lock-unlock-line text-primary"></i><span>Vitals</span>
                              </a>
                           </li>
                           <li id="contact">
                              <a href="javascript:void();">
                              <i class="ri-user-fill text-danger"></i><span>Diagnonosis</span>
                              </a>
                           </li>
                           <li id="official">
                              <a href="javascript:void();">
                              <i class="ri-camera-fill text-success"></i><span>Official</span>
                              </a>
                           </li>
                           <li id="payment">
                              <a href="javascript:void();">
                              <i class="ri-check-fill text-warning"></i><span>Payment</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-9">
                        {!! Form::open(['action' => 'PatientsController@store_drug', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                           <!-- fieldsets -->
                           <fieldset>
                              <div class="form-card text-left">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4">Patient's Vitals</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="name"> Name: *</label>
                                          <input type="text" class="form-control" id="name" name="name" value="{{$detail->name}}"/>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="pin">MedicPin: *</label>
                                          <input type="text" class="form-control" id="pin" name="pin" value="{{$detail->pin}}"/>
                                       </div>
                                    </div>
                                   <style>
    
                               div.col-lg-12.fie.one{
                                        display:none;
                                        margin-bottom: 10px;
                                    }
                                    #loadMoreeinputt {
                                        transition: all 600ms ease-in-out;
                                        -webkit-transition: all 600ms ease-in-out;
                                        -moz-transition: all 600ms ease-in-out;
                                        -o-transition: all 600ms ease-in-out;
                                        
                                    }
                                      button.btn.btn-info{
                                         background: transparent;
                                         border-radius: 0;
                                         font-size: 15px;
                                         margin-bottom: 15px;
                                         padding: 0px 20px;
                                      }
                                      .row,
                                      .col-lg-12{
                                         padding-left: 25px;
                                      }
                                      button.btn.btn-info label{
                                         font-size: 15px;
                                         color: #02818f;
                                      }
                                      input.form-control,
                                      select.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                      textarea.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                   </style>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><label for="Blood Group"><i class="fa fa-plus"></i> Blood Group</label></button>
                                       
                                       <div id="demo" class="collapse">
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option value="N/A">Select</option>
                                             <option value="O+">O+</option>
                                             <option value="O-">O-</option>
                                             <option value="A+">A+</option>
                                             <option value="A-">A-</option>
                                             <option value="AB+">AB+</option>
                                             <option value="AB-">AB-</option>
                                       </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><label for="bp"><i class="fa fa-plus"></i>Blood Pressure</label></button>
                                       
                                       <div id="demo1" class="collapse">
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><label for="h_rate"><i class="fa fa-plus"></i>Heart Rate</label></button>
                                          <div id="demo2" class="collapse">
                                          <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate in %">
                                          </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"><label for="genotype"><i class="fa fa-plus"></i>Genotype</label></button>
                                       <div id="demo3" class="collapse">
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option value="N/A">Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4"><label for="weight"><i class="fa fa-plus"></i>Weight</label></button>
                                       <div id="demo4" class="collapse">
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in kg">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5"><label for="height"><i class="fa fa-plus"></i>Height</label></button>
                                       <div id="demo5" class="collapse">
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height in cm">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6"><label for="temprature"><i class="fa fa-plus"></i>Temperature</label></button>
                                       <div id="demo6" class="collapse">
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature in Celsius">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7"><label for="height"><i class="fa fa-plus"></i>Oxygen Saturation</label></button>
                                      <div id="demo7" class="collapse">
                                      <input type="text" class="form-control" id="oxygen" name="oxygen" placeholder="Oxygen Saturation in %">
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8"><label for="temprature"><i class="fa fa-plus"></i>Glucose Level</label></button>
                                      <div id="demo8" class="collapse">
                                      <input type="text" class="form-control" id="glucose" name="glucose" placeholder="Glucose level in %">
                                      </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo9"><label for="height"><i class="fa fa-plus"></i>Respiratory Rate</label></button>
                                     <div id="demo9" class="collapse">
                                     <input type="text" class="form-control" id="r_rate" name="r_rate" placeholder="Respiratory rate in %">
                                     </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo10"><label for="temprature"><i class="fa fa-plus"></i>BMI</label></button>
                                     <div id="demo10" class="collapse">
                                     <input type="text" class="form-control" id="bmi" name="bmi" placeholder="BMI">
                                     </div>
                                  </div>
                                 </div>
                              </div>
                              </div>
                              
                              <button id="submit" type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                           </fieldset>
                           <fieldset>
                              <div class="form-card text-left">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4">Doctor's Diagnonosis:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo13"><label for="comment"><i class="fa fa-plus"></i>Doctor's Comment</label></button>
                                          <div id="demo13" class="collapse">
                                          <textarea class="form-control" id="pre" name="pre" placeholder="Doctor's Comment Based On Patient's Complaint and Medical History..."></textarea>
                                       </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                     <div class="form-group">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11"><label for="temprature"><i class="fa fa-plus"></i>Note</label></button>
                                        <div id="demo11" class="collapse">
                                        <textarea class="form-control" id="note" name="note" placeholder="General note on patient medical status"></textarea>
                                        </div>
                                     </div>
                                    </div>
                                     <div class="col-md-12">
                                      <div class="form-group">
                                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo15"><label for="temprature"><i class="fa fa-plus"></i>Diagnosis/Prescription</label></button>
                                         <div id="demo15" class="collapse">
                                             <div class="col-lg-12 fie one">
                                                <div class="row">
                                            <div class="col-md-6">
                                             <label>Sickness</label>
                                             <select class="form-control" id="sickness1" name="sickness1">
                                                <option>Select</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                             </select>

                                            </div>
                                            <div class="col-md-6">
                                             <label>Drug(s)</label>
                                             <select class="form-control" id="drug1" name="drug1">
                                                <option>Select</option>
                                                <option value="Lumartem">Lumartem</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                             </select>
                                            </div>
                                            <div class="col-md-6">
                                             <label>Dosage</label>
                                             <input type="text" name="dose1" id="" class="form-control" placeholder="Number of tablets">
                                             

                                            </div>
                                            <div class="col-md-6">
                                             <label>Frequency</label>
                                          <select class="form-control" id="" name="frequency1">
                                             <option>Select</option>
                                             <option value="Once/Day">Once/Day</option>
                                             <option value="2x/Day">2x/Day</option>
                                             <option value="3x/Day">3x/Day</option>
                                             <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                                          </select>
                                          </div><br>
                                       </div>
                                     </div>
                                       <div class="col-lg-12 fie one">
                                          <div class="row">
                                          <div class="col-md-6">
                                             <label>Sickness</label>
                                             <select class="form-control" id="sickness2" name="sickness2">
                                                <option>Select</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                                <option value="Malaria">Malaria</option>
                                             </select>

                                            </div>
                                            <div class="col-md-6">
                                             <label>Drug(s)</label>
                                             <select class="form-control" id="drug2" name="drug2">
                                                <option>Select</option>
                                                <option value="Lumartem">Lumartem</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                                <option value="Paracetamol">Paracetamol</option>
                                             </select>
                                            </div>
                                            <div class="col-md-6">
                                             <label>Dosage</label>
                                             <input type="text" name="dose2" id="" class="form-control" placeholder="Number of tablets">
                                             

                                            </div>
                                            <div class="col-md-6">
                                             <label>Frequency</label>
                                          <select class="form-control" id="" name="frequency2">
                                             <option>Select</option>
                                             <option value="Once/Day">Once/Day</option>
                                             <option value="2x/Day">2x/Day</option>
                                             <option value="3x/Day">3x/Day</option>
                                             <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                                          </select>
                                          </div>
                                       </div>
             
                                       </div><br>
                                       <div class="col-lg-12 fie one">
                                          <div class="row">
                                      <div class="col-md-6">
                                       <label>Sickness</label>
                                       <select class="form-control" id="sickness3" name="sickness3">
                                          <option>Select</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                          <option value="Malaria">Malaria</option>
                                       </select>

                                      </div>
                                      <div class="col-md-6">
                                       <label>Drug(s)</label>
                                       <select class="form-control" id="drug1" name="drug3">
                                          <option>Select</option>
                                          <option value="Lumartem">Lumartem</option>
                                          <option value="Paracetamol">Paracetamol</option>
                                          <option value="Paracetamol">Paracetamol</option>
                                          <option value="Paracetamol">Paracetamol</option>
                                          <option value="Paracetamol">Paracetamol</option>
                                          <option value="Paracetamol">Paracetamol</option>
                                       </select>
                                      </div>
                                      <div class="col-md-6">
                                       <label>Dosage</label>
                                       <input type="text" name="dose3" id="" class="form-control" placeholder="Number of tablets">
                                       

                                      </div>
                                      <div class="col-md-6">
                                       <label>Frequency</label>
                                    <select class="form-control" id="" name="frequency3">
                                       <option>Select</option>
                                       <option value="Once/Day">Once/Day</option>
                                       <option value="2x/Day">2x/Day</option>
                                       <option value="3x/Day">3x/Day</option>
                                       <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                                    </select>
                                    </div><br>
                                 </div>
                               </div>
                               <div class="col-lg-12 fie one">
                                  <div class="row">
                              <div class="col-md-6">
                               <label>Sickness</label>
                               <select class="form-control" id="sickness4" name="sickness4">
                                  <option>Select</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                                  <option value="Malaria">Malaria</option>
                               </select>

                              </div>
                              <div class="col-md-6">
                               <label>Drug(s)</label>
                               <select class="form-control" id="drug4" name="drug4">
                                  <option>Select</option>
                                  <option value="Lumartem">Lumartem</option>
                                  <option value="Paracetamol">Paracetamol</option>
                                  <option value="Paracetamol">Paracetamol</option>
                                  <option value="Paracetamol">Paracetamol</option>
                                  <option value="Paracetamol">Paracetamol</option>
                                  <option value="Paracetamol">Paracetamol</option>
                               </select>
                              </div>
                              <div class="col-md-6">
                               <label>Dosage</label>
                               <input type="text" name="dose4" id="" class="form-control" placeholder="Number of tablets">
                               

                              </div>
                              <div class="col-md-6">
                               <label>Frequency</label>
                            <select class="form-control" id="" name="frequency4">
                               <option>Select</option>
                               <option value="Once/Day">Once/Day</option>
                               <option value="2x/Day">2x/Day</option>
                               <option value="3x/Day">3x/Day</option>
                               <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                            </select>
                            </div><br>
                         </div>
                       </div>
                       <div class="col-lg-12 fie one">
                          <div class="row">
                      <div class="col-md-6">
                       <label>Sickness</label>
                       <select class="form-control" id="sickness5" name="sickness5">
                          <option>Select</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                          <option value="Malaria">Malaria</option>
                       </select>

                      </div>
                      <div class="col-md-6">
                       <label>Drug(s)</label>
                       <select class="form-control" id="drug5" name="drug5">
                          <option>Select</option>
                          <option value="Lumartem">Lumartem</option>
                          <option value="Paracetamol">Paracetamol</option>
                          <option value="Paracetamol">Paracetamol</option>
                          <option value="Paracetamol">Paracetamol</option>
                          <option value="Paracetamol">Paracetamol</option>
                          <option value="Paracetamol">Paracetamol</option>
                       </select>
                      </div>
                      <div class="col-md-6">
                       <label>Dosage</label>
                       <input type="text" name="dose5" id="" class="form-control" placeholder="Number of tablets">
                       

                      </div>
                      <div class="col-md-6">
                       <label>Frequency</label>
                    <select class="form-control" id="" name="frequency5">
                       <option>Select</option>
                       <option value="Once/Day">Once/Day</option>
                       <option value="2x/Day">2x/Day</option>
                       <option value="3x/Day">3x/Day</option>
                       <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                    </select>
                    </div><br>
                 </div>
               </div>
               <div class="col-lg-12 fie one">
                  <div class="row">
              <div class="col-md-6">
               <label>Sickness</label>
               <select class="form-control" id="sickness6" name="sickness6">
                  <option>Select</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
                  <option value="Malaria">Malaria</option>
               </select>

              </div>
              <div class="col-md-6">
               <label>Drug(s)</label>
               <select class="form-control" id="drug1" name="drug6">
                  <option>Select</option>
                  <option value="Lumartem">Lumartem</option>
                  <option value="Paracetamol">Paracetamol</option>
                  <option value="Paracetamol">Paracetamol</option>
                  <option value="Paracetamol">Paracetamol</option>
                  <option value="Paracetamol">Paracetamol</option>
                  <option value="Paracetamol">Paracetamol</option>
               </select>
              </div>
              <div class="col-md-6">
               <label>Dosage</label>
               <input type="text" name="dose6" id="" class="form-control" placeholder="Number of tablets">
               

              </div>
              <div class="col-md-6">
               <label>Frequency</label>
            <select class="form-control" id="" name="frequency6">
               <option>Select</option>
               <option value="Once/Day">Once/Day</option>
               <option value="2x/Day">2x/Day</option>
               <option value="3x/Day">3x/Day</option>
               <option value="Pharmacist Discretion">Pharmacist Discretion</option>
            </select>
            </div><br>
         </div>
       </div>
                                       <a href="" id="loadMoreeinputt" class="btn btn-primary pull-left"><i class="fa fa-plus"></i>Add More Drugs</a>
                                  
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
                                    <div class="col-12">
                                       <h3 class="mb-4">Lab Test:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="empid">Employee Id: *</label>
                                          <input type="email" class="form-control" id="empid" name="empid" placeholder="Employee Id." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="desg">Designation: *</label>
                                          <input type="text" class="form-control" id="desg" name="desg" placeholder="Designation." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="accname">Departmrnt Name: *</label>
                                          <input type="text" class="form-control" id="accname" name="accname" placeholder="Departmrnt Name." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="workhour">Working Hour: *</label>
                                          <input type="text" class="form-control" id="workhour" name="workhour" placeholder="Working Hour." />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Submit" >Submit</button>
                              <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                           </fieldset>
                           <fieldset>
                              <div class="form-card text-left">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4 text-left">Payment:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="panno">Pan No: *</label>
                                          <input type="text" class="form-control" id="panno" name="panno" placeholder="Pan No." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="accno">Account No: *</label>
                                          <input type="text" class="form-control" id="accno" name="accno" placeholder="Account No." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="holname">Account Holder Name: *</label>
                                          <input type="text" class="form-control" id="holname" name="accname" placeholder="Account Holder Name." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="ifsc">IFSC Code: *</label>
                                          <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code." />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-----

     <div>
        <div class="">
           <div class="row">
              <!---
              <div class="col-lg-3">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Add New Patient</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">--->
                        {!! Form::open(['action' => 'RecordsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                        @include('inc.messages')
                        <!-- 
                          <div class="form-group">
                                <div class="add-img-user profile-img-edit">
                                   <div class="p-image"> -->
                                     <!-- <h5 class="upload-button">file upload</h5> -->
                                     <!--<a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                     <input class="file-upload" type="file" accept="image/*" name="pp">
                                  </div>
                                </div>
                               <div class="img-extension mt-3">
                                  <div class="d-inline-block align-items-center">
                                      <span>Only</span>
                                     <a href="javascript:void();">.jpg</a>
                                     <a href="javascript:void();">.png</a>
                                     <a href="javascript:void();">.jpeg</a>
                                     <span>allowed</span>
                                  </div>
                               </div>
                             </div> -->
                             <!----
                             <div class="form-group">
                                <label>User Role:</label>
                                <select class="form-control" id="selectuserrole">
                                   <option>Select</option>
                                   <option>Doctor</option>
                                   <option>Patient</option>
                                </select>
                             </div>---->
                                <!----
                             <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="selectuserrole" name="gender">
                                   <option>Select</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                             </div>
                       </div>
                    </div>
              </div>--->
              <!---
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">New Patient Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <!----
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="add">Address</label>
                                      <input type="text" class="form-control" name="add" id="add" placeholder="Street Address">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="mobno">Mobile Number:</label>
                                      <input type="text" class="form-control" id="number" name="number" placeholder="Mobile Number">
                                   </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                   </div>
                                </div>
                                <hr>---->
<!---
                                <h5 class="mb-3">Medical Records</h5>
                                <div class="row">
                                   
                                 <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                                   <style>
                                      button.btn.btn-info{
                                         background: transparent;
                                         border-radius: 0;
                                         font-size: 15px;
                                         margin-bottom: 15px;
                                         padding: 0px 20px;
                                      }
                                      .row,
                                      .col-lg-12{
                                         padding-left: 25px;
                                      }
                                      button.btn.btn-info label{
                                         font-size: 15px;
                                         color: #02818f;
                                      }
                                      input.form-control,
                                      select.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                      textarea.form-control{
                                         border-radius: 0;
                                         width: 200px;
                                      }
                                   </style>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><label for="Blood Group"><i class="fa fa-plus"></i> Blood Group</label></button>
                                       
                                       <div id="demo" class="collapse">
                                       <select class="form-control" id="selectbg" name="b_group">
                                          <option value="N/A">Select</option>
                                             <option value="O+">O+</option>
                                             <option value="O-">O-</option>
                                             <option value="A+">A+</option>
                                             <option value="A-">A-</option>
                                             <option value="AB+">AB+</option>
                                             <option value="AB-">AB-</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><label for="bp"><i class="fa fa-plus"></i>Blood Pressure</label></button>
                                       
                                       <div id="demo1" class="collapse">
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><label for="h_rate"><i class="fa fa-plus"></i>Heart Rate</label></button>
                                          <div id="demo2" class="collapse">
                                          <input type="text" class="form-control" id="h_rate" name="h_rate" placeholder="Heart Rate in %">
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"><label for="genotype"><i class="fa fa-plus"></i>Genotype</label></button>
                                       <div id="demo3" class="collapse">
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option value="N/A">Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4"><label for="weight"><i class="fa fa-plus"></i>Weight</label></button>
                                       <div id="demo4" class="collapse">
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in kg">
                                       </div>
                                    </div>
                                     <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5"><label for="height"><i class="fa fa-plus"></i>Height</label></button>
                                       <div id="demo5" class="collapse">
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height in cm">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6"><label for="temprature"><i class="fa fa-plus"></i>Temperature</label></button>
                                       <div id="demo6" class="collapse">
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature in Celsius">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7"><label for="height"><i class="fa fa-plus"></i>Oxygen Saturation</label></button>
                                      <div id="demo7" class="collapse">
                                      <input type="text" class="form-control" id="oxygen" name="oxygen" placeholder="Oxygen Saturation in %">
                                      </div>
                                    </div>
                                   <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8"><label for="temprature"><i class="fa fa-plus"></i>Glucose Level</label></button>
                                      <div id="demo8" class="collapse">
                                      <input type="text" class="form-control" id="glucose" name="glucose" placeholder="Glucose level in %">
                                      </div>
                                    </div>
                                   <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo9"><label for="height"><i class="fa fa-plus"></i>Respiratory Rate</label></button>
                                     <div id="demo9" class="collapse">
                                     <input type="text" class="form-control" id="r_rate" name="r_rate" placeholder="Respiratory rate in %">
                                     </div>
                                    </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo10"><label for="temprature"><i class="fa fa-plus"></i>BMI</label></button>
                                     <div id="demo10" class="collapse">
                                     <input type="text" class="form-control" id="bmi" name="bmi" placeholder="BMI">
                                     </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11"><label for="temprature"><i class="fa fa-plus"></i>Note</label></button>
                                     <div id="demo11" class="collapse">
                                     <textarea class="form-control" id="note" name="note" placeholder="General note on patient medical status"></textarea>
                                     </div>
                                    </div>
                                  <div class="form-group col-md-6">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo12"><label for="temprature"><i class="fa fa-plus"></i>Drug Prescription</label></button>
                                     <div id="demo12" class="collapse">
                                     <textarea class="form-control" id="pre" name="pre" placeholder="Drug prescriptions..."></textarea>
                                     </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Record</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
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
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'pre' );
            CKEDITOR.replace( 'note' );
         </script> 
@endsection