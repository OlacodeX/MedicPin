@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
    <div>
    <div class="">
    <div class="row">
    <div class="col-sm-12" style="text-align:justify; margin-top:30px;">
      
      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Your Appointments </h4>
           </div>
           <div class="iq-card-header-toolbar d-flex align-items-center">
             <div class="dropdown">
                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                <i class="ri-more-fill"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                   <a class="dropdown-item" href="./appointments/create"><i class="las la-radiation"></i>Add New</a>
                </div>
             </div>
           </div>
        </div>
        <div class="iq-card-body">
           <div class="table-responsive">
              @if (auth()->user()->role == 'Patient')
              @php
                  $appointmentss = App\Appointments::where('patient',auth()->user()->pin)->paginate(8);
              @endphp
              @if (count($appointmentss) > 0)
             <table class="table mb-0 table-borderless">
                <thead>
                   <tr>
                      <th scope="col">Doctor</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Action</th>

                   </tr>
                </thead>
                <tbody>
                    @foreach ($appointmentss as $appointment)
                   <tr>
                       @php
                           $patient = App\patients::where('pin', $appointment->patient)->first();
                           $doctor = App\User::where('pin', $appointment->doctor)->first();
                       @endphp
                      <td>{{$doctor->name}}</td>
                      <td>{{$appointment->date}}</td>
                      <td>{{$appointment->time}}</td>
                      <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                      <td>
                        <div class="dropdown">
                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                           <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                           </a>
                           
                           <a class="dropdown-item">
                              {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('id', $appointment->id)}}
                              {{Form::hidden('_method', 'DELETE')}}
                              <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                             
                              {!!Form::close()!!}
                           </a>
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
                       {{$appointmentss->links()}}
               </div>
           </div>
               @else
               <p>No Record Found</p>   
             @endif
            @else
            @php
                $appointments = App\Appointments::where('doctor',auth()->user()->pin)->paginate(8);
            @endphp
            @if (count($appointments) > 0)
           <table class="table mb-0 table-borderless">
              <thead>
                 <tr>
                  <th scope="col">Patient's Pin</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>

                 </tr>
              </thead>
              <tbody>
                  @foreach ($appointments as $appointment)
                 <tr>
                     @php
                         $patient = App\patients::where('pin', $appointment->patient)->first();
                         $doctor = App\User::where('pin', $appointment->doctor)->first();
                     @endphp
                    <td>{{$appointment->patient}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$appointment->date}}</td>
                    <td>{{$appointment->time}}</td>
                    <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                    <td>
                      <div class="dropdown">
                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                         <i class="ri-more-fill"></i>
                         </span>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                         <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                           <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                         </a>
                         
                         <a class="dropdown-item">
                            {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                            {{Form::hidden('id', $appointment->id)}}
                            {{Form::hidden('_method', 'DELETE')}}
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                           
                            {!!Form::close()!!}
                         </a>
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
      <!-- Footer -->
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
        </footer>
        <!-- Footer END -->
@endsection