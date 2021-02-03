@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
         <div>
            <div class="">
               <div class="row">
                  <div class="col-lg-12" style="margin-top: 40px;">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                                         <h4 class="card-title">Patients Awaiting Test</h4>
                                     </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="patient-progress m-0 p-0">
                                     <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                             
                                     {!! Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                     **/ !!}
                                      {{Form::hidden('pin', $patient->pin)}}
                                      {{Form::hidden('username', $patient->username)}}
                                     {!! Form::close() !!}
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>{{$patient->name}}</h6>
                                 </div>
                                          
                                          <span class="user-list-files d-flex float-right">
                                             {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                             {{Form::hidden('pin', $patient->pin)}}
                                             <!--{{Form::hidden('username', $patient->username)}}--->
                                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="las la-eye"></i></button>
                                            
                                             {!!Form::close()!!}
                                           </span>
                              </li> 
                                     </a>     
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
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 300px;">
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