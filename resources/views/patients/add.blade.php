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
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Investigation & Diagnosis</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Prescription</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="tab-content" id="myTabContent">

                        @php
                           $patient = App\patients::where('pin', $record->pin)->first();
                           $user = App\User::where('pin', $record->pin)->first();
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
                                          @if ($user->age == '')
                                              N/A
                                          @else
                                          {{$user->age}}
                                              
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
                                         @if ($user->m_status == '')
                                             N/A
                                         @else
                                         {{$user->m_status}}
                                             
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
                                        @if ($user->children == '')
                                            N/A
                                        @else
                                        {{$user->children}}
                                            
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
                                          @if ($record->genotype == '')
                                              N/A
                                          @else
                                          {{$record->genotype}}
                                              
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
                                          @if ($record->b_group == '')
                                              N/A
                                          @else
                                          {{$record->b_group}}
                                              
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
                                          @if ($user->p_number == '')
                                              N/A
                                          @else
                                          {{$user->p_number}}
                                              
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
                                       @if ($user->nhis == '')
                                           N/A
                                       @else
                                       {{$user->nhis}}
                                           
                                       @endif</li>
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
                                      @if ($user->nhis_number == '')
                                          N/A
                                      @else
                                      {{$user->nhis_number}}
                                          
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
                          <!---    
                              <div class="col-md-4">
                                 <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-primary">
                                       <li class="breadcrumb-item active" aria-current="page">Address <br>{{$patient->address}}</li>
                                    </ol>
                                 </nav>
                                 <div class="iq-card shadow-none mb-0">
                                     <div class="iq-card-body p-1">
                                        <span class="font-size-14">Genotype</span>
                                        @if ($record->genotype == '')
                                        <h2>N/A
                                            <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                        <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                            <div class="iq-progress-bar">
                                                <span class="bg-primary" data-percent="0"></span>
                                            </div>
                                        </div>
                                        @else
                                        <h2>{{$record->genotype}}
                                            <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                            <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                            <div class="iq-progress-bar">
                                                <span class="bg-primary" data-percent={{$record->genotype}}></span>
                                            </div>
                                        </div>
                                        @endif
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="iq-card shadow-none mb-0">
                                     <div class="iq-card-body p-1">
                                         <span class="font-size-14">Blood Group</span>
                                         @if ($record->b_group == '')
                                         <h2>N/A
                                         <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                         <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                             <div class="iq-progress-bar">
                                                 <span class="bg-success" data-percent="0"></span>
                                             </div>
                                         </div>
                                         @else
                                         <h2>{{$record->b_group}}
                                         <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                        <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                             <div class="iq-progress-bar">
                                                 <span class="bg-success" data-percent={{$record->b_group}}></span>
                                             </div>
                                         </div>

                                         @endif
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="iq-card shadow-none mb-0">
                                     <div class="iq-card-body p-1">
                                         <span class="font-size-14">Weight</span>
                                         @if ($record->weight == '')
                                         <h2>N/A
                                        <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                        <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                             <div class="iq-progress-bar">
                                                 <span class="bg-danger" data-percent="0"></span>
                                             </div>
                                         </div>
                                          @else
                                          <h2>{{$record->weight}}kg
                                          <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                          <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                              <div class="iq-progress-bar">
                                                  <span class="bg-danger" data-percent={{$record->weight}}></span>
                                              </div>
                                          </div>   
                                         @endif
                                     </div>
                                 </div>
                             </div>
                             --->
                           </div>
                        </div>


                        <div class="tab-pane fade" id="hom" role="tabpanel" aria-labelledby="hom-tab">
                           <!---
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck10">
                                 <label class="custom-control-label" for="customCheck10">Get the address of customer</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck12">
                                 <label class="custom-control-label" for="customCheck12">Contact Vendor for parcel</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck13">
                                 <label class="custom-control-label" for="customCheck13">Refule delivery truck</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck14">
                                 <label class="custom-control-label" for="customCheck14">Pick up for order no. 334</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck15">
                                 <label class="custom-control-label" for="customCheck15">Pay taxes for every bill</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck16">
                                 <label class="custom-control-label" for="customCheck16">I am designers &amp; I have no life</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck17">
                                 <label class="custom-control-label" for="customCheck17">This is a good product. Buy it :) </label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck18">
                                 <label class="custom-control-label" for="customCheck18">You should check in on some of  below.</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck19">
                                 <label class="custom-control-label" for="customCheck19">You should check in on some of  below.</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>---->
                        </div>


                        
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <!---
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck110">
                                 <label class="custom-control-label" for="customCheck110">You should check in on some of  below.</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck111">
                                 <label class="custom-control-label" for="customCheck111">You should check in on some of  below.</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <div class="d-flex tasks-card" role="alert">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="customCheck112">
                                 <label class="custom-control-label" for="customCheck112">You should check in on some of  below.</label>
                              </div>
                              <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>--->
              </div>
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                        @include('inc.messages')
                          <div class="iq-header-title">
                             <h4 class="card-title">New Patient Record</h4>
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
                        {!! Form::open(['action' => 'RecordsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                                <p class="mb-3">Patient's Vitals</p>
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
                                    <div class="form-group col-md-3">
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
                                    <div class="form-group col-md-3">
                                       
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><label for="bp"><i class="fa fa-plus"></i>Blood Pressure</label></button>
                                       
                                       <div id="demo1" class="collapse">
                                       <input type="text" class="form-control" id="bp" name="bp" placeholder="Blood Pressure">
                                    </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2"><label for="fbs/rbs"><i class="fa fa-plus"></i>FBS/RBS</label></button>
                                          <div id="demo2" class="collapse">
                                          <input type="text" class="form-control" id="fbs/rbs" name="fbs/rbs" placeholder="fbs/rbs">
                                          </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3"><label for="genotype"><i class="fa fa-plus"></i>Genotype</label></button>
                                       <div id="demo3" class="collapse">
                                       <select class="form-control" id="selectgenotype" name="genotype">
                                          <option value="N/A">Select</option>
                                          <option value="AA">AA</option>
                                          <option value="AC">AC</option>
                                          <option value="AS">AS</option>
                                          <option value="SS">SS</option>
                                       </select>
                                       </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4"><label for="weight"><i class="fa fa-plus"></i>Weight</label></button>
                                       <div id="demo4" class="collapse">
                                       <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in kg">
                                       </div>
                                    </div>
                                     <div class="form-group col-md-3">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo5"><label for="height"><i class="fa fa-plus"></i>Height</label></button>
                                       <div id="demo5" class="collapse">
                                       <input type="text" class="form-control" id="height" name="height" placeholder="Height in cm">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6"><label for="temprature"><i class="fa fa-plus"></i>Temperature</label></button>
                                       <div id="demo6" class="collapse">
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
                                   <div class="form-group col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo8"><label for="temprature"><i class="fa fa-plus"></i>Glucose Level</label></button>
                                      <div id="demo8" class="collapse">
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
                                  </div>--->
                                  <div class="col-md-12">
                                    <p class="mb-3">Official Use</p>
                                 </div>
                                        <div class="form-group col-md-6">
                                          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo13"><label for="comment"><i class="fa fa-plus"></i>Doctor's Comment</label></button>
                                           <div id="demo13" class="collapse">
                                           <textarea class="form-control" id="pre" name="pre" placeholder="Doctor's Comment Based On Patient's Complaint and Medical History..."></textarea>
                                        </div>
                                     </div>
                                      <div class="form-group col-md-6">
                                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11"><label for="temprature"><i class="fa fa-plus"></i>Note</label></button>
                                         <div id="demo11" class="collapse">
                                         <textarea class="form-control" id="note" name="note" placeholder="General note on patient medical status"></textarea>
                                         </div>
                                      </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 80px;">Create Record</button>
                                {!! Form::close() !!} 
                                <a href="#test" data-toggle="collapse" class="btn btn-primary" style="margin-bottom: 50px;">Request Lab Test</a>
                                <a href="#records" data-toggle="collapse" class="btn btn-primary" style="margin-bottom: 50px; margin-left:30px;">Diagnosis and Drug Prescription</a>
                               
                                <div class="col-md-12 collapse" id="test">
                                 <div class="iq-card shadow-none mb-0">
                                    {!! Form::open(['action' => 'LabsController@store', 'method' => 'POST', 'id'=>'my_form_2']) /** The action should be the block of code in the store function in PostsController
                                  **/ !!}
                                                      
                                             <div class="row">
                                                <input type="hidden" class="form-control" id="p_pin" name="p_pin" value="{{$pin}}">
                                                <div class="form-group col-lg-12 two">
                                                   <label for="with">Test</label>
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
                                                <div class="form-group col-lg-12 two">
                                                   <label for="with">Test</label>
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
                                    </div>
                                 </div>
                                <div class="col-md-12 collapse" id="records">
                                    <div class="iq-card shadow-none mb-0">
                                        <div class="iq-card-body p-1">
                                
                                          <style>
    
                                             div.col-lg-12.fie.one,
                                             div.col-lg-12.two{
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
                                             {!! Form::open(['action' => 'PrescriptionController@store', 'method' => 'POST', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                             **/ !!}
                                             <div class="">
                                                <input type="hidden" class="form-control" id="pin" name="pin" value="{{$pin}}">
                                            <div class="form-group col-lg-12">
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
                                            </div>
                                               
                                            <div class="col-lg-12 fie one">
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
                                                <option value="{{$drug->name}}">{{$drug->name}}</option>
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
                                               
                                          <div class="col-lg-12 fie one">
                                           <div class="row">
                                          <div class="form-group col-md-6">
                                           <label>Drug</label>
                                           <select class="form-control" id="drug2" name="drug2">
                                              <option>Select</option>
                                              @if (count($drugs) > 0)
                                              @foreach ($drugs as $drug)
                                              <option value="{{$drug->name}}">{{$drug->name}}</option>
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
                                          <div class="col-lg-12 fie one">
                                           <div class="row">
                                          <div class="form-group col-md-6">
                                           <label>Drug</label>
                                           <select class="form-control" id="drug3" name="drug3">
                                              <option>Select</option>
                                              @if (count($drugs) > 0)
                                              @foreach ($drugs as $drug)
                                              <option value="{{$drug->name}}">{{$drug->name}}</option>
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
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();" class="btn btn-primary">Send To The Pharmacy</a>
                                    <a href="" id="loadMoreeinputt" class="btn btn-primary"><i class="fa fa-plus"></i>Add More Drug Field</a>
                                 </p>    
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