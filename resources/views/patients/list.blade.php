@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
   <div>
    <div class="">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Your Patients List</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                         <div class="row justify-content-between">
                            <div class="col-sm-12">
                              @include('inc.messages')
                               <div id="user_list_datatable_info" class="dataTables_filter">
                                 {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                     <div class="form-group mb-0">
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-search"></i>
                                        <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                       </div>
                                       <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                     </div>
                                     {!! Form::close() !!}
                               </div>
                            </div>
                            
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="color:#02818f;">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                          <h4 class="card-title" style="color:#02818f;">Your Patients List</h4>
                      </div>
                     </div>
                     <div class="iq-card-body pl-0 pr-0">
                       <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                      @if (count($users) > 0)
                      <div class="iq-card-body">
                          @foreach ($users as $user)
                          <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                  
                          {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                          **/ !!}
                           {{Form::hidden('pin', $user->pin)}}
                           {{Form::hidden('username', $user->username)}}
                          {!! Form::close() !!}
                          <div class="media">
                              <div class="media-body">
                                  <h5 class="mt-0 mb-0" style="color:#02818f;">{{$user->name}} 
                                    <span class="user-list-files d-flex float-right">
                                    
                                    {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="fa fa-plus"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    {{Form::hidden('username', $user->username)}}
                                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="fa fa-bars"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i></button>
                                   
                                    {!!Form::close()!!}
     
     
                                        {!!Form::open(['action' => ['PatientsController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('email', $user->email)}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i></button>
                                       
                                        {!!Form::close()!!}
                                     </span>
                              </div>
                          </div>
                        </a>
                          <hr>
                          @endforeach
                      </div>
                      @else
                      <p class="text-center">No Patients Yet</p>    
                      @endif

                     </div>
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
                        color: #02818f;
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
                         </div>
                   </div>
                </div>
          </div>
       </div>
    </div>
 </div>
 </div>
 <!-- Wrapper END -->
  <!-- Footer -->
    <footer class="bg-white iq-footer">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-6">
                <ul class="list-inline mb-0">
                   <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                   <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
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