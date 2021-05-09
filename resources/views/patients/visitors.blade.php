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
   @if (auth()->user()->role == 'Patient')
@if (count($visitors) > 0)
<div class="card card-table mb-0">
   <div class="card-header"> 
      <h4 class="card-title">Your Visitors</h4>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover table-center mb-0">
            <thead>
               <tr>
                  <th>Visitor</th>
                  <th>Visit Date</th>
                  <th>Gender</th>
                  <th>Contact</th>
                  <th>Actions</th>

               </tr>
            </thead>
            <tbody>

               @foreach ($visitors as $visitor)
               <tr>
                  <td>{{$visitor->name}}</td>
                  <td>{{$visitor->date}}</td>
                  <td>{{$visitor->gender}}</td>
                  <td><a href="tel:{{$visitor->number}}" style="text-decoration: none;">{{$visitor->number}}</a></td>
                  <td>
                     <a class="btn bg-info-light" href="visitors/{{$visitor->id}}/edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment">
                         Edit 
                     </a>
                  </td>
                  <td>
                     {!!Form::open(['action' => ['VisitorController@destroy', $visitor->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                     {{Form::hidden('id', $visitor->id)}}
                     {{Form::hidden('_method', 'DELETE')}}
                     <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                    
                     {!!Form::close()!!}

                  </td>
               </tr>
              
               @endforeach
            </tbody>
         </table>
               
         <div class="col-md-6">
             <div style="text-align:right;">
                     <!-----The pagination link----->
                     {{$visitors->links()}}
             </div>
         </div>
             @else
             <p>No Record Found</p>   
           @endif
   @else
   @if (count($p_visitors) > 0)
<div class="card card-table mb-0">
   <div class="card-header"> 
      <h4 class="card-title">Visitors For This Patient</h4>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover table-center mb-0">
            <thead>
               <tr>
                  <th>Visitor</th>
                  <th>Visit Date</th>
                  <th>Gender</th>
                  <th>Contact</th>
               </tr>
            </thead>
            <tbody>

               @foreach ($p_visitors as $visitor)
               <tr>
                  <td>{{$visitor->name}}</td>
                  <td>{{$visitor->date}}</td>
                  <td>{{$visitor->gender}}</td>
                  <td><a href="tel:{{$visitor->number}}" style="text-decoration: none;">{{$visitor->number}}</a></td>
                   
               </tr>
              
               @endforeach
            </tbody>
         </table>
               
         <div class="col-md-6">
             <div style="text-align:right;">
                     <!-----The pagination link----->
                     {{$p_visitors->links()}}
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