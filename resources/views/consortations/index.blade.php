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
                  <li class="breadcrumb-item active" aria-current="page">Patient's Visit History</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Patient's Visit History</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Patient's Visit History</b></h4> 
      </div>
      <div class="card-body">
         @if (count($consortations) > 0)
      <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
        <thead>
            
        <tr>
         <th>Date</th>
         <th>Nurse On Duty</th>
         <th>Attended To By</th>
      </tr>
  </thead>
  <tbody>
   @foreach ($consortations as $consortation)
      <tr>
         <td class="text-center">{{$consortation->created_at}}</td>
         <td>Nurse {{$consortation->scheduled_by}}</td>
         <td>Dr. {{$consortation->doc_name}}</td>
      </tr> 
            @endforeach                      
        </tbody>
      </table>
   </div>
         <div class="col-md-6">
             <div style="text-align:right;">
                     <!-----The pagination link----->
                     {{$consortations->links()}}
             </div>
          </div>
             @else
             <p>No Record Found For This Patient.</p>    
             @endif
      </div>
   </div>
   @if (auth()->user()->role == 'Nurse')
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Schedule Patient's Visit With A Doctor</b></h4> 
      </div>
      <div class="card-body">
         {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
         {{Form::hidden('pin', $patient->pin)}}
         {{Form::hidden('username', $patient->username)}}
         <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consortation With A Doctor"><i class="las la-radiation"></i>Schedule Patient's Visit With A Doctor</button>
        
      </div>
   </div>
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