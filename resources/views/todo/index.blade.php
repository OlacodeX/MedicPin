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
                  <li class="breadcrumb-item active" aria-current="page">Task Board</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Tasks</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">

						 
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Your Task Board</h4>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card schedule-widget mb-0">
                        
                           <!-- Schedule Header -->
                           <div class="schedule-header">
                           
                              <!-- Schedule Nav -->
                              <div class="schedule-nav">
                                 <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item">
                                       <a class="nav-link active" data-toggle="tab" href="#slot_monday">Today's Tasks</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#slot_tuesday">Upcoming Tasks</a>
                                    </li>
                                 </ul>
                              </div>
                              <!-- /Schedule Nav -->
                              
                           </div>
                           <!-- /Schedule Header -->
                           
                           <!-- Schedule Content -->
                           <div class="tab-content schedule-cont">

                              <!-- Monday Slot -->
                              <div id="slot_monday" class="tab-pane fade show active">
                                 <h4 class="card-title d-flex justify-content-between">
                                    <small>Hi there, these are what you set to achieve today.</small> 
                                 </h4>
                                 <!-- Slot List -->
                                 @if (count($todos) > 0)
                                 @foreach ($todos as $todo)
                                 <div class="doc-times">
                                    <div class="doc-slot-list no-bg">
                                       {{$todo->title}}
                                    </div>
                                    <div class="doc-slot-list">
                                       {{ $todo->date}}
                                    </div>
                                    <div class="doc-slot-list no-bg">
                                       {{ $todo->time}}
                                    </div>
                                    <div class="doc-slot-list">
                                       <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="schedule/{{$todo->id}}/edit">
                                               <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit/Move Schedule"><i class="fas fa-edit"></i> Edit schedule</button>
                                             </a>
  
                                             <a class="dropdown-item">
                                             {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                            
                                             {{Form::hidden('_method', 'DELETE')}}
                                             <button type="submit" class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete schedule"><i class="fas fa-trash-o"></i> Delete schedule</button>
                                            
                                             {!!Form::close()!!}
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
  
                                 @else
                                 <p class="text-justify">No activity on your schedule today, check back tomorrow or create new one.</p>         
                                 <a href="schedule/create" class="btn btn-sm bg-info-light pull-left" style="margin-left: 10px; margin-bottom:10px;">
                                    <i class="far fa-plus"></i> Create one here
                                 </a> 
                                 @endif
                                 <!-- /Slot List -->
                                 
                              </div>
                              <!-- /Monday Slot -->

                              <!-- Tuesday Slot -->
                              <div id="slot_tuesday" class="tab-pane fade">
                                 <h4 class="card-title d-flex justify-content-between">
                                    <small>Hi there, these are your upcoming activities/tasks.</small> 
                                    
                                 </h4>
                                 <style>
                                    
                                    .doc-slot-list {
                                       background-color: #09e5ab;
                                       border: 1px solid #09e5ab;
                                       border-radius: 4px;
                                       color: #fff;
                                       font-size: 14px;
                                       margin: 10px 10px 0 0;
                                       padding: 6px 15px;
                                    }
                                    .doc-slot-list.no-bg {
                                       background-color: transparent;
                                       border: 1px solid #09e5ab;
                                       border-radius: 4px;
                                       color: #09e5ab;
                                       font-size: 14px;
                                       margin: 10px 10px 0 0;
                                       padding: 6px 15px;
                                    }
                                    .doc-slot-list a {
                                       color: #fff;
                                       display: inline-block;
                                       margin-left: 5px;
                                    }
                                    .doc-slot-list a:hover {
                                       color: #fff;
                                    }
                                    .schedule-nav .nav-tabs > li > a {
                                       border: 1px solid #dcddea;
                                       border-radius: 4px;
                                       padding: 6px 15px;
                                       text-transform: uppercase;
                                    }
                                    .schedule-nav .nav-tabs li a.active {
                                       background: #09e5ab;
                                       border: 1px solid #09e5ab !important;
                                       color: #fff;
                                    }
                                 </style>
                                 <!-- Slot List -->
                                 @if (count($upcoming_todos) > 0)
                                 @foreach ($upcoming_todos as $upcoming_todo)
                                 <div class="doc-times">
                                    <div class="doc-slot-list no-bg">
                                       {{$upcoming_todo->title}}
                                    </div>
                                    <div class="doc-slot-list">
                                       {{ $upcoming_todo->date}}
                                    </div>
                                    <div class="doc-slot-list no-bg">
                                       {{ $upcoming_todo->time}}
                                    </div>
                                    <div class="doc-slot-list">
                                       <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
                                          <div class="dropdown-menu">
                                             <a class="dropdown-item" href="schedule/{{$upcoming_todo->id}}/edit">
                                               <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit/Move Schedule"><i class="fas fa-edit"></i> Edit schedule</button>
                                             </a>
  
                                             <a class="dropdown-item">
                                             {!!Form::open(['action' => ['TodoController@destroy', $upcoming_todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                            
                                             {{Form::hidden('_method', 'DELETE')}}
                                             <button type="submit" class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete schedule"><i class="fas fa-trash-o"></i> Delete schedule</button>
                                            
                                             {!!Form::close()!!}
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
  
                                 @else
                                 <p class="text-justify">You currently have no upcoming activity.</p>      
                                 <a href="schedule/create" class="btn btn-sm bg-info-light pull-left" style="margin-left: 10px; margin-bottom:10px;">
                                    <i class="far fa-plus"></i> Create one here
                                 </a> 
                                 @endif
                                 <!-- /Slot List -->
                                 
                              </div>
                              <!-- /Tuesday Slot -->
															</div>
															<!-- /Schedule Content -->
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
   
             <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
             <script>
                 CKEDITOR.replace( 'pre' );
             </script> 
        <!-- Wrapper END -->
         <!-- Footer 
           <footer class="bg-white iq-footer" style="margin-top:280px;">
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
           </footer>Footer END -->
   @endsection