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
                         <h4 class="card-title">Doctors List</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                         <div class="row justify-content-between">
                            <div class="col-sm-12 col-md-6">
                              @include('inc.messages')
                               <div id="user_list_datatable_info" class="dataTables_filter">
                                 {!! Form::open(['action' => 'HospitalController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                     <div class="form-group mb-0">
                                       <div class="inner-addon right-addon">
                                           <i class="fa fa-search"></i>
                                        <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                       </div>
                                       <button type="submit" class="btn btn-primary" style="margin-top: 10px;margin-bottom: 20px;">Search</button>
                                     </div>
                                     {!! Form::close() !!}
                               </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                               <div class="user-list-files d-flex float-right">
                                   <a href="javascript:void();" class="chat-icon-delete">
                                     Pdf
                                   </a>
                                 </div>
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
                               @if (count($doctors) > 0)
                               @foreach ($doctors as $doctor)
                               <div class="iq-card-body p-0" >
                               <div class="panel panel-default">
                               <div class="panel-body">
                               <span class="pull-left" style="padding-left:30px;">{{$doctor->doctor_name}}</span>
                               <span class="user-list-files d-flex float-right">
                               {!!Form::open(['action' => 'HospitalController@message', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $doctor->doctor_pin)}}
                               {{Form::hidden('username', $doctor->doctor_name)}}
                               <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="fa fa-envelope"></i></button>
                              
                               {!!Form::close()!!}
                                 @if ($doctor->added_by == auth()->user()->id)
             
                                   {!!Form::open(['action' => ['HospitalController@destroy', $doctor->id], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                   {{Form::hidden('pin', $doctor->doctor_pin)}}
                                   {{Form::hidden('_method', 'DELETE')}}
                                   <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Remove Doctor from Your Hospital"><i class="fa fa-trash-o"></i></button>
                                  
                                   {!!Form::close()!!}
                                     
                                   @endif
                                </span>
                               </div>
                               </div>
                              </div>
                               @endforeach

                               @else
                               <p class="text-center">No Doctors Yet</p>    
                               @endif
                               
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