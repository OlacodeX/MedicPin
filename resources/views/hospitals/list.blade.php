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
                  <li class="breadcrumb-item active" aria-current="page">Staff List</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Staff List</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card card-table mb-0">
      <div class="card-body">
         @if (count($doctors) > 0)
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Role</th>
                     <th>Expertise</th>
                     <th>Contact</th> 
                     <th>Action</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($doctors as $doctor)
                  @php
                      $profile = App\User::where('pin', $doctor->doctor_pin)->first();
                  @endphp
                  <tr>
                     <td>
                        <h2 class="table-avatar">
                           <a href="" class="avatar avatar-sm mr-2">
                              <img class="avatar-img rounded-circle" src="img/profile/{{$profile->img}}" alt="User Image">
                           </a>
                           <a href="">{{$profile->name}}</a>
                        </h2>
                     </td>
                     <td>{{$profile->role}}</td>
                     <td>{{$profile->expertise}}</td>
                     <td>{{$profile->cc.$profile->p_number}}</td> 
                     <td><span class="">
                        
                        {!!Form::open(['action' => 'HospitalController@message', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('pin', $doctor->doctor_pin)}}
                        {{Form::hidden('username', $doctor->doctor_name)}}
                        <button type="submit" class ="badge badge-pill bg-success-light" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="fa fa-envelope"></i></button>
                       
                        {!!Form::close()!!}
                     </span></td>
                     @if ($doctor->added_by == auth()->user()->id)
                     <td class="text-right">
                        <div class="table-action">
                           {!!Form::open(['action' => ['HospitalController@destroy', $doctor->id], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                           {{Form::hidden('pin', $doctor->doctor_pin)}}
                           {{Form::hidden('_method', 'DELETE')}}
                           <button type="submit" class ="btn btn-sm bg-primary-light" data-toggle="tooltip" data-placement="top" data-original-title="Remove Doctor from Your Hospital"><i class="fas fa-trash"></i></button>
                          
                           {!!Form::close()!!}
                               
                        </div>
                     </td>
                     @endif
                  </tr> 
                  @endforeach

               </tbody>
            </table>
         </div>
         @else
         <p class="text-center">No Doctors Yet</p>    
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