@extends('layouts.main')

@section('content')
@include('inc.navmain')

<div class="">
   <div class="row">
      <div class="col-lg-4">
         <div class="iq-card">
            <div class="iq-card-body pl-0 pr-0 pt-0">
               <div class="doctor-details-block">
                  <div class="doc-profile-bg bg-primary" style="height:150px;">
                  </div>
                  <div class="doctor-profile text-center">
                     <img src="img/profile/{{$pro->img}}" alt="profile-img" class="avatar-130 rounded img-fluid">
                  </div>
                  <div class="text-center mt-3 pl-3 pr-3">
                     <h4><b>{{$pro->name}}</b></h4>
                     <p>{{$pro->role}}</p>
                     <a href="patients/{{$pro->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile"><i class="ri-pencil-line"></i></a>
                  </div>
                  <hr>
                  @if (auth()->user()->role == 'Doctor')
                  <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
                     <li class="text-center">
                        <h3 class="counter">
                           @php
                               $one = App\Operations::where('doc_1', auth()->user()->pin)->count();
                               $two = App\Operations::where('doc_2', auth()->user()->pin)->count();
                               $three = App\Operations::where('doc_3', auth()->user()->pin)->count();
                               $four = App\Operations::where('doc_4', auth()->user()->pin)->count();
                               $five = App\Operations::where('doc_5', auth()->user()->pin)->count();
                           @endphp
                           {{ $one + $two + $three + $three + $four + $five}}
                           
                        </h3>
                        <span>Operations</span>
                      </li>
                      <li class="text-center">
                        <h3 class="counter">{{App\hospitals::where('id', auth()->user()->h_id)->count()}}</h3>
                        <span>Hospital</span>
                      </li>
                      <li class="text-center">
                        <h3 class="counter">
                           {{App\patients::where('doc_email', auth()->user()->email)->whereNotNull('username')->count()}}
                           
                        </h3>
                        <span>Patients</span>
                      </li>
                  </ul>
                      
                  @endif
               </div>
            </div>
         </div>
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
               <div class="iq-header-title">
                  <h4 class="card-title">Personal Information</h4>
               </div>
            </div>
            <div class="iq-card-body">
               <div class="about-info m-0 p-0">
                  <div class="row">
                     <div class="col-4">Name</div>
                     <div class="col-8">{{$pro->name}}</div>
                     <div class="col-4">Email</div>
                     <div class="col-8"><a href="mailto:{{$pro->email}}">{{$pro->email}}</a></div>
                     <div class="col-4">Phone:</div>
                     <div class="col-8"><a href="tel:{{$pro->cc}}{{$pro->p_number}}">({{$pro->cc}}){{$pro->p_number}}</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-8">
         <div class="row">
            <div class="col-md-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Social Media</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <ul class="speciality-list m-0 p-0">
                        <li class="d-flex mb-4 align-items-center">
                           <div class="user-img img-fluid"><a href="www.facebook.com/{{$pro->facebook}}" class="iq-bg-primary"><i class="ri-facebook-fill"></i></a></div>
                           <div class="media-support-info ml-3">
                              <a href="www.facebook.com/{{$pro->facebook}}"><h6>Facebook</h6>
                              <p class="mb-0">@ {{$pro->facebook}}</p></a>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="user-img img-fluid"><a href="www.twitter.com/{{$pro->twitter}}" class="iq-bg-warning"><i class="ri-twitter-fill"></i></a></div>
                           <div class="media-support-info ml-3">
                              <a href="www.twitter.com/{{$pro->twitter}}" class="iq-bg-warning"><h6>Twitter</h6>
                              <p class="mb-0">@ {{$pro->twitter}}</p></a>
                           </div>
                        </li>
                        <!---
                        <li class="d-flex mb-4 align-items-center">
                           <div class="user-img img-fluid"><a href="www.instagram.com/{{$pro->instagram}}" class="iq-bg-info"><i class="ri-instagram-fill"></i></a></div>
                           <div class="media-support-info ml-3">
                              <h6>Medication Laser</h6>
                              <p class="mb-0">Hair Lose Product</p>
                           </div>
                        </li>--->
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Notifications</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <ul class="iq-timeline">
                        @php
                             $notices = App\Notifications::where('to',auth()->user()->id)->paginate(5);
                        @endphp
                        @if (count($notices) > 0)
                        @foreach ($notices as $notice)
                        <li>
                           <div class="timeline-dots border-success"></div>
                           <h6 class="">{{$notice->from}}</h6>
                           <small class="mt-1">{{$notice->created_at}}</small>
                        </li>
                            
                        @endforeach
                                 
                        <div class="col-md-6">
                            <div style="text-align:right;">
                                    <!-----The pagination link----->
                                    {{$notices->links()}}
                            </div>
                        </div>
                            
                        @else
                        <li>
                           <div class="timeline-dots border-danger"></div>
                           <h6 class="">No Notifications Yet</h6>
                        </li>
                            
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Schedule For Today</h4>
                     </div>
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                        <a class="dropdown-item">
                            <a class ="btn btn-info btn-sm" href="./schedule/create" data-toggle="tooltip" data-placement="top" data-original-title="Add To Do"><i class="fa fa-plus"></i>Add New To Do </a>
                            <a class ="btn btn-info btn-sm" href="./schedule_previous" data-toggle="tooltip" data-placement="top" data-original-title="Add To Do"><i class="fa fa-plus"></i>Past Schedules</a>
                           
                           
                        </a>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     @php
                          $todos = App\todo::where('user_id',auth()->user()->id)->whereDay('date', now()->day)->orderby('date', 'desc')->paginate(5);
                     @endphp
                     @if (count($todos) > 0)
                     <ul class="list-inline m-0 p-0">
                     @foreach ($todos as $todo)
                     <li>
                        <h6 class="float-left mb-1">{{$todo->title}}</h6>
                        <small class="float-right mt-1">{{$todo->date}}</small>
                        <div class="d-inline-block w-100">
                           <p class="badge badge-primary">{{$todo->time}} </p>
                        </div>
                     </li>
                         
                     @endforeach
                                 
                     <div class="col-md-6">
                         <div style="text-align:right;">
                                 <!-----The pagination link----->
                                 {{$todos->links()}}
                         </div>
                     </div>
                         
                     @else
                     <p>No Record Found</p>
                        
                     </ul>
                         
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Patients Questions</h4>
                     </div>
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                        <a class="dropdown-item">
                            <a class ="btn btn-info btn-sm" href="./questions/create" data-toggle="tooltip" data-placement="top" data-original-title="Add To Do"><i class="fa fa-plus"></i>Ask Question</a>
                           
                           
                        </a>
                        </div>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     @php
                          $questions = App\Questions::orderby('created_at','desc')->paginate(5);
                     @endphp
                     @if (count($questions) > 0)
                      <ul class="list-inline m-0 p-0">
                        @foreach ($questions as $question)
                        <li class="d-flex align-items-center justify-content-between mb-3">
                           <div>
                              <h6>{!!Str::words($question->question,5)!!}</h6>                                      
                              <p class="mb-0">{{$question->created_at}} </p>
                           </div>
                           <div><a href="questions/{{$question->id}}" class="btn iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question->id)->count()}})</a></div>
                        </li>
                         
                        @endforeach
                                    
                        <div class="col-md-6">
                            <div style="text-align:right;">
                                    <!-----The pagination link----->
                                    {{$questions->links()}}
                            </div>
                        </div>
                            
                        @else
                        <p>No Record Found</p>
                           
                        </ul>
                            
                        @endif
                  </div>
               </div>
            </div>
   </div>
