@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
@if (auth()->user()->status == 'Active')
         <div class="">
            <div class="row">
               <div class="col-lg-12">
                  @include('inc.messages')
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Your Hospital</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-primary rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\HospitalDoctors::where('h_id', $hospital->id)->count()}}</span></h2>
                                    <h5 class="">Doctors</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{ App\User::where('h_id', $hospital->id)->where('role', 'Nurse')->count()}}</span></h2>
                                    <h5 class="">Nurses</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-danger rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                 <div class="text-right">  
                                    @php
                                        $doc = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_name');
                                       
                                          $patients = App\patients::whereIn('doctor', $doc)->count();
                                       
                                        
                                    @endphp                                
                                    <h2 class="mb-0"><span class="counter">{{$patients}}</span></h2>
                                    <h5 class="">Patients</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-info rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                 <div class="text-right">          
                                    <h2 class="mb-0"><span class="counter">{{ App\User::where('h_id', $hospital->id)->where('role', 'Pharmacist')->count()}}</span></h2>
                                    <h5 class="">Pharmacists</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="col-sm-12">
                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body pb-0 mt-3">       
                     <style>
                        /* enable absolute positioning */
                .inner-addon {
                  position: relative;
                }
                
                /* style glyph */
                .inner-addon .fa {
                  position: absolute;
                  padding: 10px;
                  pointer-events: none;
                  color: #0178ff7b;
                  font-weight: 900;
                }
                
                /* align glyph 
                .left-addon .fa  { left:  0px;}*/
                .right-addon .fa { right: 260px;}
                
                /* add padding 
                .left-addon input  { padding-left:  30px; } */
                .right-addon input { padding-right: 30px; }
                         div.panel-body,
                         div.panel-default{
                             border-radius: 0;
                             border-top: none;
                         }
                         .btn.btn-info.btn-sm{
                             background: transparent;
                             border: solid 1px rgb(20, 109, 224);
                             color: rgb(20, 109, 224);
                             margin-bottom: 13px;
                             border-radius: 16px;
                         }
                         
                         
                         .btn.btn-info.btn-sm i.fa{
                             font-size: 12px;
                             margin: 0;
                         }
                         img.img-fluid.rounded-circle.one{
                            width: 120px;
                            height: 120px;
                         }
                       @media only screen and (max-width: 768px) {
                /* align glyph 
                .left-addon .fa  { left:  0px;}*/
                .right-addon .fa { right: 20px;}
                
                          
                         .btn.btn-info.btn-sm{
                             background: transparent;
                             color: rgb(20, 109, 224);
                             float: right;
                             display: inline;
                         }
                         
                         .btn.btn-info.btn-sm i.fa{
                             font-size: 12px;
                             margin: 0;
                             padding: 0;
                         }
                         div.panel-body span.pull-left{
                             font-size: 12px;
                             margin-bottom: 0;
                         }
                         div.panel-body span.user-list-files.d-flex.float-right{
                            margin-top: 0;
                         }
                       }
                     </style>
                        <!--- <a href="hospitals/{{$hospital->id}}">-->
                         <!----                        
                         {!! Form::open(['action' => 'HospitalController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                         **/ !!}
                          {{Form::hidden('pin', $hospital->pin)}}
                         {!! Form::close() !!}---->
                         <span class="pull-left">{{$hospital->h_name}} {{$hospital->h_type}} Hospital</span>
                         <span class="user-list-files d-flex float-right">
                            {!!Form::open(['action' => 'HospitalController@doctors', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                           
                            {{Form::hidden('id', $hospital->id)}}
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Doctors list"><i class="fa fa-user-o"></i>Staff List</button>
                           
                            {!!Form::close()!!}
                              @if ($hospital->user_id == auth()->user()->id)
                              <button class ="btn btn-info btn-sm" style="margin-right: px;"><a href="../create_ward" data-toggle="tooltip" data-placement="top" title="" data-original-title="Create Hospital Wards"><i class="ri-award-line"></i>Create Ward</a></button>
                             
                              <!---<button class ="btn btn-info btn-sm" style="margin-right: 6px;"><a href="../create_ward" data-toggle="tooltip" data-placement="top" title="" data-original-title="Create Laboratory"><i class="ri-award-line"></i>Create Laboratory</a></button>
                             ---->
                            {!!Form::open(['action' => 'HospitalController@add_staff', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                           
                            {{Form::hidden('id', $hospital->id)}}
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Staff to Hospital"><i class="fa fa-plus"></i>Add Staff</button>
                           
                            {!!Form::close()!!}

                             {!!Form::open(['action' => 'HospitalController@destroyy', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                            
                             {{Form::hidden('id', $hospital->id)}}
                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Hospital"><i class="fa fa-trash-o"></i>Delete Hospital</button>
                            
                             {!!Form::close()!!}

                             {!!Form::open(['action' => 'HospitalController@set_fee', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                            
                             {{Form::hidden('id', $hospital->id)}}
                             <button class ="btn btn-info btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Set Service Fees"><i class="fa fa-dollar"></i>Set Service Fees</button>
                        
                             {!!Form::close()!!}
                             <button class ="btn btn-info btn-sm"><a href="../hospitals/{{$hospital->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Hospital Details"><i class="fa fa-edit"></i>Edit Hospital Details</a></button>
                                 
                             @endif
                          </span>

                    </div>   
                 </div>
               </div>
               <div class="col-sm-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Hospital Staff</h4>
                        </div>
                     </div>
                     @php
                         
                         $do = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_pin');
                         $docs = App\User::where('role', '!=', 'Patient')->orderby('updated_at', 'desc')->whereIn('pin',$do)->get();
                                 
                     @endphp
                     @if (count($docs) > 0)
                     <div class="iq-card-body">
                        <div class="row">
                        @foreach ($docs as $doc)
                        <div class="col-md-3">
                           <div class="iq-card">
                              <div class="iq-card-body text-center">
                                 <div class="doc-profile">
                                    
                                    <img src="../img/profile/{{$doc->img}}" class="img-fluid rounded-circle one" alt="user-img">
                                 </div>
                                 <div class="iq-doc-info mt-3">
                                    <h5>{{$doc->name}}</h5>
                                    <h6>{{$doc->role}}</h6>
                                 </div>
                                 <div class="iq-doc-social-info mt-3 mb-3">
                                    <p class="mb-0 text-center pl-2 pr-2">{{$hospital->h_name}} {{$hospital->h_type}} hospital</p>
                                 </div>
                              </div>
                           </div>
                        </div> 
                           @endforeach
                     @else
                     <p>You have no hospital staff yet</p>   
                         
                        </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Hospital Patients</h4>
                  </div>
               </div>
               @php
                   $doc = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_name');
                  
                     $users = App\patients::whereIn('doctor', $doc)->paginate(100);
                  
                   
               @endphp  
                           @if (count($users) > 0)
                           <table class="table mb-0 table-borderless">
                              <thead>
                                 <tr>
                                  <th scope="col">MedicPin</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <!---
                                    <th scope="col">Action</th>--->

                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($users as $user)
                                 <tr>
                                    <td>{{$user->pin}}</td>
                                    <td>{{$user->name}}</td>
                                    @php
                                        $type = App\User::where('pin',$user->pin)->first();
                                    @endphp
                                @if (!empty($type))
                                <td>{{$type->nhis}}</td>
                                @else
                                <td>N/A</td>
                                @endif
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->address}}</td>
                                    <!---
                                    <td>

                                      <div class="dropdown">
                                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                         <i class="ri-more-fill"></i>
                                         </span>
                                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                         
                                         @if (auth()->user()->role == 'Doctor')
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i> Add New Medical Record</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('username', $user->username)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                                          @if ($user->status == 'Admitted')
                                          {!!Form::open(['action' => ['AdmissionController@update', $user->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('_method', 'PUT')}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="la la-procedures"></i> Discharge Patient</button>
                                          {!!Form::close()!!}
                                            @else
                                            {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $user->pin)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="la la-bed"></i> Admit Patient</button>
                                            {!!Form::close()!!}  
                                          @endif
                                         </a>
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i> Transfer Patient</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i> Message Patient</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
       
       
                                          {!!Form::open(['action' => ['PatientsController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('email', $user->email)}}
                                          {{Form::hidden('_method', 'DELETE')}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i> Delete Patient</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         @endif
                                         @if (auth()->user()->role == 'Pharmacist')
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('username',$user->username)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Doctor's Prescription For Patient."><i class="fa fa-bars"></i> View Doctor's Prescription</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         @endif
                                         @if (auth()->user()->role == 'Nurse')
                                         <a class="dropdown-item">
                                                
                                          {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('username', $user->username)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consultation With A Doctor"><i class="las la-radiation"></i> Schedule Consultation</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'ConsortationsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('username', $user->username)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Consultation History"><i class="las la-city"></i> Consultation History</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                                          {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          {{Form::hidden('username', $user->username)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         <a class="dropdown-item">
                       
                                          {!!Form::open(['action' => 'VisitorController@other', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $user->pin)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="See Visitors List"><i class="la la-user-nurse"></i> See Visitors List</button>
                                         
                                          {!!Form::close()!!}
                                         </a>
                                         @endif
                                         </div>
                                      </div>
                                        
                                    </td>--->
                                 </tr>
                                
                                 @endforeach
                              </tbody>
                           </table>
                               
                         <div class="col-md-6">
                             <div style="text-align:right;">
                                     <!-----The pagination link----->
                                     {{$users->links()}}
                             </div>
                         </div>
                             @else
                             <p>No Record Found</p>   
                           @endif
            </div>
         </div>
      </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-sm-12">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Operations</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="../add_op"><i class="ri-pencil-fill mr-2"></i>Add Operation</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              @if (count($operations) > 0)
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Patient</th>
                                       <th scope="col">Patient Name </th>
                                       <th scope="col">Doctors Team</th>
                                       <th scope="col">Date Of Operation</th>
                                       <th scope="col"> Report</th>
                                       <th scope="col">Diseases</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($operations as $operation)
                                    @php
                                    $patient = App\User::where('pin', $operation->patient_pin)->first();
                                    $doc1 = App\User::where('pin', $operation->doc_1)->first();
                                    $doc2 = App\User::where('pin', $operation->doc_2)->first();
                                    $doc3 = App\User::where('pin', $operation->doc_3)->first();
                                    $doc4 = App\User::where('pin', $operation->doc_4)->first();
                                    $doc5 = App\User::where('pin', $operation->doc_5)->first();
                                        
                                    @endphp
                                    <tr>
                                       <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="../img/profile/{{$patient->img}}" alt="profile"></td>
                                       <td>{{$patient->name}}</td>
                                       <td>
                                          <div class="iq-media-group">
                                             @if (!empty($doc1))
                                             <a href="#" class="iq-media">
                                             <img class="img-fluid avatar-40 rounded-circle" src="../img/profile/{{$doc1->img}}" alt="">
                                             </a>
                                                 
                                             @endif
                                             @if (!empty($doc2->img))
                                             <a href="#" class="iq-media">
                                             <img class="img-fluid avatar-40 rounded-circle" src="../img/profile/{{$doc2->img}}" alt="">
                                             </a>
                                                 
                                             @endif
                                             @if (!empty($doc3))
                                             <a href="#" class="iq-media">
                                             <img class="img-fluid avatar-40 rounded-circle" src="../img/profile/{{$doc3->img}}" alt="">
                                             </a>
                                                 
                                             @endif
                                             @if (!empty($doc4))
                                             <a href="#" class="iq-media">
                                             <img class="img-fluid avatar-40 rounded-circle" src="../img/profile/{{$doc4->img}}" alt="">
                                             </a>
                                                 
                                             @endif
                                             @if (!empty($doc5))
                                             <a href="#" class="iq-media">
                                             <img class="img-fluid avatar-40 rounded-circle" src="../img/profile/{{$doc5->img}}" alt="">
                                             </a>
                                                 
                                             @endif
                                          </div>
                                       </td>
                                       <td>{{$operation->created_at}}</td>
                                       <td><a href="../img/reports/{{$operation->report}}" style="text-decoration: none;" download="{{$operation->report}}"><i class="ri-file-pdf-line font-size-16 text-danger"> Download Report</i></a></td>
                                       <td>{{$operation->disease}}</td>
                                       <td>{{$operation->status}}</td>
                                    </tr>
                                        
                                    @endforeach
                                 </tbody>
                              </table>
                              @else 
                              <p>No Record Yet</p>
                                  
                              @endif
                     <!---                    
                     <div class="col-md-12 col-lg-6">
                        <div class="row">
                           <div class="col-md-6 col-lg-12">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                 <div class="iq-card-body">
                                    <div class="iq-info-box d-flex align-items-center p-3">
                                       <div class="info-image mr-3">
                                          <img src="images/page-img/30.png" class="img-fluid" alt="image-box">
                                       </div>
                                       <div class="info-text">
                                          <h3>120</h3>
                                          <span>Total Appointments</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-12">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                 <div class="iq-card-body">
                                    <div class="iq-info-box d-flex align-items-center p-3">
                                       <div class="info-image mr-3">
                                          <img src="images/page-img/31.png" class="img-fluid" alt="image-box">
                                       </div>
                                       <div class="info-text">
                                          <h3>5000</h3>
                                          <span>Completed Appointments</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-12">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                 <div class="iq-card-body">
                                    <div class="iq-info-box d-flex align-items-center p-3">
                                       <div class="info-image mr-3">
                                          <img src="images/page-img/32.png" class="img-fluid" alt="image-box">
                                       </div>
                                       <div class="info-text">
                                          <h3>1500</h3>
                                          <span>Cancelled Appointments</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-12">
                              <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                 <div class="iq-card-body">
                                    <div class="iq-info-box d-flex align-items-center p-3">
                                       <div class="info-image mr-3">
                                          <img src="images/page-img/33.png" class="img-fluid" alt="image-box">
                                       </div>
                                       <div class="info-text">
                                          <h3>500</h3>
                                          <span>Followup Appointments</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Recent Activity</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                                    View All
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                       <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                       <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                       <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                       <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                       <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="iq-timeline">
                                 <li>
                                    <div class="timeline-dots-fill"></div>
                                    <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 5 min ago</h6>
                                    <small class="float-right mt-1">Active</small>
                                    <div class="d-inline-block w-100">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque </p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-dots-fill bg-success"></div>
                                    <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 6 min ago</h6>
                                    <small class="float-right mt-1">Away</small>
                                    <div class="d-inline-block w-100">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-dots-fill bg-info"></div>
                                    <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 10 min ago</h6>
                                    <small class="float-right mt-1">Active</small>
                                    <div class="d-inline-block w-100">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-dots-fill bg-warning"></div>
                                    <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 15 min ago</h6>
                                    <small class="float-right mt-1">Offline</small>
                                    <div class="d-inline-block w-100">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="timeline-dots-fill bg-danger"></div>
                                    <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 18 min ago</h6>
                                    <small class="float-right mt-1">Away</small>
                                    <div class="d-inline-block w-100">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>             
               </div>
               <div class="col-md-12 col-lg-4">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Total Accident Report</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <h3>$40K</h3>
                           </div>
                        </div>
                        <div id="chart-7"></div>
                        <div class="row text-center mt-3">
                            <div class="col-sm-6">
                                <h6 class="text-truncate d-block">Last Month</h6>
                                <p class="m-0">358</p>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-truncate d-block">Current Month</h6>
                                <p class="m-0">194</p>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Total Death Report</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <h3>$20K</h3>
                           </div>
                        </div>
                        <div id="chart-8"></div>
                        <div class="row text-center mt-3">
                            <div class="col-sm-6">
                                <h6 class="text-truncate d-block">Last Month</h6>
                                <p class="m-0">220</p>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="text-truncate d-block">Current Month</h6>
                                <p class="m-0">120</p>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Overall Progress</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div id="apex-radialbar-chart"></div>
                     </div>
                                    </div>
                                 </div>
                              </div>
                           </div>---->
                        </div>
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
   <!-- Wrapper END -->
   
@endsection