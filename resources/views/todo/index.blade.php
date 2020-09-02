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
                           <h4 class="card-title" style="color: #02818f;">Your Schedule for Today</h4>
                        </div>
                        <div class="col-sm-12 col-md-6">
                           <div class="user-list-files d-flex float-right">
                            <a href="./schedule/create" class="chat-icon-delete" style="text-decoration: none;">
                             Add To Do 
                            </a>
                            <a href="./schedule_yesterday" class="chat-icon-delete" style="text-decoration: none;">
                             Yesterday's Schedule
                            </a>
                            <a href="./schedule" class="chat-icon-delete" style="text-decoration: none;">
                             Today's Schedule
                            </a>
                            <a href="./schedule_tomorrow" class="chat-icon-delete" style="text-decoration: none;">
                             Tomorrow's Schedule 
                            </a>
                             </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                @include('inc.messages')
                              </div>
                              <div class="col-sm-12 col-md-6">
                              </div>
                           </div>
                           
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden fadeInUp" data-wow-delay="0.6s">
                             
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
                             <div class="iq-card-body p-0">
                                 @if (count($todos) > 0)
                                 @foreach ($todos as $todo)
                                 <a href="" onclick="document.getElementById('my_form_1').submit();">
                                 <!----                        
                                 {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                 **/ !!}
                                  {{Form::hidden('pin', $todo->pin)}}
                                 {!! Form::close() !!}---->
                                 <div class="">
                                 <div class="">
                                    <span class="pull-left"><i class="fa fa-calendar" style="margin-right:5px;"></i> {{ $todo->date}} <i class="fa fa-clock-o" style="margin-right:5px;margin-left: 10px;"></i>  {{ $todo->time}}</span><br>
                                   
                                 <span class="pull-left">{{$todo->title}}</span>
                                 <span class="user-list-files d-flex float-right">
                                    <!---
                                 {!!Form::open(['action' => 'TodoController@done', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('id', $todo->id)}}
                                 <button type="submit" class ="btn btn-info btn-sm" title="Mark Schedule As Done"><i class="fa fa-envelope"></i></button>
                                
                                 {!!Form::close()!!}---->
  
  
                                     {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                    
                                     {{Form::hidden('_method', 'DELETE')}}
                                     <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete schedule"><i class="fa fa-trash-o"></i></button>
                                    
                                     {!!Form::close()!!}
                                     <button class ="btn btn-info btn-sm"><a href="schedule/{{$todo->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit/Move Schedule"><i class="fa fa-edit"></i></a></button>
                                  </span>
                                 </div>
                                 </div><br>
                                 </a>
                                 @endforeach
  
                                 @else
                                 <p class="text-center">No activity on your schedule today, check back tomorrow.</p>    
                                 @endif
                                 
                             </div>
                         </div>
                        </div>
                           </div>
                     </div>
                  </div>
               </div>
   <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:250px;">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 text-right">
                     Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                  </div>
               </div>
            </div>
         </footer>
         <!-- Footer END -->
         @endsection