</div>
   </div>
  <!-- Page Content 
    <div>
       <div class="">
          <div class="row">
             <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body profile-page p-0">
                      <div class="profile-header">
                         <div class="cover-container">
                            <img src="img/profile/{{$pro->img}}" alt="profile-bg" class="rounded img-fluid w-100"> 
                            <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                               <li><a href="patients/{{$pro->id}}/edit" title="Edit Profile"><i class="ri-pencil-line"></i></a></li>
                               
                            </ul>
                         </div>
                         <div class="profile-info p-4">
                            <div class="row">
                               <div class="col-sm-12 col-md-6">
                                  <div class="user-detail pl-5">
                                     <div class="d-flex flex-wrap align-items-center">
                                        <div class="profile-img pr-4">
                                           @if (!empty($pro->img))
                                           <img src="img/profile/{{$pro->img}}" alt="profile-img" class="avatar-130 img-fluid" />
                                           @else
                                           <img src="img/profile/1.jpeg" alt="profile-img" class="avatar-130 img-fluid" />
                                               
                                           @endif
                                        </div>
                                        <div class="profile-detail d-flex align-items-center">
                                           <h3>{{$pro->name}} </h3>
                                           <p class="m-0 pl-3"> {{$pro->role}}<br><span style="font-size: 12px;">{{$pro->expertise}}</span></p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-sm-12 col-md-6">
                                  <ul class="nav nav-pills d-flex align-items-end float-right profile-feed-items p-0 m-0">
                                     <li>
                                        <a class="nav-link active" data-toggle="pill" href="mailto:{{$pro->email}}">{{$pro->email}}</a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             @if (auth()->user()->role == 'Patient')
              <!-- 
             <div class="col-sm-12">
                <div class="row">
                   <div class="col-lg-3 profile-left">
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">News</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="m-0 p-0">
                               <li class="d-flex mb-2">
                                  <div class="news-icon"><i class="ri-chat-4-fill"></i></div>
                                  <p class="news-detail mb-0">there is a meetup in your city on fryday at 19:00. <a href="#">see details</a></p>
                               </li>
                               <li class="d-flex">
                                  <div class="news-icon mb-0"><i class="ri-chat-4-fill"></i></div>
                                  <p class="news-detail mb-0">20% off coupon on selected items at pharmaprix </p>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Gallery</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <p class="m-0">132 pics</p>
                            </div>
                         </div>
                         <div class="iq-card-body p-0">
                            <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g2.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g3.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g4.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g5.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-1"><a href="javascript:void();"><img src="images/page-img/g6.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g7.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g8.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                               <li class="col-md-4 col-6 pl-1 pr-0 pb-0"><a href="javascript:void();"><img src="images/page-img/g9.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Twitter Feeds</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <div class="twit-feed">
                               <div class="media-support-header mb-2">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                                  </div>
                                  <div class="media-support-info">
                                     <h6 class="mb-0"><a href="#" class="">Anna Sthesia</a></h6>
                                     <p>@anna59 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Html</a>
                                     <a href="#" class="twit-meta-tag pr-2">#Bootstrap</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="twit-feed">
                               <div class="media-support-header mb-2">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/02.jpg" alt="">
                                  </div>
                                  <div class="media-support-info">
                                     <h6 class="mb-0"><a href="#" class="">Paige Turner</a></h6>
                                     <p>@paige30 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Js</a>
                                     <a href="#" class="twit-meta-tag pr-2">#Bootstrap</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="twit-feed">
                               <div class="media-support-header">
                                  <div class="media-support-user-img mr-3">
                                     <img class="rounded-circle img-fluid" src="images/user/03.jpg" alt="">
                                  </div>
                                  <div class="media-support-info mt-2">
                                     <h5 class="mb-0"><a href="#" class="">Greta Life</a></h5>
                                     <p>@greta07 <span><i class="ri-check-fill"></i> </span></p>
                                  </div>
                               </div>
                               <div class="media-support-body">
                                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                  <div class="d-flex flex-wrap">
                                     <a href="#" class="twit-meta-tag pr-2">#Html</a>
                                     <a href="#" class="twit-meta-tag pr-2">#CSS</a>
                                  </div>
                                  <div class="twit-date"><a href="#"> 07 Jan 2020 </a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 profile-center">
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="profile-feed" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-body p-0">
                                  <div class="user-post-data p-3">
                                     <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                           <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                           <h5 class="mb-0"><a href="#" class="">Anna Sthesia</a></h5>
                                           <p class="mb-0 text-primary">colleages</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <a href="#" class="text-secondary">29 mins <i class="ri-more-2-line ml-3"></i></a>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-share-forward-line mr-2"></i></i>Share</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Copy Link</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="user-post">
                                     <a href="javascript:void();"><img src="images/page-img/p1.jpg" alt="post-image" class="img-fluid" /></a>
                                  </div>
                                  <div class="comment-area p-3">
                                     <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                           <div class="d-flex align-items-center feather-icon mr-3">
                                              <a href="javascript:void();"><i class="ri-heart-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                           <div class="d-flex align-items-center message-icon">
                                              <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                           </div>
                                           <span class="ml-2">+140 more</span>
                                        </div>
                                     </div>
                                     <hr>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                     <hr>
                                     <ul class="post-comments p-0 m-0">
                                        <li class="mb-2">
                                           <div class="d-flex flex-wrap">
                                              <div class="user-img">
                                                 <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                              </div>
                                              <div class="comment-data-block ml-3">
                                                 <h6>Monty Carlo</h6>
                                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="javascript:void();">like</a>
                                                    <a href="javascript:void();">reply</a>
                                                    <a href="javascript:void();">translate</a>
                                                    <span> 5 minit </span>
                                                 </div>
                                              </div>
                                           </div>
                                        </li>
                                        <li>
                                           <div class="d-flex flex-wrap">
                                              <div class="user-img">
                                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                              </div>
                                              <div class="comment-data-block ml-3">
                                                 <h6>Paul Molive</h6>
                                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                                    <a href="javascript:void();">like</a>
                                                    <a href="javascript:void();">reply</a>
                                                    <a href="javascript:void();">translate</a>
                                                    <span> 5 minit </span>
                                                 </div>
                                              </div>
                                           </div>
                                        </li>
                                     </ul>
                                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Lovely!">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                        </div>
                                     </form>
                                  </div>                              
                               </div>
                            </div>
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-body p-0">
                                  <div class="user-post-data p-3">
                                     <div class="d-flex flex-wrap">
                                        <div class="media-support-user-img mr-3">
                                           <img class="rounded-circle img-fluid" src="images/user/02.jpg" alt="">
                                        </div>
                                        <div class="media-support-info mt-2">
                                           <h5 class="mb-0"><a href="#" class="">jenny issad</a></h5>
                                           <p class="mb-0 text-primary">colleages</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <a href="#" class="text-secondary">1 hr <i class="ri-more-2-line ml-3"></i></a>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-share-forward-line mr-2"></i></i>Share</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-file-copy-line mr-2"></i>Copy Link</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                   <hr class="mt-0">
                                     <p class="p-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                     
                                  <div class="comment-area p-3"><hr class="mt-0">
                                     <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                           <div class="d-flex align-items-center feather-icon mr-3">
                                              <a id="clickme" href="javascript:void();"><i class="ri-heart-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                           <div class="d-flex align-items-center message-icon">
                                              <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                              <span class="ml-1">140</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                           </div>
                                           <span class="ml-2">+140 more</span>
                                        </div>
                                     </div>
                                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                        <input type="text" class="form-control rounded" placeholder="Lovely!">
                                        <div class="comment-attagement d-flex">
                                            <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                            <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                        </div>
                                     </form>
                                  </div>                              
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-activity" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Activity timeline</h4>
                                  </div>
                                  <div class="iq-card-header-toolbar d-flex align-items-center">
                                     <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                        View All
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right p-0">                                         
                                           <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>View</a>
                                           <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="iq-timeline">
                                     <li>
                                        <div class="timeline-dots"></div>
                                        <h6 class="float-left mb-1">Client Login</h6>
                                        <small class="float-right mt-1">24 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-success"></div>
                                        <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                        <small class="float-right mt-1">23 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-danger"></div>
                                        <h6 class="float-left mb-1">Dev Meetup</h6>
                                        <small class="float-right mt-1">20 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi bears jelly lollipop apple</p>
                                           <div class="iq-media-group">
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                              </a>
                                              <a href="#" class="iq-media">
                                              <img class="img-fluid avatar-40 rounded-circle" src="images/user/10.jpg" alt="">
                                              </a>
                                           </div>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-primary"></div>
                                        <h6 class="float-left mb-1">Client Call</h6>
                                        <small class="float-right mt-1">19 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="timeline-dots border-warning"></div>
                                        <h6 class="float-left mb-1">Mega event</h6>
                                        <small class="float-right mt-1">15 November 2019</small>
                                        <div class="d-inline-block w-100">
                                           <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                        </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-friends" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Friends</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <ul class="suggestions-lists m-0 p-0">
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paul Molive</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                 <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paul Molive</h6>
                                           <p class="mb-0">trainee</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Anna Mull</h6>
                                           <p class="mb-0">Web Developer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Paige Turner</h6>
                                           <p class="mb-0">trainee</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton43" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Barb Ackue</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton44" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Greta Life</h6>
                                           <p class="mb-0">Tester</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton45" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Ira Membrit</h6>
                                           <p class="mb-0">Android Developer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton46" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                     <li class="d-flex mb-4 align-items-center">
                                        <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                        <div class="media-support-info ml-3">
                                           <h6>Pete Sariya</h6>
                                           <p class="mb-0">Web Designer</p>
                                        </div>
                                        <div class="iq-card-header-toolbar d-flex align-items-center">
                                           <div class="dropdown">
                                              <span class="dropdown-toggle text-primary" id="dropdownMenuButton47" data-toggle="dropdown">
                                              <i class="ri-more-2-line"></i>
                                              </span>
                                              <div class="dropdown-menu dropdown-menu-right p-0">
                                                 <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Unfollow</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Unfriend</a>
                                                 <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>block</a>
                                              </div>
                                           </div>
                                        </div>
                                     </li>
                                  </ul>
                                  <a href="javascript:void();" class="btn btn-primary d-block"><i class="ri-add-line"></i> Load More</a>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="profile-profile" role="tabpanel">
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">Profile</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                  <div class="user-detail text-center">
                                     <div class="user-profile">
                                        <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                                     </div>
                                     <div class="profile-detail mt-3">
                                        <h3 class="d-inline-block">Nik Jone</h3>
                                        <p class="d-inline-block pl-3"> - Web designer</p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="iq-card iq-card-block iq-card-stretch">
                               <div class="iq-card-header d-flex justify-content-between">
                                  <div class="iq-header-title">
                                     <h4 class="card-title">About User</h4>
                                  </div>
                               </div>
                               <div class="iq-card-body">
                                 <div class="user-bio">
                                     <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Joined:</h6>
                                  <p>November 15, 2012</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Lives:</h6>
                                  <p>United States of America</p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Email:</h6>
                                  <p><a href="https://iqonic.design/cdn-cgi/l/email-protection#8de3e4e6e7e2e3e8cdeae0ece4e1a3eee2e0"> <span class="__cf_email__" data-cfemail="ea8483818085848faa8d878b8386c4898587">[email&#160;protected]</span></a></p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Url:</h6>
                                  <p><a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank"> www.bootstrap.com </a></p>
                                 </div>
                                 <div class="mt-2">
                                  <h6>Contact:</h6>
                                  <p><a href="tel:001 4544 565 456">(001) 4544 565 456</a></p>
                                 </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 profile-right">
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">About</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <div class="about-info m-0 p-0">
                               <div class="row">
                                  <div class="col-12"><p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p></div>
                                  <div class="col-3">Email:</div>
                                  <div class="col-9"><a href="https://iqonic.design/cdn-cgi/l/email-protection#7b1512101114151e3b1f1e16141455181416"> <span class="__cf_email__" data-cfemail="385651535257565d785c5d555757165b5755">[email&#160;protected]</span> </a></div>
                                  <div class="col-3">Phone:</div>
                                  <div class="col-9"><a href="tel:001 2351 256 12">001 2351 256 12</a></div>
                                  <div class="col-3">Location:</div>
                                  <div class="col-9">USA</div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">stories</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="media-story m-0 p-0">
                               <li class="d-flex mb-4 align-items-center active">
                                  <img src="images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>Web Design</h5>
                                     <p class="mb-0">1 hour ago</p>
                                  </div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <img src="images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>App Design</h5>
                                     <p class="mb-0">4 hour ago</p>
                                  </div>
                               </li>
                               <li class="d-flex align-items-center">
                                  <img src="images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid" />
                                  <div class="stories-data ml-3">
                                     <h5>Abstract Design</h5>
                                     <p class="mb-0">9 hour ago</p>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="iq-card iq-card-block iq-card-stretch">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Suggestions</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                               <a href="#"><i class="ri-more-fill"></i></a>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <ul class="suggestions-lists m-0 p-0">
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paul Molive</h6>
                                     <p class="mb-0">4 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paul Molive</h6>
                                     <p class="mb-0">4 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Anna Mull</h6>
                                     <p class="mb-0">6 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Paige Turner</h6>
                                     <p class="mb-0">8 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Barb Ackue</h6>
                                     <p class="mb-0">1 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Greta Life</h6>
                                     <p class="mb-0">3 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Ira Membrit</h6>
                                     <p class="mb-0">12 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                               <li class="d-flex mb-4 align-items-center">
                                  <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40" /></div>
                                  <div class="media-support-info ml-3">
                                     <h6>Pete Sariya</h6>
                                     <p class="mb-0">2 mutual friends</p>
                                  </div>
                                  <div class="add-suggestion"><a href="javascript:void();"><i class="ri-user-add-line"></i></a></div>
                               </li>
                            </ul>
                               <a href="javascript:void();" class="btn btn-primary d-block"><i class="ri-add-line"></i> Load More</a>
                         </div>
                      </div>
                   </div>
                </div>--->
               <!-- @endif
             </div>
             <div class="row">
             <div class="col-sm-6 text-center">
             <div class="iq-card shadow-none mb-0">
                 <div class="iq-card-body p-1">
                       <span class="font-size-14">Gender</span>
                       <h6>
                        {{$pro->gender}}
                       </h6>
                 </div>
             </div>
            </div>
            <div class="col-sm-6 text-center">
            <div class="iq-card shadow-none mb-0">
                <div class="iq-card-body p-1">
                      <span class="font-size-14">Expertise</span>
                      <h6>
                       {{$pro->expertise}}
                      </h6>
                </div>
            </div>
           </div>
           <div class="col-sm-12 text-center">
           <div class="iq-card shadow-none mb-0">
               <div class="iq-card-body p-1">
                     <span class="font-size-14">Hospital You Belong To</span>
                     @if (!empty($pro->h_name))
                     <h6>
                      {{$pro->h_name}} Hospital
                     </h6>
                         
                     @else
                     <h6>
                      You Do Not Belong To Any Hospital Yet...
                     </h6>
                         
                     @endif
               </div>
           </div>
          </div>
             </div> -->
 <!-- Footer -->
 <footer class="bg-white iq-footer">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6">
                 <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="#">Terms of Use</a></li>
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
