@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Dashboard
@endsection
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
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Dashboard</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
                     @include('inc.sidebar')		
						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="row">
                        @if (auth()->user()->role == 'Doctor')	
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
                                             @php
                                                 $total = App\patients::count();
                                                 $doc_patients = App\patients::where('doc_email', auth()->user()->email)->count();
                                                 if ($total == '0') {
                                                   $percentage = 0;
                                                 } else {
                                                   $percentage = $doc_patients/$total * 100;
                                                 }
                                                 
                                                 
                                             @endphp
															<div class="circle-graph1" data-percent="75">
																<img src="assets/img/icon-01.png" class="img-fluid" alt="{{$percentage}}">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Total Patient</h6>
															<h3>{{App\patients::where('doc_email', auth()->user()->email)->count()}}</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
                                       @php
                                           $total = App\Consortations::whereDay('created_at', now()->day)->count();
                                           $doc_appointment = App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->count();
                                           if ($total == '0') {
                                             $percentage = 0;
                                           } else {
                                             $percentage = $doc_appointment/$total * 100;
                                           }
                                           
                                           
                                       @endphp
                                             
															<div class="circle-graph2" data-percent="{{$percentage}}">
																<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Today Patient</h6>
															<h3>{{App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->count()}}</h3>
															<p class="text-muted">{{\Carbon\Carbon::now()->format('Y-m-d')}}</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
                                             @php
                                                 $total = App\Appointments::count();
                                                 $doc_appointments = App\Appointments::where('doctor', auth()->user()->pin)->count();
                                                 if ($total == '0') {
                                                   $percentage = 0;
                                                 } else {
                                                   $percentage = $doc_appointments/$total * 100;
                                                 }
                                                 
                                                 
                                             @endphp
															<div class="circle-graph3" data-percent="{{$percentage}}">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>{{$doc_appointments}}</h3>
															<p class="text-muted">{{\Carbon\Carbon::now()->format('Y-m-d')}}</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                     </div>
                     
                     
							<div class="row">
								<div class="col-md-12">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Scheduled Patients For Today</b></h4>
                             </div>
                           </div>
									
									<div class="">
										
										<div>
										
											<!-- Upcoming Appointment Tab -->
											<div>
                                    @php
                                        $patients = App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->paginate(5);
                                    @endphp
        
												<div class="card card-table mb-0">
													<div class="card-body">
                                          @if (count($patients) > 0)
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Type</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
                                                   @foreach ($patients as $patient)
                                                   @php
                                                       
                                                       $patient_profile = App\User::where('pin', $patient->patient_pin)->first();
                                                   @endphp
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="img/profile/{{$patient_profile->img}}" alt="User Image"></a>
																				<a href="">{{$patient->patient_name}}<span>{{$patient->patient_pin}}</span></a>
																			</h2>
                                                      </td>
                                                      @php
                                                          $get_type = App\patients::where('doc_email', auth()->user()->email)->get();
                                                      @endphp
                                                      @if (count($get_type) < 0)
																		<td>New Patient</td>
                                                      @else
																		<td>Old Patient</td>
                                                          
                                                      @endif
																		<td class="text-right">
																			<div class="table-action">
                                                            <style>
                                                               button.btn.btn-sm{
                                                                  padding-top: 7px;
                                                                  padding-bottom: 7px;
                                                               }
                                                               
                                                            </style>
                                                            @if (auth()->user()->role == 'Doctor')
                                                            <a href="javascript:void(0);" class="btn btn-sm">
                                                                
                                                            {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $patient->pin)}}
                                                            <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i> Add New Medical Record</button>
                                                           
                                                            {!!Form::close()!!}
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-sm">
                                                            {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $patient->pin)}}
                                                            {{Form::hidden('username', $patient->username)}}
                                                            <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="far fa-eye"></i> View Medical History</button>
                                                           
                                                            {!!Form::close()!!}
                                                         </a>
                                                            @if ($patient->status == 'Admitted')
                                                            <a href="javascript:void(0);" class="btn btn-sm">
                                                            {!!Form::open(['action' => ['AdmissionController@update', $patient->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $patient->pin)}}
                                                            {{Form::hidden('_method', 'PUT')}}
                                                            <button type="submit" class ="btn btn-sm bg-success-light" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="lar la-procedures"></i> Discharge Patient</button>
                                                            {!!Form::close()!!}
                                                         </a>
                                                              @else
                                                              <a href="javascript:void(0);" class="btn btn-sm">
                                                              {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                              {{Form::hidden('pin', $patient->pin)}}
                                                              <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="lar la-bed"></i> Admit Patient</button>
                                                              {!!Form::close()!!}  
                                                            </a>
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn btn-sm">
                                                            {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $patient->pin)}}
                                                            <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="far fa-paper-plane-o"></i> Transfer Patient</button>
                                                           
                                                            {!!Form::close()!!}
                                                         </a>
                                                            <a href="javascript:void(0);" class="btn btn-sm">
																					
                                                            {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $patient->pin)}}
                                                            <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="far fa-envelope"></i> Message Patient</button>
                                                           
                                                            {!!Form::close()!!}
                                                            </a>
                                                             @endif
																			</div>
																		</td>
																	</tr>
                                                   @endforeach
																</tbody>
															</table>		
														</div>
                                          <div class="col-md-6">
                                              <div style="text-align:right;">
                                                      <!-----The pagination link----->
                                                      {{$patients->links()}}
                                              </div>
                                          </div>
                                          @else
                                          <p class="text-center" style="padding-top: 40px;">No Patients Assigned Yet</p>    
                                          @endif      
													</div>
												</div>
											</div>
											<!-- /scheduled patients tab -->
											
                              </div>
                           </div>
                        </div>
								<div class="col-md-12" style="margin-top: 20px;">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Your Appoinments</b></h4>
                             </div>
                           </div>
									<div class="appointment-tab">
									
										<!-- Appointment Tab -->
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
											<li class="nav-item">
												<a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
											</li> 
										</ul>
										<!-- /Appointment Tab -->
										
                              @php
                                  $upcomings = App\Appointments::where('doctor',auth()->user()->pin)->whereDay('date', '>', now()->day)->orderby('date', 'desc')->paginate(8);
                              @endphp
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
                                          @if (count($upcomings) > 0)
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Phone number</th>
																		<th>Type</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
                                                   @foreach ($upcomings as $upcoming)
                                                   @php
                                                       $patient = App\patients::where('pin', $upcoming->patient)->first();
                                                       $patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                                   @endphp
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="img/profile/{{$patient_profile->img}}" alt="User Image"></a>
																				<a href="">{{$upcoming->name}} <span>{{$upcoming->patient}}</span></a>
																			</h2>
																		</td>
																		<td>{{$upcoming->date}} <span class="d-block text-info">{{$upcoming->time}}</span></td>
																		<td><a href="tel:{{$patient->cc.$patient->phone}}" style="text-decoration: none;">{{$patient->cc.$patient->phone}}</a></td>
                                                      @php
                                                          $get_type = App\patients::where('doc_email', auth()->user()->email)->get();
                                                      @endphp
                                                      @if (count($get_type) < 0)
																		<td>New Patient</td>
                                                      @else
																		<td>Old Patient</td>
                                                          
                                                      @endif
																		<td class="text-right">
																			<div class="table-action">
                                                            <a class="btn btn-sm" href="appointments/{{$upcoming->id}}/edit">
                                                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                            </a>
                                                            
                                                            <a class="btn btn-sm">
                                                               {!!Form::open(['action' => ['AppointmentsController@destroy', $upcoming->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                               {{Form::hidden('id', $upcoming->id)}}
                                                               {{Form::hidden('_method', 'DELETE')}}
                                                               <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i> Delete</button>
                                                              
                                                               {!!Form::close()!!}
                                                            </a>
																			</div>
																		</td>
																	</tr>
                                                   @endforeach
																</tbody>
															</table>
                                 
														</div>
                                          <div class="col-md-6">
                                              <div style="text-align:right;">
                                                      <!-----The pagination link----->
                                                      {{$upcomings->links()}}
                                              </div>
                                          </div>
                                              @else
                                              <p style="padding: 10px 15px 10px 10px;">You currently have no upcoming appointments.</p>     
                                              <a href="appointments/create" class="btn btn-sm bg-info-light pull-left" style="margin-left: 10px; margin-bottom:10px;">
                                                 <i class="far fa-plus"></i> Create An Appoinment Here
                                              </a> 
                                            @endif		
													</div>
												</div>
											</div>
											<!-- /Upcoming Appointment Tab -->
									   
                                 @php
                                 $todays = App\Appointments::where('doctor',auth()->user()->pin)->whereDay('date', now()->day)->orderby('date', 'desc')->paginate(8);
                                @endphp
											<!-- Today Appointment Tab -->
											<div class="tab-pane" id="today-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
                                          @if (count($todays) > 0)
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Phone number</th>
																		<th>Type</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
                                                   @foreach ($todays as $today)
                                                   @php
                                                       $patient = App\patients::where('pin', $today->patient)->first();
                                                       $patient_profile = App\User::where('pin', $today->patient)->first();
                                                   @endphp
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="img/profile/{{$patient_profile->img}}" alt="User Image"></a>
																				<a href="">{{$today->name}} <span>{{$today->patient}}</span></a>
																			</h2>
																		</td>
																		<td>{{$today->date}} <span class="d-block text-info">{{$today->time}}</span></td>
																		<td><a href="tel:+{{$patient->cc.$patient->phone}}" style="text-decoration: none;">+{{$patient->cc.$patient->phone}}</a></td>
                                                      @php
                                                          $get_type = App\patients::where('doc_email', auth()->user()->email)->get();
                                                      @endphp
                                                      @if (count($get_type) < 0)
																		<td>New Patient</td>
                                                      @else
																		<td>Old Patient</td>
                                                          
                                                      @endif
																		<td class="text-right">
																			<div class="table-action">
                                                            <a class="btn btn-sm" href="appointments/{{$today->id}}/edit">
                                                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                            </a>
                                                            
                                                            <a class="btn btn-sm">
                                                               {!!Form::open(['action' => ['AppointmentsController@destroy', $today->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                               {{Form::hidden('id', $today->id)}}
                                                               {{Form::hidden('_method', 'DELETE')}}
                                                               <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i> Delete</button>
                                                              
                                                               {!!Form::close()!!}
                                                            </a>
																			</div>
																		</td>
																	</tr>
                                                   @endforeach
																</tbody>
															</table>
                                 
														</div>
                                          <div class="col-md-6">
                                              <div style="text-align:right;">
                                                      <!-----The pagination link----->
                                                      {{$todays->links()}}
                                              </div>
                                          </div>
                                              @else
                                              <p style="padding: 10px 15px 5px 10px;">You currently have no appointment(s) for today.</p>  
                                              <a href="appointments/create" class="btn btn-sm bg-info-light pull-left" style="margin-left: 10px; margin-bottom:10px;">
                                                 <i class="far fa-plus"></i> Create An Appoinment Here
                                              </a> 
                                            @endif	
													</div>	
												</div>	
											</div>
											<!-- /Today Appointment Tab -->
											
										</div>
									</div>
								</div>

         

         
								<div class="col-md-12" style="margin-top: 20px;">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Your Task Board</b></h4>
                             </div>
                           </div>
									<div class="appointment-tab">
										<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
											<li class="nav-item">
												<a class="nav-link active" href="#to_dos" data-toggle="tab">Today's Task(s)</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#new_to_do" data-toggle="tab">Create New Task</a>
											</li> 
										</ul>
                              @php
                                  $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                              @endphp
										<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="to_dos">
												<div class="card card-table mb-0">
													<div class="card-body">
                                          @if (count($todos) > 0)
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Activity</th>
																		<th>Date</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
                                                   @foreach ($todos as $todo)
                                                   @php
                                                       //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                                       //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                                   @endphp
																	<tr>
																		<td>
																			<h2 class="table-avatar">
																				<a href="">{{$todo->title}}</a>
																			</h2>
																		</td>
																		<td>{{$todo->date}} <span class="d-block text-info">{{$todo->time}}</span></td>
																		<td class="text-right">
																			<div class="table-action">
                                                            <a class="btn btn-sm" href="schedule/{{$todo->id}}/edit">
                                                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Task"><i class="ri-pencil-fill mr-2"></i> Edit Task</button>
                                                            </a>
                                                            
                                                            <a class="btn btn-sm">
                                                               {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                               {{Form::hidden('id', $todo->id)}}
                                                               {{Form::hidden('_method', 'DELETE')}}
                                                               <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Task"><i class="ri-delete-bin-6-fill mr-2"></i>Remove Task</button>
                                                              
                                                               {!!Form::close()!!}
                                                            </a>
																			</div>
																		</td>
																	</tr>
                                                   @endforeach
																</tbody>
															</table>
                                 
														</div>
                                          <div class="col-md-6">
                                              <div style="text-align:right;">
                                                      <!-----The pagination link----->
                                                      {{$upcomings->links()}}
                                              </div>
                                          </div>
                                              @else
                                              <p style="padding-left: 8px;">
                                                 Nothing to show for today, kindly add to your to do list 
                                              <a href="schedule/create" class="btn btn-sm bg-info-light" style="margin:10px;">
                                                 <i class="far fa-plus"></i> here</a>
                                             </p>
                                            @endif		
													</div>
												</div>
											</div>
											<!-- new to do tab -->
											<div class="tab-pane" id="new_to_do">
												<div class="card card-table mb-0">
													<div class="card-body" style="padding: 30px;">
                                          @include('inc.messages')
                                          <div class="container" style="margin-bottom: 10px;">
                                          <!---If file upload is involved always add enctype to your opening
                                              form tag and set it to multipart/form-data--->
                                         {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                         **/ !!}
                                                  <div class="row">
                                                   <div class="form-group col-md-6">
                                                      <label for="title">Title</label>
                                                      <div class="inner-addon right-addon">
                                                      <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                                      </div>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                      <label for="time">Time</label>
                                                      <div class="inner-addon right-addon">
                                                          
                                                      <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                                      </div>
                                                   </div>
                                                   <div class="form-group col-md-6">
                                                      <label for="date">Date</label>
                                                      <div class="inner-addon right-addon">
                                                      <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                                      </div>
                                                   </div>
                                                </div>
                                          {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                                         {!! Form::close() !!}	
                                       </div>
													</div>	
												</div>	
											</div>
											<!-- /Today Appointment Tab -->
											
										</div>
									</div>
                        </div>
                        


								<div class="col-md-6" style="margin-bottom:15px;">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Have A Question?</b></h4>
                                <p class="non">Ask your fellow doctors on MedicPin</p>
                             </div>
                           </div>
                           
                           <style>
                              p.non{
                                 font-size: 12px;
                                 padding: 0;
                                 margin: 0;
                              }
                           </style>
									<div>
										<div>
											<div>
												<div class="card card-table mb-0">
													<div class="card-body">
                                          <div class="container" style="padding: 8px;">
                                             
                            {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                            **/ !!}
                                        <div class="form-group">
                                            <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                           <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                                        </div>
                                        <div class="form-group">
                                          <select class="form-control mb-0" id="selectex" name="expertise">
                                             <option value="">--Who should answer?--</option>
                                             <option value="All Doctors">All Doctors</option>
                                             <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                             <option value="Anesthesiologist">Anesthesiologist</option>
                                             <option value="Cardiologist">Cardiologist</option>
                                             <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                             <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                             <option value="Dermatologist">Dermatologist</option>
                                             <option value="Endocrinologist">Endocrinologist</option>
                                             <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                             <option value="Family Physician">Family Physician</option>
                                             <option value="Gastroenterologist">Gastroenterologist</option>
                                             <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                             <option value="Hematologist">Hematologist</option>
                                             <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                             <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                             <option value="Internist">Internist</option>
                                             <option value="Medical Geneticist">Medical Geneticist</option>
                                             <option value="Nephrologist">Nephrologist</option>
                                             <option value="Neurologist">Neurologist</option>
                                             <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                             <option value="Oncologist">Oncologist</option>
                                             <option value="Ophthalmologist">Ophthalmologist</option>
                                             <option value="Osteopath">Osteopath</option>
                                             <option value="Otolaryngologist">Otolaryngologist</option>
                                             <option value="Pathologist">Pathologist</option>
                                             <option value="Pediatrician">Pediatrician</option>
                                             <option value="Physiatrist">Physiatrist</option>
                                             <option value="Plastic Surgeon">Plastic Surgeon</option>
                                             <option value="Podiatrist">Podiatrist</option>
                                             <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                             <option value="Psychiatrist">Psychiatrist</option>
                                             <option value="Pulmonologist">Pulmonologist</option>
                                             <option value="Radiologist">Radiologist</option>
                                             <option value="Rheumatologist">Rheumatologist</option>
                                             <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                             <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                             <option value="General Surgeon">General Surgeon</option>
                                             <option value="Urologist">Urologist</option>
                                          </select>
                                       </div>
                                       <div class="form-group">
                                         <select class="form-control mb-0" id="identity" name="identity">
                                            <option value="">--Reveal Your Identity?--</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No, ask as anonymous</option>
                                         </select>
                                      </div>
                                    <button type="submit" class="btn btn-primary">Ask Question</button>
                                    {!! Form::close() !!}
                                          </div>
													</div>
												</div>
											</div>
											
                              </div>
                           </div>
                        </div>
								<div class="col-md-6" style="margin-bottom:15px;">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Questions From Forum</b></h4>
                             </div>
                           </div>
									<div class="">
										
										<div>
										
											<!-- questions Tab -->
											<div>
        
												<div class="card card-table mb-0">
													<div class="card-body">
                                          @if (count($questions_all) > 0)
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<tbody>
                                                   @foreach ($questions_all as $question_all)
                                                   @php
                                                       //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                                       //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                                   @endphp
																	<tr>
																		<td>
																			<h2 class="table-avatar">
                                                            <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span>
																				</a>
																			</h2>
                                                      </td>
																		<td class="text-right">
																			<div class="table-action">
                                                            
                                                            @if (auth()->user()->id == $question_all->asker_id)
                                                            <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                                                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                            </a>
                                                            
                                                            <a class="btn btn-sm">
                                                               {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                               
                                                               {{Form::hidden('_method', 'DELETE')}}
                                                               <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                                              
                                                               {!!Form::close()!!}
                                                            </a>
                                                            @endif
                                                            <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
																			</div>
																		</td>
																	</tr>
                                                   @endforeach
																</tbody>
															</table>
                                 
														</div>
                                              @else
                                              <p style="padding-left: 8px;">
                                                No Questions in Forum Yet...
                                             </p>
                                            @endif		
													</div>
												</div>
											</div>
											<!-- /scheduled patients tab -->
											
                              </div>
                           </div>
                        </div>

								<div class="col-md-12" style="margin-bottom: 25px;">
                           <div class="card card-table mb-0">
                             <div class="card-header">
                                <h4 class="card-title"><b> Doctors In Your Hospital</b></h4>
                             </div>
                           </div>
                           @php
                               $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Doctor')->paginate(3);
    
                           @endphp
										
										<div>
										
                                 @if (count($doctors) > 0)
                                 <div class="row">
                                 @foreach ($doctors as $doctor)
                                 @php
                                     $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                                 @endphp
								<div class="col-sm-6 col-md-4 col-xl-4">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="">
												<img class="img-fluid" alt="User Image" src="img/profile/{{$detail->img}}">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="">Dr. {{$detail->name}}</a> 
												<!--<i class="fas fa-check-circle verified"></i>--->
											</h3>
                                 <p class="speciality">{{$detail->expertise}}</p>
                                 <!---
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">(17)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Florida, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Available on Fri, 22 Mar
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>---->
											<div class="row row-sm">
												<div class="col-6">
													<a href="" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
                                           
                                       {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $detail->pin)}}
                                       <button type="submit" class ="btn book-btn" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                                      
                                       {!!Form::close()!!}
													
												</div>
											</div>
										</div>
									</div>
								</div>
                        @endforeach 
                     @else
                     <p>No Record Found</p> 
                     @endif
                     <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Doctors </a>
											<!-- /scheduled patients tab -->
											

							</div>
                  </div>
               @endif
               @if (auth()->user()->role == 'Pharmacist')
               <div class="col-md-12">
                  <div class="card dash-card">
                     <div class="card-header">
                        <h4 class="card-title"><b> Search For Patient To Sell Drug</b></h4>
                     </div>
                     <div class="card-body">
                        {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                            <div class="form-group mb-0">
                               <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                             
                              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                  </div> 
               <div class="col-md-12" style="margin-top: 20px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Your Task Board</b></h4>
                    </div>
                  </div>
                  <div class="appointment-tab">
                     <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                        <li class="nav-item">
                           <a class="nav-link active" href="#to_dos" data-toggle="tab">Today's Task(s)</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#new_to_do" data-toggle="tab">Create New Task</a>
                        </li> 
                     </ul>
                     @php
                         $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                     @endphp
                     <div class="tab-content">
                     
                        <!-- Upcoming Appointment Tab -->
                        <div class="tab-pane show active" id="to_dos">
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($todos) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <thead>
                                          <tr>
                                             <th>Activity</th>
                                             <th>Date</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($todos as $todo)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="">{{$todo->title}}</a>
                                                </h2>
                                             </td>
                                             <td>{{$todo->date}} <span class="d-block text-info">{{$todo->time}}</span></td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   <a class="btn btn-sm" href="schedule/{{$todo->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Task"><i class="ri-pencil-fill mr-2"></i> Edit Task</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      {{Form::hidden('id', $todo->id)}}
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Task"><i class="ri-delete-bin-6-fill mr-2"></i>Remove Task</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                 <div class="col-md-6">
                                     <div style="text-align:right;">
                                             <!-----The pagination link----->
                                             {{$upcomings->links()}}
                                     </div>
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                        Nothing to show for today, kindly add to your to do list 
                                     <a href="schedule/create" class="btn btn-sm bg-info-light" style="margin:10px;">
                                        <i class="far fa-plus"></i> here</a>
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- new to do tab -->
                        <div class="tab-pane" id="new_to_do">
                           <div class="card card-table mb-0">
                              <div class="card-body" style="padding: 30px;">
                                 @include('inc.messages')
                                 <div class="container" style="margin-bottom: 10px;">
                                 <!---If file upload is involved always add enctype to your opening
                                     form tag and set it to multipart/form-data--->
                                {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                **/ !!}
                                         <div class="row">
                                          <div class="form-group col-md-6">
                                             <label for="title">Title</label>
                                             <div class="inner-addon right-addon">
                                             <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="time">Time</label>
                                             <div class="inner-addon right-addon">
                                                 
                                             <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="date">Date</label>
                                             <div class="inner-addon right-addon">
                                             <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                             </div>
                                          </div>
                                       </div>
                                 {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                                {!! Form::close() !!}	
                              </div>
                              </div>	
                           </div>	
                        </div>
                        <!-- /Today Appointment Tab -->
                        
                     </div>
                  </div>
               </div>
               


               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Have A Question?</b></h4>
                       <p class="non">Ask whatever is on your mind...</p>
                    </div>
                  </div>
                  
                  <style>
                     p.non{
                        font-size: 12px;
                        padding: 0;
                        margin: 0;
                     }
                  </style>
                  <div>
                     <div>
                        <div>
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 <div class="container" style="padding: 8px;">
                                    
                   {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                   **/ !!}
                               <div class="form-group">
                                   <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                  <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                               </div>
                               <div class="form-group">
                                 <select class="form-control mb-0" id="selectex" name="expertise">
                                    <option value="">--Who should answer?--</option>
                                    <option value="All Doctors">All Doctors</option>
                                    <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                    <option value="Anesthesiologist">Anesthesiologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                    <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Endocrinologist">Endocrinologist</option>
                                    <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                    <option value="Family Physician">Family Physician</option>
                                    <option value="Gastroenterologist">Gastroenterologist</option>
                                    <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                    <option value="Hematologist">Hematologist</option>
                                    <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                    <option value="Internist">Internist</option>
                                    <option value="Medical Geneticist">Medical Geneticist</option>
                                    <option value="Nephrologist">Nephrologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                    <option value="Oncologist">Oncologist</option>
                                    <option value="Ophthalmologist">Ophthalmologist</option>
                                    <option value="Osteopath">Osteopath</option>
                                    <option value="Otolaryngologist">Otolaryngologist</option>
                                    <option value="Pathologist">Pathologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Physiatrist">Physiatrist</option>
                                    <option value="Plastic Surgeon">Plastic Surgeon</option>
                                    <option value="Podiatrist">Podiatrist</option>
                                    <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="Pulmonologist">Pulmonologist</option>
                                    <option value="Radiologist">Radiologist</option>
                                    <option value="Rheumatologist">Rheumatologist</option>
                                    <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                    <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                    <option value="General Surgeon">General Surgeon</option>
                                    <option value="Urologist">Urologist</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control mb-0" id="identity" name="identity">
                                   <option value="">--Reveal Your Identity?--</option>
                                   <option value="Yes">Yes</option>
                                   <option value="No">No, ask as anonymous</option>
                                </select>
                             </div>
                           <button type="submit" class="btn btn-primary">Ask Question</button>
                           {!! Form::close() !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Questions From Forum</b></h4>
                    </div>
                  </div>
                  <div class="">
                     
                     <div>
                     
                        <!-- questions Tab -->
                        <div>

                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($questions_all) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <tbody>
                                          @foreach ($questions_all as $question_all)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span>
                                                   </a>
                                                </h2>
                                             </td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   
                                                   @if (auth()->user()->id == $question_all->asker_id)
                                                   <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                   @endif
                                                   <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                       No Questions in Forum Yet...
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- /scheduled patients tab -->
                        
                     </div>
                  </div>
               </div>

               <div class="col-md-12" style="margin-bottom: 25px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Pharmacists In Your Hospital</b></h4>
                    </div>
                  </div>
                  @php
                      $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Pharmacist')->paginate(3);

                  @endphp
                     
                     <div>
                     
                        @if (count($doctors) > 0)
                        <div class="row">
                        @foreach ($doctors as $doctor)
                        @php
                            $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                        @endphp
               <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img class="img-fluid" alt="User Image" src="img/profile/{{$detail->img}}">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="">Dr. {{$detail->name}}</a> 
                           <!--<i class="fas fa-check-circle verified"></i>--->
                        </h3>
                        <p class="speciality">{{$detail->expertise}}</p>
                        <!---
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <span class="d-inline-block average-rating">(17)</span>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="fas fa-map-marker-alt"></i> Florida, USA
                           </li>
                           <li>
                              <i class="far fa-clock"></i> Available on Fri, 22 Mar
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                           </li>
                        </ul>---->
                        <div class="row row-sm">
                           <div class="col-6">
                              <a href="" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-6">
                                  
                              {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('pin', $detail->pin)}}
                              <button type="submit" class ="btn book-btn" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                             
                              {!!Form::close()!!}
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach 
            @else
            <p>No Record Found</p> 
            @endif
            <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Pharmacists </a>
                        <!-- /scheduled patients tab -->
                        

            </div>
         </div>
               @endif 

               @if (auth()->user()->role == 'Biochemist/Microbiologist')
               <div class="col-md-12">
                  <div class="card dash-card">
                     <div class="card-header">
                        <h4 class="card-title"><b> Search For Patient</b></h4>
                     </div>
                     <div class="card-body">
                        {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                            <div class="form-group mb-0">
                               <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                             
                              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                  </div> 
                              <div class="col-md-12">
                                 <div class="card">
                                 <div class="card-header">
                                    <h4 class="card-title"><b> Patients Awaiting Test</b></h4>
                                 </div>
                                    <div class="card-body">
                                       <div class="row row-grid">
                                          @php
                                              $patients = App\Lab::where('status','Pending')->paginate(10);
                                          @endphp
                                       @if (count($patients) > 0)
                                       @foreach ($patients as $patient)
                                       <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                               
                                       {!! Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                       **/ !!}
                                        {{Form::hidden('pin', $patient->patient_pin)}}
                                        {{Form::hidden('username', $patient->username)}}
                                       {!! Form::close() !!} 
                                       <div class="col-md-6 col-lg-4 col-xl-3">
                                          <div class="card widget-profile pat-widget-profile">
                                             <div class="card-body">
                                       <div class="pro-widget-content">
                                          <div class="profile-info-widget">
                                             @php
                                                $type = App\User::where('pin',$patient->pin)->first();
                                                
                                             @endphp
                                             <a class="booking-doc-img">
                                                <img src="img/profile/{{$type->img}}" alt="User Image">
                                             </a>
                                             <div class="profile-det-info">
                                                <h3><a>{{$patient->patient_name}}</a></h3>
                                                
                                                <div class="patient-details">
                                                   <h5><b>MedicPin :</b> {{$patient->patient_pin}}</h5>
                                                   <!--<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alabama, USA</h5>-->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="patient-info">
                                          {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('pin', $patient->patient_pin)}}
                                          <!--{{Form::hidden('username', $patient->username)}}--->
                                          <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="fas fa-eye"></i> View and Complete Test.</button>
                                         
                                          {!!Form::close()!!} 
                                    </div>
                                 </div>
                              </div>
                        
                        </div>
                     </a>
                     @endforeach
                     @else
                     <p class="text-center">No Scheduled Tests Yet</p>    
                     @endif    
                        </div>
                        
                        </div>
                     </div>
                </div>
               <div class="col-md-12" style="margin-top: 20px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Your Task Board</b></h4>
                    </div>
                  </div>
                  <div class="appointment-tab">
                     <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                        <li class="nav-item">
                           <a class="nav-link active" href="#to_dos" data-toggle="tab">Today's Task(s)</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#new_to_do" data-toggle="tab">Create New Task</a>
                        </li> 
                     </ul>
                     @php
                         $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                     @endphp
                     <div class="tab-content">
                     
                        <!-- Upcoming Appointment Tab -->
                        <div class="tab-pane show active" id="to_dos">
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($todos) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <thead>
                                          <tr>
                                             <th>Activity</th>
                                             <th>Date</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($todos as $todo)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="">{{$todo->title}}</a>
                                                </h2>
                                             </td>
                                             <td>{{$todo->date}} <span class="d-block text-info">{{$todo->time}}</span></td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   <a class="btn btn-sm" href="schedule/{{$todo->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Task"><i class="ri-pencil-fill mr-2"></i> Edit Task</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      {{Form::hidden('id', $todo->id)}}
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Task"><i class="ri-delete-bin-6-fill mr-2"></i>Remove Task</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                 <div class="col-md-6">
                                     <div style="text-align:right;">
                                             <!-----The pagination link----->
                                             {{$upcomings->links()}}
                                     </div>
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                        Nothing to show for today, kindly add to your to do list 
                                     <a href="schedule/create" class="btn btn-sm bg-info-light" style="margin:10px;">
                                        <i class="far fa-plus"></i> here</a>
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- new to do tab -->
                        <div class="tab-pane" id="new_to_do">
                           <div class="card card-table mb-0">
                              <div class="card-body" style="padding: 30px;">
                                 @include('inc.messages')
                                 <div class="container" style="margin-bottom: 10px;">
                                 <!---If file upload is involved always add enctype to your opening
                                     form tag and set it to multipart/form-data--->
                                {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                **/ !!}
                                         <div class="row">
                                          <div class="form-group col-md-6">
                                             <label for="title">Title</label>
                                             <div class="inner-addon right-addon">
                                             <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="time">Time</label>
                                             <div class="inner-addon right-addon">
                                                 
                                             <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="date">Date</label>
                                             <div class="inner-addon right-addon">
                                             <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                             </div>
                                          </div>
                                       </div>
                                 {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                                {!! Form::close() !!}	
                              </div>
                              </div>	
                           </div>	
                        </div>
                        <!-- /Today Appointment Tab -->
                        
                     </div>
                  </div>
               </div>
               


               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Have A Question?</b></h4>
                       <p class="non">Ask whatever is on your mind...</p>
                    </div>
                  </div>
                  
                  <style>
                     p.non{
                        font-size: 12px;
                        padding: 0;
                        margin: 0;
                     }
                  </style>
                  <div>
                     <div>
                        <div>
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 <div class="container" style="padding: 8px;">
                                    
                   {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                   **/ !!}
                               <div class="form-group">
                                   <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                  <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                               </div>
                               <div class="form-group">
                                 <select class="form-control mb-0" id="selectex" name="expertise">
                                    <option value="">--Who should answer?--</option>
                                    <option value="All Doctors">All Doctors</option>
                                    <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                    <option value="Anesthesiologist">Anesthesiologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                    <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Endocrinologist">Endocrinologist</option>
                                    <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                    <option value="Family Physician">Family Physician</option>
                                    <option value="Gastroenterologist">Gastroenterologist</option>
                                    <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                    <option value="Hematologist">Hematologist</option>
                                    <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                    <option value="Internist">Internist</option>
                                    <option value="Medical Geneticist">Medical Geneticist</option>
                                    <option value="Nephrologist">Nephrologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                    <option value="Oncologist">Oncologist</option>
                                    <option value="Ophthalmologist">Ophthalmologist</option>
                                    <option value="Osteopath">Osteopath</option>
                                    <option value="Otolaryngologist">Otolaryngologist</option>
                                    <option value="Pathologist">Pathologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Physiatrist">Physiatrist</option>
                                    <option value="Plastic Surgeon">Plastic Surgeon</option>
                                    <option value="Podiatrist">Podiatrist</option>
                                    <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="Pulmonologist">Pulmonologist</option>
                                    <option value="Radiologist">Radiologist</option>
                                    <option value="Rheumatologist">Rheumatologist</option>
                                    <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                    <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                    <option value="General Surgeon">General Surgeon</option>
                                    <option value="Urologist">Urologist</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control mb-0" id="identity" name="identity">
                                   <option value="">--Reveal Your Identity?--</option>
                                   <option value="Yes">Yes</option>
                                   <option value="No">No, ask as anonymous</option>
                                </select>
                             </div>
                           <button type="submit" class="btn btn-primary">Ask Question</button>
                           {!! Form::close() !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Questions From Forum</b></h4>
                    </div>
                  </div>
                  <div class="">
                     
                     <div>
                     
                        <!-- questions Tab -->
                        <div>

                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($questions_all) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <tbody>
                                          @foreach ($questions_all as $question_all)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span>
                                                   </a>
                                                </h2>
                                             </td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   
                                                   @if (auth()->user()->id == $question_all->asker_id)
                                                   <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                   @endif
                                                   <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                       No Questions in Forum Yet...
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- /scheduled patients tab -->
                        
                     </div>
                  </div>
               </div>

               <div class="col-md-12" style="margin-bottom: 25px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Colleagues</b></h4>
                    </div>
                  </div>
                  @php
                      $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Biochemist/Microbiologist')->paginate(3);

                  @endphp
                     
                     <div>
                     
                        @if (count($doctors) > 0)
                        <div class="card-body">
                        <div class="row">
                        @foreach ($doctors as $doctor)
                        @php
                            $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                        @endphp
               <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img class="img-fluid" alt="User Image" src="img/profile/{{$detail->img}}">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="">Dr. {{$detail->name}}</a> 
                           <!--<i class="fas fa-check-circle verified"></i>--->
                        </h3>
                        <p class="speciality">{{$detail->expertise}}</p>
                        <!---
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <span class="d-inline-block average-rating">(17)</span>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="fas fa-map-marker-alt"></i> Florida, USA
                           </li>
                           <li>
                              <i class="far fa-clock"></i> Available on Fri, 22 Mar
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                           </li>
                        </ul>---->
                        <div class="row row-sm">
                           <div class="col-6">
                              <a href="" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-6">
                                  
                              {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('pin', $detail->pin)}}
                              <button type="submit" class ="btn book-btn" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                             
                              {!!Form::close()!!}
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach 
            @else
            <p>No Record Found</p> 
            @endif
            <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Nurses </a>
                        <!-- /scheduled patients tab -->
                        

            </div>
         </div>
               @endif 
               
               @if (auth()->user()->role == 'Ward Maid')
               <div class="col-md-12">
                  <div class="card dash-card">
                     <div class="card-header">
                        <h4 class="card-title"><b> Search For Patient</b></h4>
                     </div>
                     <div class="card-body">
                        {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                            <div class="form-group mb-0">
                               <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                             
                              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                  </div> 
                              <div class="col-md-12">
                                 <div class="card">
                                 <div class="card-header">
                                    <h4 class="card-title"><b>Admitted Patients</b></h4>
                                 </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                           @php
                                               $patients = App\patients::where('status','Admitted')->paginate(10);
                                              
                                           @endphp
                                           @if (count($patients) > 0)
                                          <table class="table mb-0 table-borderless">
                                             <thead>
                                                <tr>
                                                 <th>Patient's Pin</th>
                                                   <th>Patient Name</th>
                                                   <th>Admitted By</th>
                                                   <th>Ward</th>
                                                   <th>Next Of Kin</th>
                                                   <th>Relationship</th>
                                                   <th>Contact</th>
                                                   <th>Date</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($patients as $patient)
                                                <tr>
                                                    @php
                                                    $user = App\User::where('pin', $patient->pin)->where('h_id', auth()->user()->h_id)->first();
                                                       
                                                    $get_detail = App\Admission::where('patient', $user->pin)->first();
                                                   $pat = App\patients::where('pin',$patient->pin)->first();
                                                    $doctor = App\User::where('pin', $get_detail->admitted_by)->first();
                                                    @endphp
                                                   <td>{{$user->pin}}</td>
                                                   <td>{{$user->name}}</td>
                                                   <td>Dr. {{$doctor->name}}</td>
                                                   <td>{{$get_detail->ward}}</td>
                                                   <td>{{$pat->nok}}</td>
                                                   <td>{{$pat->nok_relation}}</td>
                                                   <td><a href="tel:{{$pat->nok_phone}}" style="text-decoration: none;">{{$pat->nok_phone}}</a></td>
                                                   
                                                   <td>{{$get_detail->created_at}}</td>
                                                </tr>
                                               
                                                @endforeach
                                             </tbody>
                                          </table>
                                              
                                        <div class="col-md-6">
                                            <div style="text-align:right;">
                                                    <!-----The pagination link----->
                                                    {{$patients->links()}}
                                            </div>
                                        </div>
                                            @else
                                            <p>No Record Found</p>   
                                          @endif
                                       </div>
                        
                        </div>
                     </div>
                </div>
               <div class="col-md-12" style="margin-top: 20px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Your Task Board</b></h4>
                    </div>
                  </div>
                  <div class="appointment-tab">
                     <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                        <li class="nav-item">
                           <a class="nav-link active" href="#to_dos" data-toggle="tab">Today's Task(s)</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#new_to_do" data-toggle="tab">Create New Task</a>
                        </li> 
                     </ul>
                     @php
                         $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                     @endphp
                     <div class="tab-content">
                     
                        <!-- Upcoming Appointment Tab -->
                        <div class="tab-pane show active" id="to_dos">
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($todos) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <thead>
                                          <tr>
                                             <th>Activity</th>
                                             <th>Date</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($todos as $todo)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="">{{$todo->title}}</a>
                                                </h2>
                                             </td>
                                             <td>{{$todo->date}} <span class="d-block text-info">{{$todo->time}}</span></td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   <a class="btn btn-sm" href="schedule/{{$todo->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Task"><i class="ri-pencil-fill mr-2"></i> Edit Task</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      {{Form::hidden('id', $todo->id)}}
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Task"><i class="ri-delete-bin-6-fill mr-2"></i>Remove Task</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                 <div class="col-md-6">
                                     <div style="text-align:right;">
                                             <!-----The pagination link----->
                                             {{$upcomings->links()}}
                                     </div>
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                        Nothing to show for today, kindly add to your to do list 
                                     <a href="schedule/create" class="btn btn-sm bg-info-light" style="margin:10px;">
                                        <i class="far fa-plus"></i> here</a>
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- new to do tab -->
                        <div class="tab-pane" id="new_to_do">
                           <div class="card card-table mb-0">
                              <div class="card-body" style="padding: 30px;">
                                 @include('inc.messages')
                                 <div class="container" style="margin-bottom: 10px;">
                                 <!---If file upload is involved always add enctype to your opening
                                     form tag and set it to multipart/form-data--->
                                {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                **/ !!}
                                         <div class="row">
                                          <div class="form-group col-md-6">
                                             <label for="title">Title</label>
                                             <div class="inner-addon right-addon">
                                             <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="time">Time</label>
                                             <div class="inner-addon right-addon">
                                                 
                                             <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="date">Date</label>
                                             <div class="inner-addon right-addon">
                                             <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                             </div>
                                          </div>
                                       </div>
                                 {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                                {!! Form::close() !!}	
                              </div>
                              </div>	
                           </div>	
                        </div>
                        <!-- /Today Appointment Tab -->
                        
                     </div>
                  </div>
               </div>
               


               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Have A Question?</b></h4>
                       <p class="non">Ask whatever is on your mind...</p>
                    </div>
                  </div>
                  
                  <style>
                     p.non{
                        font-size: 12px;
                        padding: 0;
                        margin: 0;
                     }
                  </style>
                  <div>
                     <div>
                        <div>
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 <div class="container" style="padding: 8px;">
                                    
                   {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                   **/ !!}
                               <div class="form-group">
                                   <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                  <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                               </div>
                               <div class="form-group">
                                 <select class="form-control mb-0" id="selectex" name="expertise">
                                    <option value="">--Who should answer?--</option>
                                    <option value="All Doctors">All Doctors</option>
                                    <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                    <option value="Anesthesiologist">Anesthesiologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                    <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Endocrinologist">Endocrinologist</option>
                                    <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                    <option value="Family Physician">Family Physician</option>
                                    <option value="Gastroenterologist">Gastroenterologist</option>
                                    <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                    <option value="Hematologist">Hematologist</option>
                                    <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                    <option value="Internist">Internist</option>
                                    <option value="Medical Geneticist">Medical Geneticist</option>
                                    <option value="Nephrologist">Nephrologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                    <option value="Oncologist">Oncologist</option>
                                    <option value="Ophthalmologist">Ophthalmologist</option>
                                    <option value="Osteopath">Osteopath</option>
                                    <option value="Otolaryngologist">Otolaryngologist</option>
                                    <option value="Pathologist">Pathologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Physiatrist">Physiatrist</option>
                                    <option value="Plastic Surgeon">Plastic Surgeon</option>
                                    <option value="Podiatrist">Podiatrist</option>
                                    <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="Pulmonologist">Pulmonologist</option>
                                    <option value="Radiologist">Radiologist</option>
                                    <option value="Rheumatologist">Rheumatologist</option>
                                    <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                    <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                    <option value="General Surgeon">General Surgeon</option>
                                    <option value="Urologist">Urologist</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control mb-0" id="identity" name="identity">
                                   <option value="">--Reveal Your Identity?--</option>
                                   <option value="Yes">Yes</option>
                                   <option value="No">No, ask as anonymous</option>
                                </select>
                             </div>
                           <button type="submit" class="btn btn-primary">Ask Question</button>
                           {!! Form::close() !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Questions From Forum</b></h4>
                    </div>
                  </div>
                  <div class="">
                     
                     <div>
                     
                        <!-- questions Tab -->
                        <div>

                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($questions_all) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <tbody>
                                          @foreach ($questions_all as $question_all)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span>
                                                   </a>
                                                </h2>
                                             </td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   
                                                   @if (auth()->user()->id == $question_all->asker_id)
                                                   <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                   @endif
                                                   <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                       No Questions in Forum Yet...
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- /scheduled patients tab -->
                        
                     </div>
                  </div>
               </div>

               <div class="col-md-12" style="margin-bottom: 25px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Colleagues</b></h4>
                    </div>
                  </div>
                  @php
                      $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Biochemist/Microbiologist')->paginate(3);

                  @endphp
                     
                     <div>
                     
                        @if (count($doctors) > 0)
                        <div class="card-body">
                        <div class="row">
                        @foreach ($doctors as $doctor)
                        @php
                            $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                        @endphp
               <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img class="img-fluid" alt="User Image" src="img/profile/{{$detail->img}}">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="">Dr. {{$detail->name}}</a> 
                           <!--<i class="fas fa-check-circle verified"></i>--->
                        </h3>
                        <p class="speciality">{{$detail->expertise}}</p>
                        <!---
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <span class="d-inline-block average-rating">(17)</span>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="fas fa-map-marker-alt"></i> Florida, USA
                           </li>
                           <li>
                              <i class="far fa-clock"></i> Available on Fri, 22 Mar
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                           </li>
                        </ul>---->
                        <div class="row row-sm">
                           <div class="col-6">
                              <a href="" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-6">
                                  
                              {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('pin', $detail->pin)}}
                              <button type="submit" class ="btn book-btn" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                             
                              {!!Form::close()!!}
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach 
            @else
            <p>No Record Found</p> 
            @endif
            <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All</a>
                        <!-- /scheduled patients tab -->
                        

            </div>
         </div>
               @endif 

               
               @if (auth()->user()->role == 'Nurse')
               <div class="col-md-12">
                  <div class="card dash-card">
                     <div class="card-header">
                        <h4 class="card-title"><b> Search For Patient</b></h4>
                     </div>
                     <div class="card-body">
                        {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                            <div class="form-group mb-0">
                               <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                             
                              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                     </div>
                  </div> 
                              <div class="col-md-12">
                                 <div class="card">
                                 <div class="card-header">
                                    <h4 class="card-title"><b> Your Hospital Patients</b></h4>
                                 </div>
                                    <div class="card-body">
                                       <div class="row row-grid">
                                       @php
                                           
                                         $pin = App\patients::pluck('pin');
                                         $users = App\User::whereIn('pin',$pin)->where('h_id', auth()->user()->h_id)->paginate(9);
                                       @endphp   
                                       @if (count($users) > 0)
                                       @foreach ($users as $user) 
                                       <div class="col-md-6 col-lg-4 col-xl-3">
                                          <div class="card widget-profile pat-widget-profile">
                                             <div class="card-body">
                                       <div class="pro-widget-content">
                                          <div class="profile-info-widget">
                                             @php
                                                $type = App\User::where('pin',$user->pin)->first();
                                                
                                             @endphp
                                             <a class="booking-doc-img">
                                                <img src="img/profile/{{$type->img}}" alt="User Image">
                                             </a>
                                             <div class="profile-det-info">
                                                <h3><a>{{$user->name}}</a></h3>
                                                
                                                <div class="patient-details">
                                                   <h5><b>MedicPin :</b> {{$user->pin}}</h5>
                                                   <!--<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alabama, USA</h5>-->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="patient-info">
                                          <ul>
                                             <li>Phone <span>{{$type->cc.$type->p_number}}</span></li>
                                             <li>Age <span>{{\Carbon\Carbon::parse($type->age)->diff(\Carbon\Carbon::now())->format('%y')}} Years, {{$type->gender}}</span></li>
                                             <!--<li>Blood Group <span>AB+</span></li>-->
                                             <li>
                                                Actions
                                                <span>
                                                   <div class="dropdown">
                                                      <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Click Here </a>
                                                      <div class="dropdown-menu">
                                                         @if (auth()->user()->role == 'Doctor')
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i> Add New Medical Record</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('username', $user->username)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                                         @if ($user->status == 'Admitted')
                                                         {!!Form::open(['action' => ['AdmissionController@update', $user->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('_method', 'PUT')}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="la la-procedures"></i> Discharge Patient</button>
                                                         {!!Form::close()!!}
                                                            @else
                                                            {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                            {{Form::hidden('pin', $user->pin)}}
                                                            <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="la la-bed"></i> Admit Patient</button>
                                                            {!!Form::close()!!}  
                                                         @endif
                                                         </a>
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i> Transfer Patient</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i> Message Patient</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                        
                        
                                                         {!!Form::open(['action' => ['PatientsController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('email', $user->email)}}
                                                         {{Form::hidden('_method', 'DELETE')}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i> Delete Patient</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         @endif
                                                         @if (auth()->user()->role == 'Pharmacist')
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('username',$user->username)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Doctor's Prescription For Patient."><i class="fa fa-bars"></i> View Doctor's Prescription</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         @endif
                                                         @if (auth()->user()->role == 'Nurse')
                                                         <a class="dropdown-item">
                                                               
                                                         {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('username', $user->username)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consultation With A Doctor"><i class="las la-radiation"></i> Schedule Consultation</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'ConsortationsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('username', $user->username)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Consultation History"><i class="las la-city"></i> Consultation History</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                                         {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         {{Form::hidden('username', $user->username)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i> View Medical History</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         <a class="dropdown-item">
                                       
                                                         {!!Form::open(['action' => 'VisitorController@other', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                         {{Form::hidden('pin', $user->pin)}}
                                                         <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="See Visitors List"><i class="la la-user-nurse"></i> See Visitors List</button>
                                                         
                                                         {!!Form::close()!!}
                                                         </a>
                                                         @endif
                                                      </div>
                                                   </div>
                                                </span>
                                             </li>
                                          </ul>
                                    </div>
                                 </div>
                              </div>
                        
                        </div>
                        @endforeach
                        <div class="col-md-6">
                           <div style="text-align:right;">
                                    <!-----The pagination link----->
                                    {{$users->links()}}
                           </div>
                        </div>
                           @else
                           <p>No Record Found</p>   
                        @endif
                        </div>
                        
                        </div>
                     </div>
                </div>
               <div class="col-md-12" style="margin-top: 20px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Your Task Board</b></h4>
                    </div>
                  </div>
                  <div class="appointment-tab">
                     <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                        <li class="nav-item">
                           <a class="nav-link active" href="#to_dos" data-toggle="tab">Today's Task(s)</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#new_to_do" data-toggle="tab">Create New Task</a>
                        </li> 
                     </ul>
                     @php
                         $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                     @endphp
                     <div class="tab-content">
                     
                        <!-- Upcoming Appointment Tab -->
                        <div class="tab-pane show active" id="to_dos">
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($todos) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <thead>
                                          <tr>
                                             <th>Activity</th>
                                             <th>Date</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($todos as $todo)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="">{{$todo->title}}</a>
                                                </h2>
                                             </td>
                                             <td>{{$todo->date}} <span class="d-block text-info">{{$todo->time}}</span></td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   <a class="btn btn-sm" href="schedule/{{$todo->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Task"><i class="ri-pencil-fill mr-2"></i> Edit Task</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      {{Form::hidden('id', $todo->id)}}
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Task"><i class="ri-delete-bin-6-fill mr-2"></i>Remove Task</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                 <div class="col-md-6">
                                     <div style="text-align:right;">
                                             <!-----The pagination link----->
                                             {{$upcomings->links()}}
                                     </div>
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                        Nothing to show for today, kindly add to your to do list 
                                     <a href="schedule/create" class="btn btn-sm bg-info-light" style="margin:10px;">
                                        <i class="far fa-plus"></i> here</a>
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- new to do tab -->
                        <div class="tab-pane" id="new_to_do">
                           <div class="card card-table mb-0">
                              <div class="card-body" style="padding: 30px;">
                                 @include('inc.messages')
                                 <div class="container" style="margin-bottom: 10px;">
                                 <!---If file upload is involved always add enctype to your opening
                                     form tag and set it to multipart/form-data--->
                                {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                **/ !!}
                                         <div class="row">
                                          <div class="form-group col-md-6">
                                             <label for="title">Title</label>
                                             <div class="inner-addon right-addon">
                                             <input type="text" class="form-control" id="title" name="title" placeholder="To do title">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="time">Time</label>
                                             <div class="inner-addon right-addon">
                                                 
                                             <input type="time" class="form-control" name="time" id="time" placeholder="to do time">
                                             </div>
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label for="date">Date</label>
                                             <div class="inner-addon right-addon">
                                             <input type="date" class="form-control" id="date" name="date" placeholder="To do date">
                                             </div>
                                          </div>
                                       </div>
                                 {{Form::submit('Create To Do', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                                {!! Form::close() !!}	
                              </div>
                              </div>	
                           </div>	
                        </div>
                        <!-- /Today Appointment Tab -->
                        
                     </div>
                  </div>
               </div>
               


               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Have A Question?</b></h4>
                       <p class="non">Ask whatever is on your mind...</p>
                    </div>
                  </div>
                  
                  <style>
                     p.non{
                        font-size: 12px;
                        padding: 0;
                        margin: 0;
                     }
                  </style>
                  <div>
                     <div>
                        <div>
                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 <div class="container" style="padding: 8px;">
                                    
                   {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                   **/ !!}
                               <div class="form-group">
                                   <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                  <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                               </div>
                               <div class="form-group">
                                 <select class="form-control mb-0" id="selectex" name="expertise">
                                    <option value="">--Who should answer?--</option>
                                    <option value="All Doctors">All Doctors</option>
                                    <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                    <option value="Anesthesiologist">Anesthesiologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                    <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                    <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Endocrinologist">Endocrinologist</option>
                                    <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                    <option value="Family Physician">Family Physician</option>
                                    <option value="Gastroenterologist">Gastroenterologist</option>
                                    <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                    <option value="Hematologist">Hematologist</option>
                                    <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                    <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                    <option value="Internist">Internist</option>
                                    <option value="Medical Geneticist">Medical Geneticist</option>
                                    <option value="Nephrologist">Nephrologist</option>
                                    <option value="Neurologist">Neurologist</option>
                                    <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                    <option value="Oncologist">Oncologist</option>
                                    <option value="Ophthalmologist">Ophthalmologist</option>
                                    <option value="Osteopath">Osteopath</option>
                                    <option value="Otolaryngologist">Otolaryngologist</option>
                                    <option value="Pathologist">Pathologist</option>
                                    <option value="Pediatrician">Pediatrician</option>
                                    <option value="Physiatrist">Physiatrist</option>
                                    <option value="Plastic Surgeon">Plastic Surgeon</option>
                                    <option value="Podiatrist">Podiatrist</option>
                                    <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="Pulmonologist">Pulmonologist</option>
                                    <option value="Radiologist">Radiologist</option>
                                    <option value="Rheumatologist">Rheumatologist</option>
                                    <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                    <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                    <option value="General Surgeon">General Surgeon</option>
                                    <option value="Urologist">Urologist</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control mb-0" id="identity" name="identity">
                                   <option value="">--Reveal Your Identity?--</option>
                                   <option value="Yes">Yes</option>
                                   <option value="No">No, ask as anonymous</option>
                                </select>
                             </div>
                           <button type="submit" class="btn btn-primary">Ask Question</button>
                           {!! Form::close() !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-6" style="margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Questions From Forum</b></h4>
                    </div>
                  </div>
                  <div class="">
                     
                     <div>
                     
                        <!-- questions Tab -->
                        <div>

                           <div class="card card-table mb-0">
                              <div class="card-body">
                                 @if (count($questions_all) > 0)
                                 <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                       <tbody>
                                          @foreach ($questions_all as $question_all)
                                          @php
                                              //$patient = App\patients::where('pin', $upcoming->patient)->first();
                                              //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                                          @endphp
                                          <tr>
                                             <td>
                                                <h2 class="table-avatar">
                                                   <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span>
                                                   </a>
                                                </h2>
                                             </td>
                                             <td class="text-right">
                                                <div class="table-action">
                                                   
                                                   @if (auth()->user()->id == $question_all->asker_id)
                                                   <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                                                     <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                                                   </a>
                                                   
                                                   <a class="btn btn-sm">
                                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                      
                                                      {{Form::hidden('_method', 'DELETE')}}
                                                      <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                                     
                                                      {!!Form::close()!!}
                                                   </a>
                                                   @endif
                                                   <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                                </div>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                        
                                 </div>
                                     @else
                                     <p style="padding-left: 8px;">
                                       No Questions in Forum Yet...
                                    </p>
                                   @endif		
                              </div>
                           </div>
                        </div>
                        <!-- /scheduled patients tab -->
                        
                     </div>
                  </div>
               </div>

               <div class="col-md-12" style="margin-bottom: 25px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b>Colleagues</b></h4>
                    </div>
                  </div>
                  @php
                      $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Ward Maid')->paginate(3);

                  @endphp
                     
                     <div>
                     
                        @if (count($doctors) > 0)
                        <div class="card-body">
                        <div class="row">
                        @foreach ($doctors as $doctor)
                        @php
                            $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                        @endphp
               <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="profile-widget">
                     <div class="doc-img">
                        <a href="">
                           <img class="img-fluid" alt="User Image" src="img/profile/{{$detail->img}}">
                        </a>
                        <a href="javascript:void(0)" class="fav-btn">
                           <i class="far fa-bookmark"></i>
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="">Dr. {{$detail->name}}</a> 
                           <!--<i class="fas fa-check-circle verified"></i>--->
                        </h3>
                        <p class="speciality">{{$detail->expertise}}</p>
                        <!---
                        <div class="rating">
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <i class="fas fa-star filled"></i>
                           <span class="d-inline-block average-rating">(17)</span>
                        </div>
                        <ul class="available-info">
                           <li>
                              <i class="fas fa-map-marker-alt"></i> Florida, USA
                           </li>
                           <li>
                              <i class="far fa-clock"></i> Available on Fri, 22 Mar
                           </li>
                           <li>
                              <i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                           </li>
                        </ul>---->
                        <div class="row row-sm">
                           <div class="col-6">
                              <a href="" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-6">
                                  
                              {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('pin', $detail->pin)}}
                              <button type="submit" class ="btn book-btn" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                             
                              {!!Form::close()!!}
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach 
            @else
            <p>No Record Found</p> 
            @endif
            <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All</a>
                        <!-- /scheduled patients tab -->
                        

            </div>
         </div>
               @endif 

               
               @if (auth()->user()->role == 'HMO')
               <div class="col-md-12">
                  
      <style>
         
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg1 {
            width: 55px;
            float: left;
            color: #fff;
            display: block;
            font-size: 20px;
            text-align: center;
            line-height: 55px;
            background: #009efb;
            border-radius: 50%;
            font-size: 30px;
            height: 55px;
         }
         
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg2 {
            width: 55px;
            float: left;
            color: #fff;
            display: block;
            font-size: 20px;
            text-align: center;
            line-height: 55px;
            background: #55ce63;
            border-radius: 50%;
            font-size: 30px;
            height: 55px;
         }
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg3 {
            width: 55px;
            float: left;
            color: #fff;
            display: block;
            font-size: 20px;
            text-align: center;
            line-height: 55px;
            background: #7a92a3;
            border-radius: 50%;
            font-size: 30px;
            height: 55px;
         }
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg4 {
            width: 55px;
            float: left;
            color: #fff;
            display: block;
            font-size: 20px;
            text-align: center;
            line-height: 55px;
            background: #ffbc35;
            border-radius: 50%;
            font-size: 30px;
            height: 55px;
         }
         .dash-widget {
            background-color: #fff;
            border-radius: 4px;
            margin-bottom: 30px;
            padding: 20px 20px;
            position: relative;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
         }
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg1 i.fa,
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg2 i.fas,
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg3 i.fa,
         div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg4 i.fa{
            padding-top: 10px;
         }
         .dash-widget-info{
            float: right;
            margin-left: 25px;
         }
         .dash-widget-info.last{
            float: right;
            margin-left: 0px;
         }
         .dash-widget-info > h3 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 0.5rem;
         }
         .dash-widget-info span i {
            width: 16px;
            background: #fff;
            border-radius: 50%;
            color: #666666;
            font-size: 9px;
            height: 16px;
            line-height: 16px;
            text-align: center;
            margin-left: 5px;
         }
         .dash-widget-info > span.widget-title1 {
            background: #009efb;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
         }
         .dash-widget-info > span.widget-title2 {
            background: #55ce63;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
         }
         .dash-widget-info > span.widget-title3 {
            background: #7a92a3;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
         }
         .dash-widget-info > span.widget-title4 {
            background: #ffbc35;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
         }
               </style>
                  @php
                      $cat = App\hmo_cat::where('HMO', auth()->user()->id)->get();
                  @endphp
                  <div class="row">
                  @if (!empty($cat))

                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                      <div class="dash-widget">
                   <span class="dash-widget-bg1"><i class="fa fa-user" aria-hidden="true"></i></span>
                   <div class="dash-widget-info text-right">
                      <h3>{{App\User::where('hmo',auth()->user()->id)->count()}}</h3>
                      <span class="widget-title1">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                   </div>
                      </div>
                  </div>            
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                      <div class="dash-widget">
                          <span class="dash-widget-bg2"><i class="fas fa-stethoscope"></i></span>
                          <div class="dash-widget-info text-right last">
                              <h3>{{App\hospitals::where('hmo',auth()->user()->id)->count()}}</h3>
                              <span class="widget-title2">Hospitals <i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                      <div class="dash-widget">
                          <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                          <div class="dash-widget-info text-right">
                              <h3>{{App\hmo_cat::where('HMO',auth()->user()->id)->count()}}</h3>
                              <span class="widget-title3">Products<i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                      <div class="dash-widget">
                          <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                          <div class="dash-widget-info last text-right">
                              <h3>{{App\HMO::where('hmo',auth()->user()->id)->count()}}</h3>
                              <span class="widget-title4">Package(s)<i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                      </div>
                  </div>
                  @else
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                      <div class="dash-widget">
                   <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                   <div class="dash-widget-info text-right">
                      <h3>{{App\User::where('hmo',auth()->user()->id)->count()}}</h3>
                      <span class="widget-title1">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                   </div>
                      </div>
                  </div>            
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                      <div class="dash-widget">
                          <span class="dash-widget-bg2"><i class="fas fa-user"></i></span>
                          <div class="dash-widget-info text-right">
                              <h3>{{App\hospitals::where('hmo',auth()->user()->id)->count()}}</h3>
                              <span class="widget-title2">Hospitals <i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                      <div class="dash-widget">
                          <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                          <div class="dash-widget-info last text-right">
                              <h3>{{App\HMO::where('hmo',auth()->user()->id)->count()}}</h3>
                              <span class="widget-title4">Package(s)<i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                      </div>
                  </div>

                  @endif
               </div>
                </div>
                
       <div class="col-md-12">
		   
         <div class="card">
            <div class="card-header">
            <div class="table-responsive">
               <table class="table table-hover">
                 <tbody>
                  <tr>
                    <td>
                     <h2 class="table-avatar">
                       <a href="#">{{auth()->user()->hmo_org_name}}</a>
                     </h2>
                     </td>
                    <td class="text-right">
                     <div class="table-action"> 
                        <a class="btn btn-sm" >
                           {!!Form::open(['action' => 'HmoController@add_cat', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                          
                           <button type="submit" class ="btn bg-info-light btn-sm">Add New Product Category</button>
                          
                           {!!Form::close()!!} 
                        </a>
                        <a class="btn btn-sm">
                           {!!Form::open(['action' => 'HmoController@add_hospital', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                          
                           <!---{{Form::hidden('id', auth()->user()->id)}}--->
                           <button type="submit" class ="btn bg-info-light btn-sm">Add Hospital To HMO</button>
                          
                           {!!Form::close()!!}
                        </a>  
                     </div>
                    </td>
                  </tr>
                 </tbody>
               </table>
            </div>
            </div>
              </div>
            </div>

                     
       <div class="col-md-12">
		   
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Registered Users</h4>
            </div>
            @php 
                  $users = App\User::where('hmo', auth()->user()->id)->paginate(100);  
            @endphp  
            @if (count($users) > 0)
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr>
                      <th>MedicPin</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Organization</th>
                        <th>Product Category</th>
                        <th>Package On</th>
                        <th>Package Limit</th>
                        <th>Package Limit Remaining</th>
                     </tr>
                  </thead>
                 <tbody>
                  @foreach ($users as $user)
                  <tr>
                     <td>{{$user->pin}}</td>
                     <td>{{$user->name}}</td>
                     @php
                         $package = App\HMO::where('id',$user->hmo_package)->first();
                         $cat = App\hmo_cat::where('id', $package->cat_id)->first();
                     @endphp
                     <td>{{$user->gender}}</td>
                     @if (!empty($user->hmo_org_name))
                     <td>{{$user->hmo_org_name}}</td>
                     @else
                     <td>N/A</td>
                     @endif
                     <td>{{$cat->name}}</td>
                     <td>{{$package->name}}</td>
                     <td>{{$package->No_of_times}}</td>
                     <td>{{$package->No_of_times - $user->No_of_times_used}}</td>
                  </tr>
                 
                  @endforeach
                 </tbody>
               </table>
            </div>
            <div class="col-md-6">
                <div style="text-align:right;">
                        <!-----The pagination link----->
                        {{$users->links()}}
                </div>
            </div>
                @else
                <p>No Record Found</p>   
              @endif
            </div>
              </div> 
               <div class="col-md-12" style="margin-top: 15px; margin-bottom:15px;">
                  <div class="card card-table mb-0">
                    <div class="card-header">
                       <h4 class="card-title"><b> Your Product Categories</b></h4>
                    </div>
                  </div>
                  <div class="card-body">
                  <div class="row row-grid">
                     @php
                         $cats = App\hmo_cat::where('HMO',auth()->user()->id)->paginate(10);
                     @endphp
                     
                     @if(count($cats) > 0)
                     @foreach ($cats as $cat)
                     {!!Form::open(['action' => 'HmoController@packages', 'method' => 'GET', 'id' => $cat->id, 'style' => 'margin-right:20px;'])!!}
                     {{Form::hidden('id', $cat->id)}}
                     {!!Form::close()!!} <a href="javascript:{}" onclick="document.getElementById({{$cat->id}}).submit();">

                     <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card widget-profile pat-widget-profile">
                           <div class="card-body">
                              <div class="pro-widget-content">
                                 <div class="profile-info-widget"> 
                                    <a class="booking-doc-img">
                                       <img src="{{ URL::to('img/hmo/cat/'.$cat->img)}}" alt="product-image" >
                                    </a>
                                    <div class="profile-det-info">
                                       <h3><a>{{$cat->name}} </a></h3>
                                       
                                       <div class="patient-details">
                                          <h5><b> Packages :</b> {{App\HMO::where('cat_id',$cat->id)->count()}}</h5>
                                          <!--<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alabama, USA</h5>-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="patient-info">
                                 <ul>
                                    <li>Phone <span>{{$type->cc.$type->p_number}}</span></li>
                                    <li>Age <span>{{\Carbon\Carbon::parse($type->age)->diff(\Carbon\Carbon::now())->format('%y')}} Years, {{$type->gender}}</span></li>
                                    <!--<li>Blood Group <span>AB+</span></li>-->
                                    <li>
                                       Actions
                                       <span>
                                          <div class="dropdown">
                                             <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Click Here </a>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item">
                                                   {!!Form::open(['action' => 'HmoController@create', 'method' => 'GET'])!!}
                                                   {{Form::hidden('id', $cat->id)}} 
                                                   {!!Form::close()!!}
                                                </a>
                                                <a class="dropdown-item"> 
                                                 <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit category details"><a href="packages/{{$cat->id}}/edit"><i class="fas fa-edit"></i> Edit Category</a></button>
                                                 
                                                </a> 
                                                <a class="dropdown-item"> 
                                                   {!!Form::open(['action' => 'HmoController@destroy_cat', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                   {{Form::hidden('id', $cat->id)}}
                                                   <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Category"><i class="fa fa-trash-o"></i></button>
                                                   
                                                   {!!Form::close()!!}
                                                </a> 
                                             </div>
                                          </div>
                                       </span>
                                    </li>
                                 </ul>
                           </div>
                        </div>
                     </div>
               
               </div>
               @endforeach 
                   @else 
                        <p>Your Products does not have any category yet.</p>  
                  </div>
                 @endif
                  </div> 
               </div> 
               @endif


               @if (auth()->user()->role == 'Admin')
               <div class="">
                @include('inc.messages')
                                    
                  <div class="row">
                     <div class="col-lg-12">
                        @include('inc.messages')
                        <div class="card"> 
                           <div class="card-header"> 
                              <h4 class="card-title"><b>Welcome Admin</b> </h4>  
                              <small>MedicPin as of {{Carbon\Carbon::now()}}</small>
                           </div>
                        </div>
                        <div class="row">
                           <style>
                              
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg1 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #009efb;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg2 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #55ce63;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg3 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #7a92a3;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg4 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #ffbc35;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg5 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #fd6df6;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg6 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #484bf3;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg7 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background:#5bade7;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg8 {
                        width: 55px;
                        float: left;
                        color: #fff;
                        display: block;
                        font-size: 20px;
                        text-align: center;
                        line-height: 55px;
                        background: #7fff35;
                        border-radius: 50%;
                        font-size: 30px;
                        height: 55px;
                     }
                     .dash-widget {
                        background-color: #fff;
                        border-radius: 4px;
                        margin-bottom: 30px;
                        padding: 20px 20px;
                        position: relative;
                        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
                     }
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg1 i.fa,
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg2 i.fas,
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg3 i.fa,
                     div.col-md-6.col-sm-6.col-lg-6.col-xl-3 span.dash-widget-bg4 i.fa{
                        padding-top: 10px;
                     }
                     .dash-widget-info{
                        float: right;
                        margin-left: 25px;
                     }
                     .dash-widget-info.last{
                        float: right;
                        margin-left: 0px;
                     }
                     .dash-widget-info > h3 {
                        font-size: 24px;
                        font-weight: 500;
                        margin-bottom: 0.5rem;
                     }
                     .dash-widget-info span i {
                        width: 16px;
                        background: #fff;
                        border-radius: 50%;
                        color: #666666;
                        font-size: 9px;
                        height: 16px;
                        line-height: 16px;
                        text-align: center;
                        margin-left: 5px;
                     }
                     .dash-widget-info > span.widget-title1 {
                        background: #009efb;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title2 {
                        background: #55ce63;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title3 {
                        background: #7a92a3;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title4 {
                        background: #ffbc35;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title5 {
                        background: #fd6df6;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title6 {
                        background: #484bf3;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title7 {
                        background: #5bade7;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                     .dash-widget-info > span.widget-title8 {
                        background: #7fff35;
                        color: #fff;
                        padding: 5px 10px;
                        border-radius: 4px;
                        font-size: 13px;
                     }
                           </style>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                             <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                             <div class="dash-widget-info text-right">
                                <h3>{{App\User::where('role', 'Doctor')->count()}}</h3>
                                <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                             </div>
                                </div>
                            </div>          
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg2"><i class="fas fa-user"></i></span>
                                    <div class="dash-widget-info text-right">
                                        <h3>{{ App\User::where('role', 'Nurse')->count()}}</h3>
                                        <span class="widget-title2">Nurses <i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info text-right">
                                        <h3>{{ App\User::where('role', 'Patient')->count()}}</h3>
                                        <span class="widget-title3">Patients<i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info last text-right">
                                        <h3>{{ App\User::where('role', 'Pharmacist')->count()}}</h3>
                                        <span class="widget-title4">Pharmacists<i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg5"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info last text-right">
                                        <h3>{{ App\User::where('role', 'Organization')->count()}}</h3>
                                        <span class="widget-title5">Organizations<i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg6"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info last text-right">
                                        <h3>{{ App\User::where('role', 'HMO')->count()}}</h3>
                                        <span class="widget-title6">HMO<i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg7"><i class="fas fa-institution" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info text-right">
                                        <h3>{{ App\hospitals::count()}}</h3>
                                        <span class="widget-title7">Hospitals<i class="fa fa-check" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="dash-widget">
                                    <span class="dash-widget-bg8"><i class="fas fa-users" aria-hidden="true"></i></span>
                                    <div class="dash-widget-info last text-right">
                                        <h3>{{ App\User::count()}}</h3>
                                        <span class="widget-title8">Total Users<i class="fa fa-check" aria-hidden="true"></i></span>
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
                     <div class="col-lg-12" style="margin-top: 40px;">
                                  
                        <div class="card">
                         <div class="card-header"> 
                              <h4 class="card-title"><b>Users List</b> </h4> 
                         </div>
                         @php
                             $users = App\User::orderBy('created_at', 'desc')->paginate(10);
                         @endphp
                         <div class="card-body">
                            <div class="table-responsive">
                               @if (count($users) > 0)
                               <table class="table table-hover table-center">
                                  <thead>
                                     <tr>
                                      <th>MedicPin</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Gender</th>
                                        <th>Action</th>
      
                                     </tr>
                                  </thead>
                                  <tbody>
                                     @foreach ($users as $user)
                                     <tr>
                                        <td>{{$user->pin}}</td>
                                        <td>{{$user->name}}</td>
                                       <td>{{$user->role}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>
                                          <div class="dropdown">
                                             <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                             <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item">
                              
                                                 {!!Form::open(['action' => 'HomeController@status_change', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                 @if ($user->status == 'Active')
                                                 {{Form::hidden('pin', $user->pin)}}
                                                 {{Form::hidden('status', 'Suspended')}}
                                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Suspend User"><i class="la la-user-nurse"></i>Suspend User</button>
                                                
                                                     
                                                 @else
                                                 {{Form::hidden('pin', $user->pin)}}
                                                 {{Form::hidden('status', 'Active')}}
                                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Activate User"><i class="la la-user-nurse"></i>Activate User</button>
                                                
                                                     
                                                 @endif
                                                 {!!Form::close()!!}
                                                </a>
                                                
                                             </div>
                                          </div>
                                            
                                        </td>
                                     </tr>
                                    
                                     @endforeach
                                  </tbody>
                               </table>
                                   
                             <div class="col-md-6">
                                 <div style="text-align:right;">
                                         <!-----The pagination link----->
                                         {{$users->links()}}
                                 </div>
                             </div>
                                 @else
                                 <p>No Record Found</p>   
                               @endif
      
                         </div>
                      </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-lg-12" style="margin-top: 40px;">
                                  
                        <div class="card">
                         <div class="card-header"> 
                              <h4 class="card-title"><b>Hospitals List</b> </h4> 
                         </div>
                         @php
                             $hospitals = App\hospitals::orderBy('created_at', 'desc')->paginate(10);
                         @endphp
                         <div class="card-body">
                            <div class="table-responsive">
                               @if (count($hospitals) > 0)
                               <table class="table table-hover table-center">
                                  <thead>
                                     <tr>
                                      <th>Created By</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
      
                                     </tr>
                                  </thead>
                                  <tbody>
                                     @foreach ($hospitals as $hospital)
                                     <tr>
                                        <td>{{$hospital->user_pin}}</td>
                                        <td>{{$hospital->h_name}}</td>
                                       <td>{{$hospital->h_number}}</td>
                                        <td>{{$hospital->h_add}}</td>
                                     </tr>
                                    
                                     @endforeach
                                  </tbody>
                               </table>
                                   
                             <div class="col-md-6">
                                 <div style="text-align:right;">
                                         <!-----The pagination link----->
                                         {{$hospitals->links()}}
                                 </div>
                             </div>
                                 @else
                                 <p>No Record Found</p>   
                               @endif
      
                         </div>
                      </div>
                        </div>
                     </div>
                  </div>
               </div>
                     
                   
                  @endif
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
			<!-- /Page Content -->
     <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
     <script>
        CKEDITOR.replace( 'question' );
     </script> 
     <!-- Wrapper -->
@endsection