@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
   <div>
    <div class="">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Patients List</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                         <div class="row justify-content-between">
                            <div class="col-sm-12">
                              @include('inc.messages')
                               <div id="user_list_datatable_info" class="dataTables_filter">
                                 {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                     <div class="form-group mb-0">
                                       <div class="inner-addon right-addon one">
                                           <i class="fa fa-search"></i>
                                        <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                       </div>
                                       <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                     </div>
                                     {!! Form::close() !!}
                               </div>
                            </div>
                            
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="color:#02818f;">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                          <h4 class="card-title" style="color:#02818f;">Patients Registered By You</h4>
                      </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           @if (count($users) > 0)
                           <table class="table mb-0 table-borderless">
                              <thead>
                                 <tr>
                                  <th scope="col">MedicPin</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>

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
                                        
                                    </td>
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
                            
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="color:#02818f;">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                          <h4 class="card-title" style="color:#02818f;">Patients From Your Hospital</h4>
                      </div>
                     </div>
                     <div class="iq-card-body">
                       <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
             
                       @if (count($h_users) > 0)
                       <table class="table mb-0 table-borderless">
                          <thead>
                             <tr>
                              <th scope="col">MedicPin</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>

                             </tr>
                          </thead>
                          <tbody>
                             @foreach ($h_users as $h_user)
                             <tr>
                                <td>{{$h_user->pin}}</td>
                                <td>{{$h_user->name}}</td>
                                @php
                                    $type = App\User::where('email', $h_user->pin)->first();
                                @endphp
                                @if (!empty($type))
                                <td>{{$type->nhis}}</td>
                                @else
                                <td>N/A</td>
                                @endif
                                <td>{{$h_user->gender}}</td>
                                <td>{{$h_user->address}}</td>
                                <td>
                                  <div class="dropdown">
                                     <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                     <i class="ri-more-fill"></i>
                                     </span>
                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                     
                                     @if (auth()->user()->role == 'Doctor')
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i> Add New Medical Record</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('username', $h_user->username)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                                      @if ($h_user->status == 'Admitted')
                                      {!!Form::open(['action' => ['AdmissionController@update', $h_user->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('_method', 'PUT')}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="la la-procedures"></i> Discharge Patient</button>
                                      {!!Form::close()!!}
                                        @else
                                        {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('pin', $h_user->pin)}}
                                        <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="la la-bed"></i> Admit Patient</button>
                                        {!!Form::close()!!}  
                                      @endif
                                     </a>
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i> Transfer Patient</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i> Message Patient</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
   
   
                                      {!!Form::open(['action' => ['PatientsController@destroy', $h_user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('email', $h_user->email)}}
                                      {{Form::hidden('_method', 'DELETE')}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i> Delete Patient</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     @endif
                                     @if (auth()->user()->role == 'Pharmacist')
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('username',$h_user->username)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Doctor's Prescription For Patient."><i class="fa fa-bars"></i> View Doctor's Prescription</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     @endif
                                     @if (auth()->user()->role == 'Nurse')
                                     <a class="dropdown-item">
                                            
                                      {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('username', $h_user->username)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consultation With A Doctor"><i class="las la-radiation"></i> Schedule Consultation</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'ConsortationsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('username', $h_user->username)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Consultation History"><i class="las la-city"></i> Consultation History</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                                      {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      {{Form::hidden('username', $h_user->username)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     <a class="dropdown-item">
                   
                                      {!!Form::open(['action' => 'VisitorController@other', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('pin', $h_user->pin)}}
                                      <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="See Visitors List"><i class="la la-user-nurse"></i> See Visitors List</button>
                                     
                                      {!!Form::close()!!}
                                     </a>
                                     @endif
                                     </div>
                                  </div>
                                    
                                </td>
                             </tr>
                            
                             @endforeach
                          </tbody>
                       </table>
                           
                     <div class="col-md-6">
                         <div style="text-align:right;">
                                 <!-----The pagination link----->
                                 {{$h_users->links()}}
                         </div>
                     </div>
                         @else
                         <p>No Record Found</p>   
                       @endif
                     </div>
                  </div>
                           <style>
                              table.table.mb-0.table-borderless{
                                  border-spacing: 1em;
                                  border-collapse: separate;
                               }
                              /* enable absolute positioning */
                      .inner-addon {
                        position: relative;
                      }
                      
                      /* style glyph */
                      .inner-addon .fa {
                        position: absolute;
                        padding: 10px;
                        pointer-events: none;
                        color: #02818f;
                        font-weight: 900;
                      }
                      
                      /* align glyph 
                      .left-addon .fa  { left:  0px;}*/
                      .right-addon .fa { right: 260px;}
                      .right-addon.one .fa { right: 950px;}
                      
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
                                   border: none;
                                   color: #02818f;
                               }
                               
                               
                               .btn.btn-info.btn-sm i.fa{
                                   margin: 0;
                               }
                               .btn.btn-info.btn-sm i{
                                   font-size: 16px;
                                   margin: 0;
                                   font-weight: bold;
                               }
                             @media only screen and (max-width: 768px) {
                      /* align glyph 
                      .left-addon .fa  { left:  0px;}*/
                      .right-addon .fa { right: 20px;}
                      
                                
                               .btn.btn-info.btn-sm{
                                   background: transparent;
                                   border: none;
                                   color: #02818f;
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
    <!-- Footer END -->
@endsection