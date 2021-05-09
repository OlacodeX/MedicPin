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
                  <li class="breadcrumb-item active" aria-current="page">Laboratory Test Request Detail</li>
               </ol>
            </nav>
            @if (!empty($patient))
            <h2 class="breadcrumb-title">Laboratory Test Request For {{$patient->name}}</h2>
                
            @else
            <h2 class="breadcrumb-title">Laboratory Test Request For this patient</h2>
                
            @endif
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
								
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card card-table">
      <div class="card-header">
         <h4 class="card-title"><b>Laboratory Test Request Detail</b></h4>
         
      </div>
      <div class="card-body">
         @if (count($patients) > 0)
               <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Test</th>
                           <th>Requested By</th>
                           <th>Status</th>
                           <th>Action</th>        
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($patients as $patient)
                           <tr>
                              <td>{{$patient->created_at}}</td>
                              <td>
                                  {{$patient->test_name}}
                             </td>
                              <td>{{$patient->doc_name}}</td>
                              <td>{{$patient->status}}</td> 
                           <td class="text-right">
                              <div class="table-action"> 
                                 {!!Form::open(['action' => 'LabsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('pin', $patient->patient_pin)}}
                                 {{Form::hidden('id', $patient->id)}}
                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Carry Out Test"><i class="ri-pencil-fill mr-2"></i>Carry Out Test</button>
                                
                                 {!!Form::close()!!}
                              </div>
                           </td>
                           <td>
                              
                              {!!Form::open(['action' => ['HmoController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                             <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Remove Staff From Organization"><i class="fa fa-trash-o mr-2"></i>Remove Staff From Organization</button>
                            
                             {!!Form::close()!!}
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
               @else
               <p>No test for today</p>
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