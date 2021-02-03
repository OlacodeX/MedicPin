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
                  <li class="breadcrumb-item active" aria-current="page">Laboratory Tests</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Laboratory Tests</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">

   <div class="row">
      <div class="col-md-12">
         <div class="card dash-card">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="dash-widget dct-border-rht">
                        <div class="circle-bar circle-bar1">
                     
                           @php
                           $lab = App\Laboratories::where('created_by', auth()->user()->pin)->first();
                               $patients = App\Lab::where('lab',$lab->id)->paginate(10);
                           @endphp
                           @php
                               $total = App\patients::count();
                               $doc_patients = App\patients::where('doc_email', auth()->user()->email)->count();
                               if ($total == '0') {
                                 $percentage = 0;
                               } else {
                                 $percentage = $doc_patients/$total * 100;
                               }
                               
                               
                           @endphp
                           <div class="circle-graph1" data-percent="75">
                              <img src="assets/img/icon-01.png" class="img-fluid" alt="{{$percentage}}">
                           </div>
                        </div>
                        <div class="dash-widget-info">
                           <h6>Total Tests</h6>
                           <h3><span class="counter">{{App\Lab::where('lab',$lab->id)->count()}}</span></h3>
                           <p class="text-muted">Till Today</p>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-12 col-lg-4">
                     <div class="dash-widget dct-border-rht">
                        <div class="circle-bar circle-bar2">
                     @php
                         $total = App\Consortations::whereDay('created_at', now()->day)->count();
                         $doc_appointment = App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->count();
                         if ($total == '0') {
                           $percentage = 0;
                         } else {
                           $percentage = $doc_appointment/$total * 100;
                         }
                         
                         
                     @endphp
                           
                           <div class="circle-graph2" data-percent="{{$percentage}}">
                              <img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
                           </div>
                        </div>
                        <div class="dash-widget-info">
                           <h6>Tests Not Yet Carried Out</h6>
                           <h3><span class="counter">{{App\Lab::where('lab',$lab->id)->where('status', 'Pending')->count()}}</span></h3>
                           <p class="text-muted">{{\Carbon\Carbon::now()->format('Y-m-d')}}</p>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-12 col-lg-4">
                     <div class="dash-widget">
                        <div class="circle-bar circle-bar3">
                           @php
                               $total = App\Appointments::count();
                               $doc_appointments = App\Appointments::where('doctor', auth()->user()->pin)->count();
                               if ($total == '0') {
                                 $percentage = 0;
                               } else {
                                 $percentage = $doc_appointments/$total * 100;
                               }
                               
                               
                           @endphp
                           <div class="circle-graph3" data-percent="{{$percentage}}">
                              <img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
                           </div>
                        </div>
                        <div class="dash-widget-info">
                           <h6>Carried Out Tests</h6>
                           <h3>{{App\Lab::where('lab',$lab->id)->where('status', 'Done')->count()}}</span></h3>
                           <p class="text-muted">{{\Carbon\Carbon::now()->format('Y-m-d')}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Patients Awaiting Test</h4>
               <p class="card-text">Below are patients awaiting laboratory tests.</p>
            </div>
            <div class="card-body">
               @php
               $lab = App\Laboratories::where('created_by', auth()->user()->pin)->first();
                   $patients = App\Lab::where('lab',$lab->id)->paginate(10);
               @endphp
               <div class="col-sm-5">
                  <div id="user_list_datatable_info" class="dataTables_filter">
                    {!! Form::open(['action' => 'PagesController@search_patient', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                        <div class="form-group mb-0">
                           <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin To Search" aria-controls="user-list-table">
                         
                          <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                        </div>
                        {!! Form::close() !!}
                  </div>
               </div><br><br>
               @if (count($patients) > 0)
               @foreach ($patients as $patient)
               <div class="appointment-list">
                  @php
                      //$patient = App\patients::where('pin', $appointment->patient)->first();
                      $patient_profile = App\User::where('pin', $patient->patient_pin)->first();
                      //$doctor = App\User::where('pin', $appointment->doctor)->first();
                  @endphp
                  <div class="profile-info-widget">
                     <a class="booking-doc-img">
                        <img src="img/profile/{{$patient_profile->img}}" alt="User Image">
                     </a>
                     <div class="profile-det-info">
                        <h3><a>{{$patient->patient_name}}</a></h3>
                        <div class="patient-details">
                           <h5 class="mb-0"><i class="fas fa-phone"></i> <a href="tel:{{$patient_profile->p_number}}" style="text-decoration: none;">{{$patient_profile->p_number}}</a></h5>
                           <h5><i class="fas fa-envelope"></i> {{$patient_profile->email}}</h5>
                        </div>
                     </div>
                  </div>
                  <div class="appointment-action">
                     <a class="btn btn-sm pull-right">
                        
                        {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('pin', $patient->patient_pin)}}
                        <!--{{Form::hidden('username', $patient->username)}}--->
                        <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="fas fa-eye"></i> View and Complete Test</button>
                       
                        {!!Form::close()!!}
                     </a>
                  </div>
               </div>
               @endforeach
             
           @else
           <p>No Scheduled Tests Yet</p>   
         @endif
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
  <!-- Footer 
        <footer class="bg-white iq-footer" style="margin-top: 150px;">
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