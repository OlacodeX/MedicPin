@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Dashboard
@endsection
@section('content')
@include('inc.navmain')

<!-- Mirrored from iqonic.design/themes/sofbox-admin/html/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Aug 2020 01:39:53 GMT -->

           <div class="">
                                
              <div class="">
                 <div class="col-lg-12">
                  @include('inc.messages')
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                       <div class="iq-card-body">
                          <div class="user-details-block">
                             <div class="user-profile text-center">
                                    <img src="img/profile/{{auth()->user()->img}}" alt="profile-img" class="avatar-130 img-fluid">
                             </div>
                             <div class="text-center mt-3">
                                <h4><b>{{auth()->user()->name}}</b></h4>
                                <p>{{auth()->user()->role}}</p>
                             </div>  
                          </div>
                       </div>
                    </div>
                 </div>
                 
                 <div class="row">
                    <div class="col-lg-6">
      
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                             <h4 class="card-title">Sent Notifications</h4>
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="./notifications" class="">See all</a>
                         </div>
                        </div>
                          <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                         @if (count($notice_sents) > 0)
                         <div class="iq-card-body">
                             @foreach ($notice_sents as $notice_sent)
                             <a href="notifications/{{$notice_sent->id}}" style="text-decoration: none;">
                             <div class="media">
                                 <div class="media-body">
                                     <h5 class="mt-0 mb-0">{!!Str::words( $notice_sent->to_name,1)!!} <small
                                             class="text-muted font-size-12">{!!Str::words( $notice_sent->created_at,2)!!}</small></h5>
                                     <i class="ri-close-line float-right"></i>
                                     <p>{!!Str::words( $notice_sent->content,5)!!}</p>
                                 </div>
                             </div>
                           </a>
                             <hr>
                             @endforeach
                         @else
                         <p class="text-center">No Sent Notifications Yet</p> 
                         @endif
 
                        </div>   
                     </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden wow fadeInUp" data-wow-delay="0.6s">
                        <div class="iq-card-header d-flex justify-content-between">
                    
                            
                    <div class="iq-header-title">
                        <h4 class="card-title">Notifications</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                        <a href="./notifications" class="">See all</a>
                    </div>
                </div>
                    @if (count($notices) > 0)
                    <div class="iq-card-body">
                        @foreach ($notices as $notice)
                        <a href="notifications/{{$notice->id}}" style="text-decoration: none;">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="images/user/01.jpg"
                                alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">Dr.{!!Str::words( $notice->from_name,1)!!} <br><small
                                        class="text-muted font-size-12">{!!Str::words( $notice->created_at,2)!!}</small></h5>
                                <i class="ri-close-line float-right"></i>
                                <p>{!!Str::words( $notice->content,5)!!}</p>
                            </div>
                        </div>
                    </a>
                        <hr>
                        @endforeach
                    @else
                    <p class="text-center">No Notifications Yet</p>    
                  </div>
                    @endif
              </div>
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

                 
                 <div class="row">
                    <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden wow fadeInUp" data-wow-delay="0.6s">
                         <div class="iq-card-header d-flex justify-content-between">
                     
                             
                     <div class="iq-header-title">
                         <h4 class="card-title">Have A Question?</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                         <a href="./questions" class="">Check Forum</a>
                     </div>
                 </div>
                     <div class="iq-card-body">
                             <div class="media-body">
                                 {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                 **/ !!}
                                             <div class="form-group">
                                                 <p>Ask whatever is it on your mind and a doctor will answer you ASAP</p>
                                                <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                                             </div>
                                         <button type="submit" class="btn btn-primary">Ask Question</button>
                                         {!! Form::close() !!}
                             </div>
                         <hr>
                     </div>
                  </div>
             </div>
                 
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                            <h4 class="card-title">Questions</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./questions" class="">See all questions </a>
                        </div>
                       </div>
                       <div class="iq-card-body">
                           
                          <ul class="patient-progress m-0 p-0">
                            @if (count($questions_all) > 0)
                            @foreach ($questions_all as $question_all)
                            <a href="questions/{{$question_all->id}}" >
                     <li class="d-flex mb-3 align-items-center">
                        <div class="media-support-info">
                            <small>{!!$question_all->created_at!!} </small>
                           <h6>{!!$question_all->question!!} </h6>
                           @if (auth()->user()->id == $question_all->asker_id)
                              <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                
                                 {!!Form::close()!!}
                           @endif
                        </div>
                            <span class="user-list-files d-flex float-right">
                                <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                             </span>
                     </li> 
                            </a>
                            @endforeach
       
                            @else
                            <p class="text-center">No Questions in Forum Yet</p>    
                            @endif
                          </ul>
                    </div>
                    </div>
                 </div>
              </div>
              
              <!-- for both--->
              <div class="row">
                 <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Your Appointments </h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                               <i class="ri-more-fill"></i>
                               </span>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                  <a class="dropdown-item" href="./appointments"><i class="ri-eye-line mr-2"></i>See All</a>
                               </div>
                            </div>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                              @php
                                  $appointments = App\Appointments::where('patient',auth()->user()->pin)->paginate(8);
                              @endphp
                              @if (count($appointments) > 0)
                             <table class="table mb-0 table-borderless">
                                <thead>
                                   <tr>
                                    <th scope="col">Patient's Pin</th>
                                      <th scope="col">Patient</th>
                                      <th scope="col">Doctor</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Action</th>

                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                   <tr>
                                       @php
                                           $patient = App\patients::where('pin', $appointment->patient)->first();
                                           $doctor = App\User::where('pin', $appointment->doctor)->first();
                                       @endphp
                                      <td>{{$appointment->patient}}</td>
                                      <td>{{$patient->name}}</td>
                                      <td>{{$doctor->name}}</td>
                                      <td>{{$appointment->date}}</td>
                                      <td>{{$appointment->time}}</td>
                                      <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                                      <td>
                                        <div class="dropdown">
                                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                           <i class="ri-more-fill"></i>
                                           </span>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                           <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                                           </a>
                                           
                                           <a class="dropdown-item">
                                              {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                              {{Form::hidden('id', $appointment->id)}}
                                              {{Form::hidden('_method', 'DELETE')}}
                                              <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                             
                                              {!!Form::close()!!}
                                           </a>
                                           </div>
                                        </div>
                                          
                                      </td>
                                   </tr>
                                  
                                   @endforeach
                    
                                   <div class="col-md-12">
                                       <div style="text-align:right;">
                                               <!-----The pagination link----->
                                               {{$appointments->links()}}
                                       </div>
                                   </div>
                                       @else
                                       <p>No Record Found</p>   
                                     @endif
                                </tbody>
                             </table>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Doctors Lists</h4>
                          </div>
                       </div>
                       @php
                           $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->get();
                       @endphp
                        <div class="iq-card-body">
                            @if (count($doctors) > 0)
                          <ul class="doctors-lists m-0 p-0">
                            @foreach ($doctors as $doctor)
                            @php
                                $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                            @endphp
                             <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="img/profile/{{$detail->img}}" alt="doctor image" class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                   <h6>Dr. {{$detail->name}}</h6>
                                   <p class="mb-0 font-size-12">{{$detail->expertise}}</p>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                   <div class="dropdown show">
                                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                         <i class="ri-more-2-line"></i>
                                      </span>
                                      <div class="dropdown-menu dropdown-menu-right">
                                         <a class="dropdown-item" href="#">
                                           
                                            {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $detail->pin)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                                           
                                            {!!Form::close()!!}
                                        </a>
                                      </div>
                                   </div>
                                </div>
                             </li> 
                              
                             @endforeach                             
                          </ul>
                          @else
                          <p>No Record Found</p> 
                          @endif
                          <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Doctors </a>
                       </div>
                    </div>
                 </div>
              </div>
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
      <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
      <script>
         CKEDITOR.replace( 'question' );
      </script> 
     
     <!-- Footer END -->
@endsection
