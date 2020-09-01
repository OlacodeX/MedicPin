@extends('layouts.main')
@section('content')
@include('inc.navmain') 
   <!-- Page Content  -->
   <div>
    <div class="">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card container-fluid ">
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
                                <div class="iq-card-body p-0" style="margin-top: 20px;">
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                    <div class="panel panel-default">
                                    <div class="panel-body">
                                    <span class="pull-left">{{$doctor->doctor_name}}</span>
                                    <span class="user-list-files d-flex float-right">
                                       {!!Form::open(['action' => 'HospitalController@message', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $doctor->doctor_pin)}}
                                       {{Form::hidden('username', $doctor->doctor_name)}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="fa fa-envelope"></i></button>
                                      
                                       {!!Form::close()!!}
        
        
                                           {!!Form::open(['action' => ['HospitalController@destroy', $doctor->id], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                           {{Form::hidden('pin', $doctor->doctor_pin)}}
                                           {{Form::hidden('_method', 'DELETE')}}
                                           <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Remove Doctor from Your Hospital"><i class="fa fa-trash-o"></i></button>
                                          
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
                     </div>
 <!-- Wrapper END -->
  <!-- Footer -->
    <footer class="bg-white iq-footer" style="margin-top: 350px;">
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