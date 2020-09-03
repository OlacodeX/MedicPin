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
                         <h4 class="card-title">Your Search Result</h4>
                      </div>
                   </div>
                              @include('inc.messages')
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
                                        color: rgb(20, 109, 224);
                                    }
                                    
                                    
                                    .btn.btn-info.btn-sm i.fa{
                                        font-size: 12px;
                                        margin: 0;
                                    }
                                    .iq-card-body{
                                       padding-bottom: 50px;
                                    }
                                  @media only screen and (max-width: 768px) {
                           /* align glyph 
                           .left-addon .fa  { left:  0px;}*/
                           .right-addon .fa { right: 20px;}
                           
                                     
                                    .btn.btn-info.btn-sm{
                                        background: transparent;
                                        border: none;
                                        color: rgb(20, 109, 224);
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
                                <div class="iq-card-body">
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                            
                                    {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                     {{Form::hidden('pin', $user->pin)}}
                                     {{Form::hidden('username', $user->username)}}
                                    {!! Form::close() !!}
                                    <div class="panel panel-default">
                                    <div class="panel-body">
                                    <span class="pull-left">{{$user->name}}</span>
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
                                </div>
                            </div>
                           </div>
                              </div>
                        </div>
 <!-- Wrapper END -->
  <!-- Footer -->
    <footer class="bg-white iq-footer" style="margin-top:300px;">
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