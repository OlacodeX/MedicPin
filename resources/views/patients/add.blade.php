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
                  <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Medical Records</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Add Medical Records for Patient</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-body pt-0">
      
         <!-- Tab Menu -->
         <nav class="user-tabs mb-4">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
               <li class="nav-item">
                  <a class="nav-link active" href="#pat_details" data-toggle="tab">Patient Details</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#pat_comp" data-toggle="tab">Patient Complain</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#pat_medical_records" data-toggle="tab"><span class="med-records">Bio Vitals</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#lab" data-toggle="tab">Request Lab Test</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#prescribe" data-toggle="tab">Diagnosis</a>
               </li>
            </ul>
         </nav>
         <!-- /Tab Menu -->
         
         <!-- Tab Content -->
         <div class="tab-content pt-0">
            
            <!-- Appointment Tab -->
            <div id="pat_details" class="tab-pane fade show active">
               <div class="card card-table mb-0">
                  <div class="card-body">
                     <div class="table-responsive">
                        <style>
                           table.table.mb-0.trr tr p{
                              font-size: 13px;
                              
                           }
                        </style>
                        <table class="table mb-0 trr">
                           <tbody>

                              @php
                                 $patient = App\patients::where('pin', $pin)->first();
                                 $user = App\User::where('pin', $pin)->first();
                              @endphp
                              <tr>
                                 <td>
                                    <h5 class="time-title p-0">Patient Name</h5>
                                    <p><a href="">
                                       @if ($patient->name == '')
                                       N/A
                                    @else
                                    {{$patient->name}}
                                       
                                    @endif 
                                    <span>
                                       @if ($patient->pin == '')
                                                 N/A
                                             @else
                                             {{$patient->pin}}
                                                 
                                             @endif
                                    </span></a></p>
                                 </td>                 
                                 <td>
                                    <h5 class="time-title p-0">Gender</h5>
                                    <p>
                                  @if ($patient->gender == '')
                                       N/A
                                   @else
                                   {{$patient->gender}}
                                       
                                   @endif   
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Age</h5>
                                    <p>
                                       @if (!empty($user))
                                              
                                       @if ($user->age == '')
                                           N/A
                                       @else
                                       @php
                                           $age = Carbon\Carbon::parse($user->age)->age; 
                                       @endphp
                                       {{$age}}yrs
                                           
                                       @endif
                                       @endif   
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Marital Status</h5>
                                    <p>
                                       @if (!empty($user))
                                       @if ($user->m_status == '')
                                           N/A
                                       @else
                                       {{$user->m_status}}
                                           
                                       @endif
                                           
                                       @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Children</h5>
                                    <p>
                                       @if (!empty($user))
                                        @if ($user->children == '')
                                            N/A
                                        @else
                                        {{$user->children}}
                                            
                                        @endif
                                             
                                        @endif
                                    </p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <h5 class="time-title p-0">Genotype</h5>
                                    <p>@if (!empty($record))
                                       @if ($record->genotype == '')
                                           N/A
                                       @else
                                       {{$record->genotype}}
                                           
                                       @endif
                                           
                                       @else
                                       {{'No Record'}}
                                           
                                       @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Blood Group</h5>
                                    <p>
                                       @if (!empty($record))
                                       @if ($record->b_group == '')
                                           N/A
                                       @else
                                       {{$record->b_group}}
                                           
                                       @endif
                                           
                                       @else
                                       {{'No Record'}}
                                           
                                       @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Address</h5>
                                    <p>
                                       @if ($patient->address == '')
                                              N/A
                                          @else
                                          {{$patient->address}}
                                              
                                          @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Phone Number</h5>
                                    <p> 
                                       @if (!empty($user))
                                       @if ($user->p_number == '')
                                           N/A
                                       @else
                                       {{$user->p_number}}
                                           
                                       @endif
                                       
                                       @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Category</h5>
                                    <p>
                                       @if (!empty($user))
                                       @if ($user->nhis == '')
                                           N/A
                                       @else
                                       {{$user->nhis}}
                                           
                                       @endif
                                          
                                       @endif
                                    </p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <h5 class="time-title p-0">NHIS Number</h5>
                                    <p>
                                       @if (!empty($user))
                                      @if ($user->nhis_number == '')
                                          N/A
                                      @else
                                      {{$user->nhis_number}}
                                          
                                      @endif
                                          
                                      @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Occupation</h5>
                                    <p>
                                       @if ($patient->occupation == '')
                                       N/A
                                   @else
                                   {{$patient->occupation}}
                                       
                                   @endif
                                    </p>
                                 </td>
                                 <td>
                                    <h5 class="time-title p-0">Next of Kin Name</h5>
                                    <p>
                                       @if ($patient->nok == '')
                                              N/A
                                          @else
                                          {{$patient->nok}}
                                              
                                          @endif
                                    </p>
                                 </td>
                                 
                                 <td>
                                    <h5 class="time-title p-0">Next of Kin Relationship</h5>
                                    <p>
                                       @if ($patient->nok_relation == '')
                                           N/A
                                       @else
                                       {{$patient->nok_relation}}
                                           
                                       @endif
                                    </p>
                                    
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Appointment Tab -->
            
            <!-- Prescription Tab -->
            <div class="tab-pane fade" id="pat_comp">
               <div class="card">
                  <div class="card-body">
                     {!! Form::open(['action' => 'RecordsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                     **/ !!}
                        <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                     
                      
               <h5>Medical Information</h5>
               <div class="row">
                  @php
                      $patients = App\Records::where('pin', $pin)->first();
                      
                  @endphp
                  @if (!empty($patients))
                  <div class="form-group col-md-4">
                     <label for="diabetes">Do you have diabetes?</label>
                     <div>
                     <select class="form-control" id="selectdiabetes" name="diabetes">
                       @if ($patients->diabetes == '')
                       <option value="">---Do you have diabetes?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                           
                       @else
                     <option value="{{$patients->diabetes}}">{{$patients->diabetes}}</option>
                           @if ($patients->diabetes == 'No')
                           <option value="Yes">Yes</option>
                               
                           @else
                           <option value="No">No</option>
                               
                           @endif
                       @endif
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="epilepsy">Do you have epilepsy?</label>
                     <div>
                     <select class="form-control" id="selectepilepsy" name="epilepsy">
                       @if ($patients->epilepsy == '')
                       <option value="">---Do you have epilepsy?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                           
                       @else
                     <option value="{{$patients->epilepsy}}">{{$patients->epilepsy}}</option>
                           @if ($patients->epilepsy == 'No')
                           <option value="Yes">Yes</option>
                               
                           @else
                           <option value="No">No</option>
                               
                           @endif
                       @endif
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="hypertension">Do you have hypertension?</label>
                     <div>
                     <select class="form-control" id="selecthypertension" name="hypertension">
                       @if ($patients->hypertension == '')
                       <option value="">---Do you have hypertension?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                           
                       @else
                     <option value="{{$patients->hypertension}}">{{$patients->hypertension}}</option>
                           @if ($patients->hypertension == 'No')
                           <option value="Yes">Yes</option>
                               
                           @else
                           <option value="No">No</option>
                               
                           @endif
                       @endif
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="sickle cell">Do you have sickle cell?</label>
                     <div>
                     <select class="form-control" id="selectsicklecell" name="sickle">
                       @if ($patients->s_cell == '')
                       <option value="">---Do you have sickle cell?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                           
                       @else
                     <option value="{{$patients->s_cell}}">{{$patients->s_cell}}</option>
                           @if ($patients->s_cell == 'No')
                           <option value="Yes">Yes</option>
                               
                           @else
                           <option value="No">No</option>
                               
                           @endif
                       @endif
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="allergies">Do you have allergies?</label>
                     <div>
                     <select class="form-control" id="selectallergies" name="allergies">
                       @if ($patients->allergies == '')
                       <option value="">---Do you have allergies?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                           
                       @else
                     <option value="{{$patients->allergies}}">{{$patients->allergies}}</option>
                           @if ($patients->allergies == 'No')
                           <option value="Yes">Yes</option>
                               
                           @else
                           <option value="No">No</option>
                               
                           @endif
                       @endif
                     </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="other">Any other medical issue?</label>
                     <div>
                        @if ($patients->other == '')
                        <input type="text" class="form-control" id="other" name="other" placeholder="Enter here.......">
                        @else
                     <input type="text" class="form-control" id="other" name="other" value="{{$patients->other}}">
                            
                        @endif
                  </div>
                  </div>
                      
                  @else
                  <div class="form-group col-md-4">
                     <label for="diabetes">Do you have diabetes?</label>
                     <div>
                     <select class="form-control" id="selectdiabetes" name="diabetes">
                       <option value="">---Do you have diabetes?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="epilepsy">Do you have epilepsy?</label>
                     <div>
                     <select class="form-control" id="selectepilepsy" name="epilepsy">
                       <option value="">---Do you have epilepsy?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="hypertension">Do you have hypertension?</label>
                     <div>
                     <select class="form-control" id="selecthypertension" name="hypertension">
                       <option value="">---Do you have hypertension?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="sickle cell">Do you have sickle cell?</label>
                     <div>
                     <select class="form-control" id="selectsicklecell" name="sickle">
                       <option value="">---Do you have sickle cell?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                     </select>
                     </div>
                  </div>
                    
                  <div class="form-group col-md-4">
                     <label for="allergies">Do you have allergies?</label>
                     <div>
                     <select class="form-control" id="selectallergies" name="allergies">
                       <option value="">---Do you have allergies?---</option>
                       <option value="No">No</option>
                       <option value="Yes">Yes</option>
                     </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="other">Any other medical issue?</label>
                     <div>
                        <input type="text" class="form-control" id="other" name="other" placeholder="Enter here.......">
                       
                  </div>
                  </div>
                      
                  @endif
               </div>
                      <style>
                         a.btn.btn-primary.pull-right{
                            margin-top: 0;
                         }
                      </style>
                  </div> 
               </div> 
               <div class="card">
                  <div class="card-body">
                  <label for="complain">Summary of Patient Complain</label>
                  <textarea class="form-control" id="pre" name="note" placeholder="Patient's Complaint..."></textarea><br>
                  
               
               <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Save</button>
               <a href="#complain" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Complain History</a>
               {!! Form::close() !!} 
            </div>
               </div>
               <div class="collapse" id="complain"> 
                  <div class="card">
                  <div class="card-body text-center">
                     <h5 class="card-title">Complain History</h5>
                     @php
                           $records = App\Records::where('pin', $pin)->where('note', '!=', '')->orderby('created_at','desc')->get();
                     @endphp      
                     @if (count($records) > 0)
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                          <thead>
                              
                          <tr>
                           <th>Date</th>
                           <th>Complain</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($records as $record)
                        <tr>
                           <td class="text-center">{{$record->created_at}}</td>
                           <td>{!!$record->note!!}</td>
                        </tr> 
                              @endforeach                      
                          </tbody>
                        </table>
               @else
               <p>No Record Found</p>    
               @endif
               </div>
            </div>
          </div>
            </div>
            <!-- /Prescription Tab -->
               
            <!-- Medical Records Tab -->
            <div id="pat_medical_records" class="tab-pane fade">
               <div class="card mb-0">
                  <div class="card-body">
                     {!! Form::open(['action' => 'RecordsController@store_bio', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                     **/ !!}
                     <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                     <div class="row">
                     <div class="form-group col-md-4">
                        <div>
                           @php
                               $bg = App\Records::where('pin', $pin)->where('b_group', '!=', '')->first();
                               $gen = App\Records::where('pin', $pin)->where('genotype', '!=', '')->first();
                           @endphp
                        <select class="form-control" id="selectbg" name="b_group">

                           @if (!empty($bg))
                           <option value="{{$bg->b_group}}">{{$bg->b_group}}</option>
                               
                           @else
                           <option value="">---Select Blood Group---</option>
                               
                           @endif
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                        </select>
                        </div>
                     </div>
                     <div class="form-group col-md-4">
                        <div>
                        <select class="form-control" id="selectgenotype" name="genotype">

                           @if (!empty($gen))
                           <option value="{{$gen->genotype}}">{{$gen->genotype}}</option>
                           @else
                           <option value="">---Select Genotype---</option>
                               
                           @endif
                           
                           <option value="AA">AA</option>
                           <option value="AC">AC</option>
                           <option value="AS">AS</option>
                           <option value="SS">SS</option>
                        </select>
                        </div>
                     </div>
                     <div class=" col-md-4 ">
                      <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="bp" name="bp" placeholder="Blood Pressure">
                     
                       <label for="Blood Pressure" class="focus-label">Blood Pressure</label>
                     </div>
                   </div>
                     <div class="col-md-4">
                       <div class="form-group form-focus">
                           <input type="text" class="form-control floating" id="fbs/rbs" name="fbs/rbs" placeholder="fbs/rbs">
                           <label for="fbs/rbs" class="focus-label">FBS/RBS</label>

                           </div>
                     </div>
                     <div class="col-md-4 ">
                        <div class="form-group form-focus">
                           <input type="text" class="form-control floating" id="weight" name="weight" placeholder="Weight in kg">
                           <label for="weight" class="focus-label">Weight</label>
                           
                        </div>
                     </div>
                     <div class="col-md-4 ">
                      <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="height" name="height" placeholder="Height in cm">
                        
                        <label for="height" class="focus-label">Height</label>
                     </div>
                     </div>
                     <div class="col-md-4 ">
                     <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="temprature" name="temprature" placeholder="Temprature in Celsius">
                        
                        <label for="temprature" class="focus-label">Temperature</label>
                     </div>
                     </div>
                     <!---
                     <div class="form-group col-md-6">
                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7"><label for="height"><i class="fa fa-plus"></i>Oxygen Saturation</label></button>
                       <div id="demo7" class="collapse">
                       <input type="text" class="form-control" id="oxygen" name="oxygen" placeholder="Oxygen Saturation in %">
                       </div>
                     </div>---->
                   <div class="col-md-4 ">
                    <div class="form-group form-focus">
                       <input type="text" class="form-control floating" id="glucose" name="glucose" placeholder="Glucose level in %">
                       
                       <label for="glucose" class="focus-label">Glucose level</label>
                     </div>
                     </div>
                     <!---
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
                   <div class="col-md-12">
                     <p class="mb-3">Official Use</p>
                  </div>--->
                  <div class="col-md-12">
                 <div class="form-group">
                    <label for="comment">Doctor's Investigation</label>
                    <br><small>What do you think is wrong with patient?</small>
                    
                    <textarea class="form-control" id="note" name="comment" placeholder="Doctor's Comment Based On Patient's Complaint and Medical History..."></textarea>
                 </div>
               </div>
              
                 <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Add Bio Vitals</button>
                {!! Form::close() !!}
                     </div>
                     <a href="#vitals" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Bio Vitals History</a>
                  </div>
               </div>
               <div class="collapse" id="vitals"> 
               <div class="card mb-0">
                  <div class="card-body">
                <h5 class="card-title">Bio Vitals History</h5>
                @php
                      $records = App\Records::where('pin', $pin)->orderby('created_at','desc')->get();
                @endphp      
                @if (count($records) > 0)   
                <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                           <thead>                                    
                              <tr>
                              <th>Date</th>
                              <th>Temperature</th>
                              <th>BP</th>
                              <th>FBS/RBS</th>
                              <th>Genotype</th>
                              <th>Blood Group</th>
                              <th>Weight</th>
                              <th>Height</th>
                              <th>Glucose Level</th>
                              <th>Complain</th>
                              <th>Doctor's Investigation</th>

                              </tr>     
                           </thead>
                           <tbody>
                              @foreach ($records as $record)
                              <tr>
                                 <td>{{$record->created_at}}</td>
                                 <td>{{$record->temp}}</td>
                                 <td>{{$record->bp}}</td>
                                 <td>{{$record->fbs_rbs}}</td>
                                 <td>{{$record->genotype}}</td>
                                 <td>{{$record->b_group}}</td>
                                 <td>{{$record->weight}}</td>
                                 <td>{{$record->height}}</td>
                                 <td>{{$record->glucose}}</td>
                                 <td>{!!$record->note!!}</td>
                                 <td>{!!$record->comment!!}</td>
                              </tr> 
                           @endforeach
                        </tbody>  	
                        </table>
                     </div>
                     @else
                     <p>No Record Found</p>    
                     @endif
                  </div>
               </div>
            </div>
            <!-- /Medical Records Tab -->
            </div>
            <!-- Billing Tab -->
            <div id="lab" class="tab-pane fade">
               <div class="card mb-0">
                  <div class="card-body">
                     {!! Form::open(['action' => 'LabsController@store', 'method' => 'POST', 'id'=>'my_form_2']) /** The action should be the block of code in the store function in PostsController
                   **/ !!}
                                       
                              <div>
                                 <input type="hidden" class="form-control" id="p_pin" name="p_pin" value="{{$pin}}">
                                 <div class="form-group two">
                                    <select class="form-control" id="test1" name="test1">
                                       <option>--Select Test--</option>
                                       <option value="Fever">Fever</option>
                                       <option value="Tuberculosis">Tuberculosis</option>
                                       <option value="Rabies">Rabies</option>
                                       <option value="Hepatitis">Hepatitis</option>
                                       <option value="STD">STD</option>
                                       <option value="Diarrhea">Diarrhea</option>
                                       <option value="Malaria">Malaria</option>
                                    </select>
                                 </div>
                                 <div class="form-group two">
                                    <select class="form-control" id="test2" name="test2">
                                       <option>--Select Test--</option>
                                       <option value="Fever">Fever</option>
                                       <option value="Tuberculosis">Tuberculosis</option>
                                       <option value="Rabies">Rabies</option>
                                       <option value="Hepatitis">Hepatitis</option>
                                       <option value="STD">STD</option>
                                       <option value="Diarrhea">Diarrhea</option>
                                       <option value="Malaria">Malaria</option>
                                    </select>
                                 </div>
                              @php
                                  $labs = App\Laboratories::get();
                              @endphp
                              <div>
                                 <div class="form-group">
                                    <small>Your hospital doesn't have a laboratory?, select from a list of other laboratories on medicpin.</small>
                                    <br>
                        <select class="form-control" id="lab" name="lab">
                           <option value="N/A">--Select Laboratory--</option>
                           @if (count($labs) > 0)
                           @foreach ($labs as $lab)
                           <option value="{{$lab->id}}">{{$lab->name}}</option>
                               
                           @endforeach
                           @else
                             <option>No Record Found</option>
                           @endif
                        </select>
                                 </div>
                              </div>
                           {!! Form::close() !!}
                           <a href="" id="loadMoreeinput" class="btn btn-primary"><i class="fa fa-plus"></i>Add More Test Field</a>
                           <a href="javascript:{}" onclick="document.getElementById('my_form_2').submit();" class="btn btn-primary">Send To The Lab</a>
                           <a href="#test" data-toggle="collapse" class="btn btn-primary">Patient Laboratory Tests</a>
                  </div>
               </div>
                  <div class="collapse" id="test"> 
                     <div class="card mb-0" style="margin-top: 20px;">
                      <div class="card-body text-center">
                         <h5 class="card-title">Laboratory Test Request Detail</h5>
                         @include('inc.messages')
                         @php
                             $tests = App\Lab::where('patient_pin', $pin)->get();
                         @endphp
          
                         @if (count($tests) > 0)
                         <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>
                               
                               <tr>
                                  <th>Date</th>
                                  <th>Test(s)</th>
                                  <th>Requested By</th>
                                  <th>Status</th>
                                  <th>Report</th>
                                  <th>carriedout_by</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach ($tests as $test)
                               <tr>
                                  <td class="text-center">{{$test->created_at}}</td>
                                  <td>
                                      {{$test->test_name}}
                                 </td>
                                  <td>{{$test->doc_name}}</td>
                                  <td>{{$test->status}}</td>
                                  <td><a href="../img/lab_report/{{$test->report}}" style="text-decoration: none;" download="{{$test->report}}"><i class="ri-file-pdf-line font-size-16 text-danger"> Download Report</i></a></td>
                                  
                                  @if ($test->carriedout_by == '')
                                  <td>N/A</td>
                                      
                                  @else
                                  @php
                                      $name = App\User::where('pin', $test->carriedout_by)->first();
                                  @endphp
                                  <td>{{$name->name}}</td>
                                  @endif
                               </tr> 
                               @endforeach                      
                           </tbody>
                         </table>
                             
                         @endif
                      </div>
                      </div>
                   </div>
                  </div>
            </div>

            <!-- /Billing Tab -->
            <div id="prescribe" class="tab-pane fade">
               <div class="card mb-0">
                  <div class="card-body">
                     
                     {!! Form::open(['action' => 'PrescriptionController@store', 'method' => 'POST', 'id' => 'my_form_11']) /** The action should be the block of code in the store function in PostsController
                     **/ !!}
                        <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                    <div class="form-group">
                     <select class="form-control" id="sickness" name="sickness" required>
                        <option>--Select Sickness--</option>
                        <option value="Acne">Acne</option>
                        <option value="Fever">Fever</option>
                        <option value="Tuberculosis">Tuberculosis</option>
                        <option value="Rabies">Rabies</option>
                        <option value="Hepatitis">Hepatitis</option>
                        <option value="STD">STD</option>
                        <option value="Diarrhea">Diarrhea</option>
                        <option value="Malaria">Malaria</option>
                     </select>
                  </div>
                       
                    <div class="fie one">
                     <div class="row">
                    <div class="form-group col-md-6">
                     @php
                         $drugs = App\pharmacy::orderby('name', 'asc')->where('status', 'In stock')->get();
                     @endphp
                     <select class="form-control" id="drug1" name="drug1">
                        <option>--Select Drug--</option>
                        @if (count($drugs) > 0)
                        @foreach ($drugs as $drug)
                        @if ($drug->weight == '')
                        <option value="{{$drug->id}}">{{$drug->name}}</option>
                            
                        @else
                        <option value="{{$drug->id}}">{{$drug->name}} {{$drug->weight}}mmg</option>
                            
                        @endif
                        @endforeach
                        @else
                        <option value="">No drugs in store yet</option>
                        @endif
                     </select>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group form-focus">
                     <input type="text" name="dose1" id="" class="form-control floating" placeholder="Number of tablets" required>
                     <label for="dosage" class="focus-label">Dosage</label>

                  </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                  <select class="form-control" id="" name="frequency1">
                     <option>--Select Usage Frequency--</option>
                     <option value="Once/Day">Once/Day</option>
                     <option value="2x/Day">2x/Day</option>
                     <option value="3x/Day">3x/Day</option>
                     <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                  </select>
                  </div>
                  </div>
               </div>
               </div>
               </div>
               </div>
                     
               <div class="fie one">  
               <div class="card mb-0" style="margin-top: 20px;">
                  <div class="card-body">
                   <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                   <select class="form-control" id="drug2" name="drug2">
                      <option>--Select Drug--</option>
                      @if (count($drugs) > 0)
                      @foreach ($drugs as $drug)
                      @if ($drug->weight == '')
                      <option value="{{$drug->id}}">{{$drug->name}}</option>
                          
                      @else
                      <option value="{{$drug->id}}">{{$drug->name}} {{$drug->weight}}mmg</option>
                          
                      @endif
                      @endforeach
                      @else
                      <option value="">No drugs in store yet</option>
                      @endif
                   </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group form-focus">
                   <input type="text" name="dose2" id="" class="form-control floating" placeholder="Number of tablets">
                   <label for="dosage 2" class="focus-label">Dosage</label>


                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                <select class="form-control" id="" name="frequency2">
                   <option>--Select Usage Frequency--</option>
                   <option value="Once/Day">Once/Day</option>
                   <option value="2x/Day">2x/Day</option>
                   <option value="3x/Day">3x/Day</option>
                   <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                </select>
                </div>
                </div>
               </div>
               </div>
            </div>
         </div>
         <div class="fie one">
               <div class="card mb-0" style="margin-top: 20px;">
                  <div class="card-body" >
                   <div class="row">
                  <div class="form-group col-md-6">
                   <select class="form-control" id="drug3" name="drug3">
                      <option>--Select Drug--</option>
                      @if (count($drugs) > 0)
                      @foreach ($drugs as $drug)
                      @if ($drug->weight == '')
                      <option value="{{$drug->id}}">{{$drug->name}}</option>
                          
                      @else
                      <option value="{{$drug->id}}">{{$drug->name}} {{$drug->weight}}mmg</option>
                          
                      @endif
                      @endforeach
                      @else
                      <option value="">No drugs in store yet</option>
                      @endif
                   </select>
                  </div>
               <div class="col-md-6">
                  <div class="form-group form-focus">
                   <input type="text" name="dose3" id="" class="form-control floating" placeholder="Number of tablets">
                   
                   <label for="dosage 3" class="focus-label">Dosage</label>

                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                <select class="form-control" id="" name="frequency3">
                   <option>--Select Usage Frequency--</option>
                   <option value="Once/Day">Once/Day</option>
                   <option value="2x/Day">2x/Day</option>
                   <option value="3x/Day">3x/Day</option>
                   <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                </select>
                </div>
                </div>
                     {!!Form::close()!!}
                
                </div>
               </div>
            </div>
         </div>
         
         <p style="margin-top: 10px;">
            <a href="javascript:{}" onclick="document.getElementById('my_form_11').submit();" class="btn btn-primary">Send To The Pharmacy</a>
            <a href="" id="loadMoreeinputt" class="btn btn-primary"><i class="fa fa-plus"></i>Add More Drug Field</a>
            <a href="#prehis" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Previous Prescriptions</a>
         </p>   
         <div class="col-md-12 collapse" id="prehis"> 
           <div class="card" style="margin-top: 20px;">
             <div class="card-body text-center">
                <h5 class="card-title">Prescription History</h5>
                @php
                    $records = App\Prescriptions::orderBy('created_at','desc')->where('patient_pin', $pin)->get();
                @endphp
                      @if (count($records) >0)
                      <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            
                            <tr>
                               <th>Sickness</th>
                               <th>Drug Name</th>
                               <th>Dosage</th>
                               <th>Frequency</th>
                               <th>Prescribed By</th>
                               <th>Action(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($records as $record)
                            <tr>
                             <td>{{$record->sickness}}</td>
                              @if ($record->drug !== NULL && $record->drug !== 'select')
                              @php
                                  $drug_main = App\pharmacy::where('id', $record->drug)->first();
                              @endphp
                              @if (!empty($drug_main))
                              <td>{{$drug_main->name}}</td>
                              <td>{{$record->dosage}}</td>
                              <td>{{$record->frequency}}</td>
                              @php
                                  $prescribed_by = App\User::where('pin', $record->prescribed_by)->first();
                              @endphp
                              <td>Dr. {{$prescribed_by->name}}</td>
                                  
                              @else
                              <td>N/A</td>
                              <td>N/A</td>
                              <td>N/A</td>
                              <td>N/A</td>
                                  
                              @endif
                               <td>
                                  <div class="dropdown">
                                     <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                     <i class="ri-more-fill"></i>
                                     </span>
                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                     
                                      <a class="dropdown-item">
                                         {!!Form::open(['action' =>['PrescriptionController@update',$record->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                         {{Form::hidden('id', $record->id)}}
                                         <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Sell Drug"><i class="la la-bezier-curve"></i>Mark Drug As Sold</button>
                                        
                                         {{Form::hidden('_method', 'PUT')}}
                                         {!!Form::close()!!}
                                      </a>
                                     
                                     <a class="dropdown-item">
                                        {!!Form::open(['action' => 'PrescriptionController@NA', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('id', $record->id)}}
                                        <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Drug Not Available"><i class="ri-delete-bin-6-fill mr-2"></i>Drug Not Available</button>
                                       
                                        {!!Form::close()!!}
                                     </a>
                                     </div>
                                  </div>
                                    
                                   
                              </td>

                                    @endif
                                </tr>
                              
                                @endforeach           
                        </tbody>
                      </table>
                            
                      @else
                      
                          No Prescription For Patient Today, Check Prescription History.
          
                      @endif
             </div>
           </div>
         </div>
                  </div>
               </div>
               </div>

            <!-- /Billing Tab -->
            
         </div>
         <!-- Tab Content -->
         
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
<script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
   CKEDITOR.replace( 'pre' );
   CKEDITOR.replace( 'note' );
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