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
                  <li class="breadcrumb-item active" aria-current="page">Appointments</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Appointments</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   @if (count($doctors) > 0)
   @foreach ($doctors as $doctor)
   @php
       $detail = App\User::where('pin', $doctor->doctor_pin)->first()
   @endphp
   <div class="col-md-6 col-lg-4 col-xl-3">
      <div class="card widget-profile pat-widget-profile">
         <div class="card-body">
            <div class="pro-widget-content">
               <div class="profile-info-widget"> 
                  <a class="booking-doc-img">
                     <img src="img/profile/{{$detail->img}}" alt="User Image">
                  </a>
                  <div class="profile-det-info">
                     <h3><a>{{$detail->name}}</a></h3>
                     
                     <div class="patient-details">
                        <h5><b>MedicPin :</b> {{$detail->pin}}</h5>
                        <!--<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alabama, USA</h5>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="patient-info">
               <ul>
                  <li>Phone <span>{{$detail->cc.$detail->p_number}}</span></li>
                  <!--<li>Age <span>{{\Carbon\Carbon::parse($type->age)->diff(\Carbon\Carbon::now())->format('%y')}} Years, {{$type->gender}}</span></li>
                  <li>Blood Group <span>AB+</span></li>
                  <li>
                     Actions
                     <span>
                        <div class="dropdown">
                           <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Click Here </a>
                           <div class="dropdown-menu">
                              @if (auth()->user()->role == 'Doctor')
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i> Add New Medical Record</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('username', $user->username)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
                               @if ($user->status == 'Admitted')
                               {!!Form::open(['action' => ['AdmissionController@update', $user->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('_method', 'PUT')}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="la la-procedures"></i> Discharge Patient</button>
                               {!!Form::close()!!}
                                 @else
                                 {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('pin', $user->pin)}}
                                 <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="la la-bed"></i> Admit Patient</button>
                                 {!!Form::close()!!}  
                               @endif
                              </a>
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i> Transfer Patient</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i> Message Patient</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">


                               {!!Form::open(['action' => ['PatientsController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('email', $user->email)}}
                               {{Form::hidden('_method', 'DELETE')}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i> Delete Patient</button>
                              
                               {!!Form::close()!!}
                              </a>
                              @endif
                              @if (auth()->user()->role == 'Pharmacist')
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('username',$user->username)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Doctor's Prescription For Patient."><i class="fa fa-bars"></i> View Doctor's Prescription</button>
                              
                               {!!Form::close()!!}
                              </a>
                              @endif
                              @if (auth()->user()->role == 'Nurse')
                              <a class="dropdown-item">
                                     
                               {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('username', $user->username)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consultation With A Doctor"><i class="las la-radiation"></i> Schedule Consultation</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'ConsortationsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('username', $user->username)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Consultation History"><i class="las la-city"></i> Consultation History</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
                               {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               {{Form::hidden('username', $user->username)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                              
                               {!!Form::close()!!}
                              </a>
                              <a class="dropdown-item">
            
                               {!!Form::open(['action' => 'VisitorController@other', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $user->pin)}}
                               <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="See Visitors List"><i class="la la-user-nurse"></i> See Visitors List</button>
                              
                               {!!Form::close()!!}
                              </a>
                              @endif
                           </div>
                        </div>
                     </span>
                  </li>-->
               </ul>
         </div>
      </div>
   </div>

</div>
@endforeach
<div class="col-md-6">
 <div style="text-align:right;">
         <!-----The pagination link----->
         {{$details->links()}}
 </div>
</div>
 @else
 <p>No Record Found</p>   
@endif
</div>
</div>
</div>

@else
<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>

</div>
@endif   

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