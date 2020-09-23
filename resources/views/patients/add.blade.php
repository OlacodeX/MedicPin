@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
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
              <div class="col-lg-12">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Add Medical Record</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="hom-tab" data-toggle="tab" href="#hom" role="tab" aria-controls="hom" aria-selected="false">Medical Record</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lab Test Request</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Diagnosis & Prescription</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="tab-content" id="myTabContent">

                        @php
                           $patient = App\patients::where('pin', $pin)->first();
                           $user = App\User::where('pin', $pin)->first();
                        @endphp

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="iq-card shadow-none mb-0">
                                     <div class="iq-card-body p-1">
                                       <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb iq-bg-primary">
                                          <li class="breadcrumb-item active" aria-current="page">MedicPin <br>
                                             @if ($patient->pin == '')
                                                 N/A
                                             @else
                                             {{$patient->pin}}
                                                 
                                             @endif
                                          </li>
                                          </ol>
                                       </nav>
                                     </div>
                                 </div>
                             </div>
                              <div class="col-md-4">
                                 <div class="iq-card shadow-none mb-0">
                                     <div class="iq-card-body p-1">
                                       <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb iq-bg-primary">
                                          <li class="breadcrumb-item active" aria-current="page">Name <br>
                                             @if ($patient->name == '')
                                                 N/A
                                             @else
                                             {{$patient->name}}
                                                 
                                             @endif
                                             </li>
                                          </ol>
                                       </nav>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                <div class="iq-card shadow-none mb-0">
                                    <div class="iq-card-body p-1">
                                      <nav aria-label="breadcrumb">
                                         <ol class="breadcrumb iq-bg-primary">
                                         <li class="breadcrumb-item active" aria-current="page">Gender <br>
                                          @if ($patient->gender == '')
                                              N/A
                                          @else
                                          {{$patient->gender}}
                                              
                                          @endif
                                          </li>
                                         </ol>
                                      </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="iq-card shadow-none mb-0">
                                   <div class="iq-card-body p-1">
                                     <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item active" aria-current="page">Age <br>
                                          @if (!empty($user))
                                              
                                          @if ($user->age == '')
                                              N/A
                                          @else
                                          {{$user->age}}
                                              
                                          @endif
                                          @endif
                                          </li>
                                        </ol>
                                     </nav>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="iq-card shadow-none mb-0">
                                  <div class="iq-card-body p-1">
                                    <nav aria-label="breadcrumb">
                                       <ol class="breadcrumb iq-bg-primary">
                                       <li class="breadcrumb-item active" aria-current="page">Marital Status <br>
                                          @if (!empty($user))
                                         @if ($user->m_status == '')
                                             N/A
                                         @else
                                         {{$user->m_status}}
                                             
                                         @endif
                                             
                                         @endif
                                         </li>
                                       </ol>
                                    </nav>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                             <div class="iq-card shadow-none mb-0">
                                 <div class="iq-card-body p-1">
                                   <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb iq-bg-primary">
                                      <li class="breadcrumb-item active" aria-current="page">No of Children <br>
                                       @if (!empty($user))
                                        @if ($user->children == '')
                                            N/A
                                        @else
                                        {{$user->children}}
                                            
                                        @endif
                                             
                                        @endif
                                        </li>
                                      </ol>
                                   </nav>
                                 </div>
                             </div>
                         </div>
                            <div class="col-md-4">
                               <div class="iq-card shadow-none mb-0">
                                   <div class="iq-card-body p-1">
                                     <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item active" aria-current="page">Genotype <br>
                                          @if (!empty($record))
                                          @if ($record->genotype == '')
                                              N/A
                                          @else
                                          {{$record->genotype}}
                                              
                                          @endif
                                              
                                          @else
                                          {{'No Record'}}
                                              
                                          @endif
                                          </li>
                                        </ol>
                                     </nav>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="iq-card shadow-none mb-0">
                                  <div class="iq-card-body p-1">
                                    <nav aria-label="breadcrumb">
                                       <ol class="breadcrumb iq-bg-primary">
                                       <li class="breadcrumb-item active" aria-current="page">Blood Group <br>
                                          @if (!empty($record))
                                          @if ($record->b_group == '')
                                              N/A
                                          @else
                                          {{$record->b_group}}
                                              
                                          @endif
                                              
                                          @else
                                          {{'No Record'}}
                                              
                                          @endif
                                          </li>
                                       </ol>
                                    </nav>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                             <div class="iq-card shadow-none mb-0">
                                 <div class="iq-card-body p-1">
                                  <nav aria-label="breadcrumb">
                                     <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item active" aria-current="page">Address <br>
                                          @if ($patient->address == '')
                                              N/A
                                          @else
                                          {{$patient->address}}
                                              
                                          @endif
                                          
                                       </li>
                                     </ol>
                                  </nav>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                            <div class="iq-card shadow-none mb-0">
                                <div class="iq-card-body p-1">
                                 <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-primary">
                                       <li class="breadcrumb-item active" aria-current="page">Phone number <br>
                                          @if (!empty($user))
                                          @if ($user->p_number == '')
                                              N/A
                                          @else
                                          {{$user->p_number}}
                                              
                                          @endif
                                          
                                          @endif
                                          </li>
                                    </ol>
                                 </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                           <div class="iq-card shadow-none mb-0">
                               <div class="iq-card-body p-1">
                                <nav aria-label="breadcrumb">
                                   <ol class="breadcrumb iq-bg-primary">
                                      <li class="breadcrumb-item active" aria-current="page">Category <br>
                                       @if (!empty($user))
                                       @if ($user->nhis == '')
                                           N/A
                                       @else
                                       {{$user->nhis}}
                                           
                                       @endif
                                          
                                       @endif
                                    </li>
                                   </ol>
                                </nav>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4">
                          <div class="iq-card shadow-none mb-0">
                              <div class="iq-card-body p-1">
                               <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb iq-bg-primary">
                                     <li class="breadcrumb-item active" aria-current="page">NHIS Number <br>
                                       @if (!empty($user))
                                      @if ($user->nhis_number == '')
                                          N/A
                                      @else
                                      {{$user->nhis_number}}
                                          
                                      @endif
                                          
                                      @endif
                                    </li>
                                  </ol>
                               </nav>
                              </div>
                          </div>
                      </div>
                            <div class="col-md-4">
                               <div class="iq-card shadow-none mb-0">
                                   <div class="iq-card-body p-1">
                                     <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item active" aria-current="page">Occupation <br>
                                          @if ($patient->occupation == '')
                                              N/A
                                          @else
                                          {{$patient->occupation}}
                                              
                                          @endif
                                       </li>
                                        </ol>
                                     </nav>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="iq-card shadow-none mb-0">
                                  <div class="iq-card-body p-1">
                                    <nav aria-label="breadcrumb">
                                       <ol class="breadcrumb iq-bg-primary">
                                       <li class="breadcrumb-item active" aria-current="page">Next of kin name <br>
                                          @if ($patient->nok == '')
                                              N/A
                                          @else
                                          {{$patient->nok}}
                                              
                                          @endif
                                          </li>
                                       </ol>
                                    </nav>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4">
                             <div class="iq-card shadow-none mb-0">
                                 <div class="iq-card-body p-1">
                                   <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb iq-bg-primary">
                                      <li class="breadcrumb-item active" aria-current="page">Relationship With next of kin <br>
                                       @if ($patient->nok_relation == '')
                                           N/A
                                       @else
                                       {{$patient->nok_relation}}
                                           
                                       @endif
                                       </li>
                                      </ol>
                                   </nav>
                                 </div>
                             </div>
                         </div>
                           </div>
                        </div>


                        <div class="tab-pane fade" id="hom" role="tabpanel" aria-labelledby="hom-tab">
                          
                           <div class="form-group col-md-12">
                              <h5 class="card-title">Patient Complain</h5>
                              {!! Form::open(['action' => 'RecordsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                              **/ !!}
                                 <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                               <textarea class="form-control" id="pre" name="note" placeholder="Patient's Complaint..."></textarea><br>
                               
                               <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Add Complain</button>
                               <a href="#complain" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Complain History</a>
                               {!! Form::close() !!} 
                               <style>
                                  a.btn.btn-primary.pull-right{
                                     margin-top: 0;
                                  }
                               </style>
                             
                             <div class="collapse" id="complain"> 
                                <div class="iq-card">
                                <div class="iq-card-body text-center">
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
                          
                        {!! Form::open(['action' => 'RecordsController@store_bio', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                        <h5 class="card-title" style="margin-top: 80px;">Patient's Bio Vitals</h5>
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
                                   </style>
                                    <div class="form-group col-md-4">
                                       <label for="blood group">Blood Group</label>
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
                                       <label for="Blood Pressure">Blood Pressure</label>
                                       <div>
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="fbs/rbs">FBS/RBS</label>
                                       <div>
                                          <input type="text" class="form-control" id="fbs/rbs" name="fbs/rbs" placeholder="fbs/rbs">
                                          </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="genotype">Genotype</label>
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
                                    <div class="form-group col-md-4">
                                       <label for="weight">Weight</label>
                                       <div>
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in kg">
                                       </div>
                                    </div>
                                     <div class="form-group col-md-4">
                                       <label for="height">Height</label>
                                        <div>
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height in cm">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="temprature">Temperature</label>
                                       <div>
                                       <input type="text" class="form-control" id="temprature" name="temprature" placeholder="Temprature in Celsius">
                                       </div>
                                    </div>
                                    <!---
                                    <div class="form-group col-md-6">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo7"><label for="height"><i class="fa fa-plus"></i>Oxygen Saturation</label></button>
                                      <div id="demo7" class="collapse">
                                      <input type="text" class="form-control" id="oxygen" name="oxygen" placeholder="Oxygen Saturation in %">
                                      </div>
                                    </div>---->
                                   <div class="form-group col-md-4">
                                    <label for="glucose">Glucose level</label>
                                      <div>
                                      <input type="text" class="form-control" id="glucose" name="glucose" placeholder="Glucose level in %">
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
                                <div class="form-group col-md-12">
                                   <label for="comment">Doctor's Investigation</label>
                                   <br><small>What do you think is wrong with patient?</small>
                                   
                                   <textarea class="form-control" id="note" name="comment" placeholder="Doctor's Comment Based On Patient's Complaint and Medical History..."></textarea>
                                </div>
                                     
                             
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 0px;">Add Bio Vitals</button>
                               {!! Form::close() !!} 
                               <a href="#vitals" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Bio Vitals History</a>
                               <style>
                                  a.btn.btn-primary.pull-right{
                                     margin-top: 0;
                                  }
                               </style>
                               
                        </div>
                             
                        <div class="collapse" id="vitals"> 
                           <div class="iq-card">
                           <div class="iq-card-body text-center">
                              <h5 class="card-title">Bio Vitals History</h5>
                              @php
                                    $records = App\Records::where('pin', $pin)->orderby('created_at','desc')->get();
                              @endphp      
                              @if (count($records) > 0)
                                 <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                                 <td class="text-center">{{$record->created_at}}</td>
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
                        @else
                        <p>No Record Found</p>    
                        @endif
                     </div>
                     </div>
         </div>
                     </div>
                     </div>


                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          
                           
                              <div class="iq-card shadow-none">
                                 {!! Form::open(['action' => 'LabsController@store', 'method' => 'POST', 'id'=>'my_form_2']) /** The action should be the block of code in the store function in PostsController
                               **/ !!}
                                                   
                                          <div class="col-md-12">
                                             <input type="hidden" class="form-control" id="p_pin" name="p_pin" value="{{$pin}}">
                                             <div class="form-group two">
                                                <label for="test">Test</label>
                                                <select class="form-control" id="test1" name="test1">
                                                   <option>Select</option>
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
                                                <label for="test">Test</label>
                                                <select class="form-control" id="test2" name="test2">
                                                   <option>Select</option>
                                                   <option value="Fever">Fever</option>
                                                   <option value="Tuberculosis">Tuberculosis</option>
                                                   <option value="Rabies">Rabies</option>
                                                   <option value="Hepatitis">Hepatitis</option>
                                                   <option value="STD">STD</option>
                                                   <option value="Diarrhea">Diarrhea</option>
                                                   <option value="Malaria">Malaria</option>
                                                </select>
                                             </div>
                                          </div>
                                       {!! Form::close() !!}
                                       <a href="" id="loadMoreeinput" class="btn btn-primary"><i class="fa fa-plus"></i>Add More Test Field</a>
                                       <a href="javascript:{}" onclick="document.getElementById('my_form_2').submit();" class="btn btn-primary">Send To The Lab</a>
                                       <a href="#test" data-toggle="collapse" class="btn btn-primary">Patient Laboratory Tests</a>
                                 
                              </div>
              </div>


              <div class="col-md-12 collapse" id="test"> 
                <div class="iq-card">
                  <div class="iq-card-body text-center">
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

                        
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          
                               <div class="iq-card">
                                   <div class="iq-card-body">
                           
                                     <style>

                                        div.fie.one,
                                        div.two{
                                                 display:none;
                                                 margin-bottom: 10px;
                                                 
                                             }
                                             #loadMoreeinput {
                                                 transition: all 600ms ease-in-out;
                                                 -webkit-transition: all 600ms ease-in-out;
                                                 -moz-transition: all 600ms ease-in-out;
                                                 -o-transition: all 600ms ease-in-out;
                                                 
                                             }
                                            </style>
                                        {!! Form::open(['action' => 'PrescriptionController@store', 'method' => 'POST', 'id' => 'my_form_11']) /** The action should be the block of code in the store function in PostsController
                                        **/ !!}
                                           <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                                       <div class="form-group">
                                        <label>Sickness</label>
                                        <select class="form-control" id="sickness" name="sickness">
                                           <option>Select</option>
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
                                        <label>Drug</label>
                                        @php
                                            $drugs = App\pharmacy::orderby('name', 'asc')->where('status', 'In stock')->get();
                                        @endphp
                                        <select class="form-control" id="drug1" name="drug1">
                                           <option>Select</option>
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
                                       <div class="form-group col-md-6">
                                        <label>Dosage</label>
                                        <input type="text" name="dose1" id="" class="form-control" placeholder="Number of tablets">
                                        

                                       </div>
                                       <div class="form-group col-md-6">
                                        <label>Frequency</label>
                                     <select class="form-control" id="" name="frequency1">
                                        <option>Select</option>
                                        <option value="Once/Day">Once/Day</option>
                                        <option value="2x/Day">2x/Day</option>
                                        <option value="3x/Day">3x/Day</option>
                                        <option value="Pharmacist Discretion">Pharmacist Discretion</option>
                                     </select>
                                     </div>
                                     </div>
                                          
                                     <div class="fie one">
                                      <div class="row">
                                     <div class="form-group col-md-6">
                                      <label>Drug</label>
                                      <select class="form-control" id="drug2" name="drug2">
                                         <option>Select</option>
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
                                     <div class="form-group col-md-6">
                                      <label>Dosage</label>
                                      <input type="text" name="dose2" id="" class="form-control" placeholder="Number of tablets">
                                      

                                     </div>
                                     <div class="form-group col-md-6">
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
                                     <div class="fie one">
                                      <div class="row">
                                     <div class="form-group col-md-6">
                                      <label>Drug</label>
                                      <select class="form-control" id="drug3" name="drug3">
                                         <option>Select</option>
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
                                     <div class="form-group col-md-6">
                                      <label>Dosage</label>
                                      <input type="text" name="dose3" id="" class="form-control" placeholder="Number of tablets">
                                      

                                     </div>
                                     <div class="form-group col-md-6">
                                      <label>Frequency</label>
                                   <select class="form-control" id="" name="frequency3">
                                      <option>Select</option>
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
                               <p>
                               <a href="javascript:{}" onclick="document.getElementById('my_form_11').submit();" class="btn btn-primary">Send To The Pharmacy</a>
                               <a href="" id="loadMoreeinputt" class="btn btn-primary"><i class="fa fa-plus"></i>Add More Drug Field</a>
                               <a href="#pre" data-toggle="collapse" class="btn btn-primary pull-right" style="margin-top: 0;">View Previous Prescriptions</a>
                            </p>   
                            <div class="col-md-12 collapse" id="pre"> 
                              <div class="iq-card">
                                <div class="iq-card-body text-center">
                                   <h5 class="card-title">Prescription History</h5>
                                   @php
                                       $records = App\Prescriptions::orderBy('created_at','desc')->where('patient_pin', $pin)->get();
                                   @endphp
                                         @if (count($records) >0)
                                         <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                           <thead>
                                               
                                               <tr>
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
                                                 @if ($record->drug !== NULL && $record->drug !== 'select')
                                                 @php
                                                     $drug_main = App\pharmacy::where('id', $record->drug)->first();
                                                 @endphp
                                                  <td>{{$drug_main->name}}</td>
                                                  <td>{{$record->dosage}}</td>
                                                  <td>{{$record->frequency}}</td>
                                                  @php
                                                      $prescribed_by = App\User::where('pin', $record->prescribed_by)->first();
                                                  @endphp
                                                  <td>Dr. {{$prescribed_by->name}}</td>
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