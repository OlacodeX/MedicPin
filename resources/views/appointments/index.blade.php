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
   <div class="appointments">
   
      <!-- Appointment List -->
      @if (auth()->user()->role == 'Patient')
      @php
            $appointmentss = App\Appointments::where('patient',auth()->user()->pin)->paginate(8);
      @endphp
      @if (count($appointmentss) > 0)
      @foreach ($appointmentss as $appointment)
      <div class="appointment-list">
         @php
             $patient = App\patients::where('pin', $appointment->patient)->first();
             $patient_profile = App\User::where('pin', $appointment->patient)->first();
             $doctor = App\User::where('pin', $appointment->doctor)->first();
         @endphp
         <div class="profile-info-widget">
            <a href="" class="booking-doc-img">
               <img src="img/profile/{{$doctor->img}}" alt="User Image">
            </a>
            <div class="profile-det-info">
               <h3><a href="">{{$doctor->name}}</a></h3>
               <div class="patient-details">
                  <h5><i class="far fa-clock"></i> {{$appointment->date}}, {{$appointment->time}}</h5>
                  <h5><i class="fas fa-envelope"></i> {{$doctor->email}}</h5>
                  <h5 class="mb-0"><i class="fas fa-phone"></i> <a href="tel:{{$doctor->phone}}" style="text-decoration: none;">{{$doctor->phone}}</a></h5>
               </div>
            </div>
         </div>
         <div class="appointment-action">
            <a href="appointments/{{$appointment->id}}/edit" class="btn btn-sm bg-info-light">
               <i class="far fa-edit"></i> Edit
            </a>
            <!--
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment" class="btn btn-sm bg-success-light">
               <i class="fas fa-check" ></i> Accept
            </a>--->
            <a class="btn btn-sm">
               
               {!!Form::open(['action' => ['AppointmentsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
               {{Form::hidden('id', $appointment->id)}}
               {{Form::hidden('_method', 'DELETE')}}
               <button type="submit" class ="btn btn-sm bg-danger-light" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="far fa-trash-alt"></i> Delete</button>
              
               {!!Form::close()!!}
            </a>
         </div>
      </div>
      @endforeach
    
<div class="col-md-6">
  <div style="text-align:right;">
          <!-----The pagination link----->
          {{$appointmentss->links()}}
  </div>
</div>
  @else
  <p>No Record Found</p>   
@endif
      <!-- /Appointment List -->
@else
@php
    $appointments = App\Appointments::where('doctor',auth()->user()->pin)->paginate(8);
@endphp
@if (count($appointments) > 0)
@foreach ($appointments as $appointment)
<div class="appointment-list">
   @php
       $patient = App\patients::where('pin', $appointment->patient)->first();
       $patient_profile = App\User::where('pin', $appointment->patient)->first();
       $doctor = App\User::where('pin', $appointment->doctor)->first();
   @endphp
   <div class="profile-info-widget">
      <a href="patient-profile.html" class="booking-doc-img">
         <img src="img/profile/{{$patient_profile->img}}" alt="User Image">
      </a>
      <div class="profile-det-info">
         <h3><a href="patient-profile.html">{{$patient_profile->name}}</a></h3>
         <div class="patient-details">
            <h5><i class="far fa-clock"></i> {{$appointment->date}}, {{$appointment->time}}</h5>
            <h5><i class="fas fa-envelope"></i> {{$patient_profile->email}}</h5>
            <h5 class="mb-0"><i class="fas fa-phone"></i> <a href="tel:{{$patient_profile->cc . $patient_profile->p_number}}" style="text-decoration: none;">{{$patient_profile->cc . $patient_profile->p_number}}</a></h5>
         </div>
      </div>
   </div>
   <div class="appointment-action">
      <a href="appointments/{{$appointment->id}}/edit" class="btn btn-sm bg-info-light" >
         <i class="far fa-edit"></i> Edit
      </a>
      <!--
      <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment" class="btn btn-sm bg-success-light">
         <i class="fas fa-check" ></i> Accept
      </a>--->
      <a class="btn btn-sm">
         
         {!!Form::open(['action' => ['AppointmentsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
         {{Form::hidden('id', $appointment->id)}}
         {{Form::hidden('_method', 'DELETE')}}
         <button type="submit" class ="btn btn-sm bg-danger-light" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="far fa-trash-alt"></i> Delete</button>
        
         {!!Form::close()!!}
      </a>
   </div>
</div>
@endforeach

<div class="col-md-6">
<div style="text-align:right;">
    <!-----The pagination link----->
    {{$appointments->links()}}
</div>
</div>
@else
<p>No Record Found</p>   
@endif
@endif
								
                     </div>
                     
						</div>
					</div>

				</div>

			</div>		
    <div>
@else
<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>

</div>
@endif   

          <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'pre' );
          </script> 
     <!-- Wrapper END -->
      <!-- Footer 
        <footer class="bg-white iq-footer" style="margin-top:280px;">
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
        </footer>Footer END -->
@endsection