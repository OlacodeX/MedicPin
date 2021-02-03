@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
<div class="">
 @include('inc.messages')
                     
            @php
            $lab = App\Laboratories::where('created_by', auth()->user()->pin)->first();
                $patients = App\Lab::where('lab',$lab->id)->paginate(10);
            @endphp
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-primary rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\Lab::where('lab',$lab->id)->count()}}</span></h2>
                                    <h5 class="">Total Tests</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\Lab::where('lab',$lab->id)->where('status', 'Pending')->count()}}</span></h2>
                                    <h5 class="">Tests Not Yet Carried Out</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-danger rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                 <div class="text-right">                  
                                    <h2 class="mb-0"><span class="counter">{{App\Lab::where('lab',$lab->id)->where('status', 'Done')->count()}}</span></h2>
                                    <h5 class="">Carried Out Tests</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
   <!----
      <div class="col-lg-4">
         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Health Curve</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <div id="home-chart-06" style="height: 350px;"></div>
            </div>
         </div>
      </div>                  
   ----> 
</div>
  
   
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
          border: none;
          color: #02818f;
      }
      
      
      .btn.btn-info.btn-sm i.fa{
          font-size: 12px;
          margin: 0;
      }
    @media only screen and (max-width: 768px) {
/* align glyph 
.left-addon .fa  { left:  0px;}*/
.right-addon .fa { right: 20px;}

       
      .btn.btn-info.btn-sm{
          background: transparent;
          border: none;
          color: #02818f;
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
      <div class="col-lg-12" style="margin-top: 40px;">
         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                             <h4 class="card-title">Patients Awaiting Test</h4>
                         </div>
            </div>
            @php
            $lab = App\Laboratories::where('created_by', auth()->user()->pin)->first();
                $patients = App\Lab::where('lab',$lab->id)->paginate(10);
            @endphp
            <div class="iq-card-body">
             <div class="col-sm-5">
                <div id="user_list_datatable_info" class="dataTables_filter">
                  {!! Form::open(['action' => 'PagesController@search_patient', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                      <div class="form-group mb-0">
                         <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin To Search" aria-controls="user-list-table">
                       
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                      </div>
                      {!! Form::close() !!}
                </div>
             </div>
               <ul class="patient-progress m-0 p-0">
                         @if (count($patients) > 0)
                         @foreach ($patients as $patient)
                         <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                 
                         {!! Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                         **/ !!}
                          {{Form::hidden('pin', $patient->patient_pin)}}
                          {{Form::hidden('username', $patient->username)}}
                         {!! Form::close() !!}
                  <li class="d-flex mb-3 align-items-center">
                     <div class="media-support-info">
                        <h6>{{$patient->patient_name}}</h6>
                     </div>
                              
                              <span class="user-list-files d-flex float-right">
                                 {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('pin', $patient->patient_pin)}}
                                 <!--{{Form::hidden('username', $patient->username)}}--->
                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="las la-eye"></i></button>
                                
                                 {!!Form::close()!!}
                               </span>
                  </li> 
                         </a>
                         @endforeach

                         @else
                         <p class="text-center">No Scheduled Tests Yet</p>    
                         @endif            
               </ul>
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
    <!-- Footer END -->
@endsection