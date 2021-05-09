@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Hospital</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Hospital</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
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
       <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
           <div class="dash-widget">
        <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
        <div class="dash-widget-info text-right">
           <h3>{{App\HospitalDoctors::where('h_id', $hospital->id)->count()}}</h3>
           <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
        </div>
           </div>
       </div>
       @php
           $doc = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_name');
          
             $patients = App\patients::whereIn('doctor', $doc)->count();
             $patients_admitted = App\patients::whereIn('doctor', $doc)->where('status', 'Admitted')->count();
             $patients_discharged = App\patients::whereIn('doctor', $doc)->where('status', 'Discharged')->count();
          
           
       @endphp                   
       <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
           <div class="dash-widget">
               <span class="dash-widget-bg2"><i class="fas fa-user"></i></span>
               <div class="dash-widget-info text-right">
                   <h3>{{$patients}}</h3>
                   <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
               </div>
           </div>
       </div>
       <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
           <div class="dash-widget">
               <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
               <div class="dash-widget-info text-right">
                   <h3>{{ App\User::where('h_id', $hospital->id)->where('role', 'Nurse')->count()}}</h3>
                   <span class="widget-title3">Nurses<i class="fa fa-check" aria-hidden="true"></i></span>
               </div>
           </div>
       </div>
       <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
           <div class="dash-widget">
               <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
               <div class="dash-widget-info last text-right">
                   <h3>{{ App\User::where('h_id', $hospital->id)->where('role', 'Pharmacist')->count()}}</h3>
                   <span class="widget-title4">Pharmacists<i class="fa fa-check" aria-hidden="true"></i></span>
               </div>
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
					  <a href="#">{{$hospital->h_name}}<span class="d-block text-info">{{$hospital->h_type}} Hospital</span></a>
					</h2>
				   </td>
				  <td class="text-right">
					<div class="table-action">
						@if ($hospital->user_id == auth()->user()->id)
						<a href="../create_ward" class="btn btn-sm" >
						  <button class="btn bg-info-light btn-sm">Create Ward</button>
						</a>
						<a class="btn btn-sm">
							
                            {!!Form::open(['action' => 'HospitalController@add_staff', 'method' => 'POST'])!!}
                           
                            {{Form::hidden('id', $hospital->id)}}
                            <button type="submit" class ="btn bg-info-light btn-sm" >Add Staff</button>
                           
                            {!!Form::close()!!}
						</a>
						<a href="" class="btn btn-sm">
							
							{!!Form::open(['action' => 'HospitalController@destroyy', 'method' => 'POST'])!!}
                            
							{{Form::hidden('id', $hospital->id)}}
							<button type="submit" class ="btn bg-info-light btn-sm" >Delete Hospital</button>
						   
							{!!Form::close()!!}
						</a>
						<a href="" class="btn btn-sm">
							{!!Form::open(['action' => 'HospitalController@set_fee', 'method' => 'POST'])!!}
						   
							{{Form::hidden('id', $hospital->id)}}
							<button class ="btn bg-info-light btn-sm" type="submit">Set Service Fees</button>
					   
							{!!Form::close()!!}
						</a>
						<a class="btn bg-info-light btn-sm" href="../hospitals/{{$hospital->id}}/edit">Edit Hospital Details</a>
						
						@endif
						<a class="btn btn-sm">
                            {!!Form::open(['action' => 'HospitalController@doctors', 'method' => 'POST'])!!}
                           
                            {{Form::hidden('id', $hospital->id)}}
                            <button type="submit" class ="btn bg-info-light btn-sm" >Staff List</button>
                           
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
		  
		  <div class="row" style="margin-top: 20px; margin-bottom:20px;">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title d-inline-block">New Patients </h4> <!--<a href="patients.html" class="btn btn-primary float-right">View all</a>-->
					</div>
					@php
						$doc = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_name');
					   
						  $users = App\patients::whereIn('doctor', $doc)->paginate(100);
					   
						
					@endphp  
					<div class="card-block">
						<div class="table-responsive">
							@if (count($users) > 0)
								<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
								<tr>
									<th>Name</th>
									<th>Age</th>
									<th>Address</th>
									<th>Phone</th>
									<th>Email</th>
									<!--<th class="text-right">Action</th>--->
								</tr>
							</thead>
								<tbody> 
									<style>
										
										.table.dataTable td {
											font-size: 13px !important;
										}
									</style>
									@foreach ($users as $user)
									@php
										$user_detail = App\User::where('pin', $user->pin)->first();
									@endphp
									<tr>
										@if (!empty($user_detail))
										<td><img width="28" height="28" src="../img/profile/{{$user_detail->img}}" class="rounded-circle m-r-5" alt=""> {{$user->name}}</td>
										@else
											
										<td>{{$user->name}}</td>
									
										@endif
									<td>{{\Carbon\Carbon::parse($user->age)->diff(\Carbon\Carbon::now())->format('%y Yrs')}}</td>
									<td>{{$user->address}}</td>
									<td>+{{$user->cc . $user->phone}}</td>
									<td>{{$user->email}}</td>
									<!--
									<td class="text-right">
										<div class="dropdown dropdown-action">
											<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
											</div>
										</div>
									</td>--->
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
			<div class="col-md-12">
				<div class="card" style="margin-bottom: 0">
					<div class="card-header">
				<div class="hospital-barchart">
					<h4 class="card-title d-inline-block">Hospital Management</h4>
				</div>
			  </div>
			</div>
				<style>
			div.container.css{
				
				background-color: #ffbc35;
				padding-left: 0;
				padding-right: 0;
			}		
 .skills{
    text-align: right;
    line-height: 30px;
    color: white;
    background-color: #009efb;
}
p.pad{
	margin-bottom: 0;
	padding-bottom: 0;
	padding-top: 5px;
}
				</style>
				@php
				$doc = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_name');
				$doc_pins = App\HospitalDoctors::where('h_id', $hospital->id)->pluck('doctor_pin');
				   $total = App\patients::whereIn('doctor', $doc)->count();
				  $new_patients = App\patients::whereIn('doctor', $doc)->where('created_at', '<', now()->month)->count();
				  $patients_admitted = App\patients::whereIn('doctor', $doc)->where('status', 'Admitted')->count();
				  $percentage_admitted = $patients_admitted/$total * 100;
				  $patients_discharged = App\patients::whereIn('doctor', $doc)->where('status', 'Discharged')->count();
				  $percentage_discharged = $patients_discharged/$total * 100;
				  $total_ops_successful = App\Operations::whereIn('addedBy_pin', $doc_pins)->where('status', 'Successful')->count();
				  $total_ops = App\Operations::whereIn('addedBy_pin', $doc_pins)->count();
				  $percentage_ops = $total_ops_successful/$total_ops * 100;
					$total_tests = App\Laboratories::whereIn('created_by', $doc_pins)->count();
					$percentage_test = $total_tests/100;
					$doc_patients = App\patients::where('doc_email', auth()->user()->email)->count();
					if ($total == '0') {
					  $percentage = 0;
					} else {
					  $percentage_patients = $new_patients/$total * 100;
					}
					
					
				@endphp
				<p class="pad">New Patients</p>
				<div class="container css">
					<div class="skills css" style="width: {{$percentage_patients}}%">{{$percentage_patients}}%</div>
				</div>
				<p class="pad">Successful Operations</p>
				<div class="container css">
					<div class="skills boot" style="width: {{$percentage_ops}}%">{{$percentage_ops}}%</div>
				</div>
				<p class="pad">Laboratory Test</p>
				<div class="container css">
					<div class="skills php" style="width: {{$percentage_test}}%">{{$percentage_test}}%</div>
				</div>
			
				<p class="pad">Admitted Patients</p>
				<div class="container css">
					<div class="skills git" style="width: {{$percentage_admitted}}%">{{$percentage_admitted}}%</div>
				</div>
				<p class="pad">Discharged Patients</p>
				<div class="container css">
					<div class="skills git" style="width: {{$percentage_discharged}}%">{{$percentage_discharged}}%</div>
				</div>
			 </div>
			
	   </div>
	   <div class="row">
		   <div class="col-md-12">
			   <div class="card">
				   <div class="card-header">
					   <h4 class="card-title d-inline-block">Operations</h4> 
					   @if (auth()->user()->role == 'Doctor')
					   <a href="../add_op" class="btn btn-primary float-right">Add New Entry</a>
					   @endif
				   </div>
				   <div class="card-body p-0"> 
					   @if (count($operations) > 0)
					   <div class="table-responsive">
						   <table class="table mb-0">
								   <tr>
									   <th>Patient Name</th>
									   <th>Doctor Name</th>
									   <th>Date Of Operation</th>
									   <th>Report</th>
									   <th>Diseases</th>
									   <th class="text-right">Status</th>
								   </tr>
							   </thead>
							   <tbody>
								@foreach ($operations as $operation)
								@php
								$patient = App\User::where('pin', $operation->patient_pin)->first();
								$doc1 = App\User::where('pin', $operation->doc_1)->first();
								$doc2 = App\User::where('pin', $operation->doc_2)->first();
								$doc3 = App\User::where('pin', $operation->doc_3)->first();
								$doc4 = App\User::where('pin', $operation->doc_4)->first();
								$doc5 = App\User::where('pin', $operation->doc_5)->first();
									
								@endphp
								   <tr>
									   <td style="min-width: 200px;">
										   <h2><a href="">{{$patient->name}} <span>{{$patient->pin}}</span></a></h2>
									   </td>                 
									   <td>
										   <h5 class="time-title p-0">Team Lead</h5>
										   <p>Dr. {{$doc1->name}}</p>
									   </td>
									   <td>
										   <h5 class="time-title p-0">Operation Date</h5>
										   <p>{{$operation->created_at}}</p>
									   </td>
									   <td>
										   <h5 class="time-title p-0">Operation Report</h5>
										   <p><a href="../img/reports/{{$operation->report}}" style="text-decoration: none;" download="{{$operation->report}}"><i class="ri-file-pdf-line font-size-16 text-danger"> Download Report</i></a></p>
									   </td>
									   <td>
										   <h5 class="time-title p-0">Ailment</h5>
										   <p>{{$operation->disease}}</p>
									   </td>
									   <td class="text-right">
										   <a href="" class="btn btn-outline-primary take-btn">{{$operation->status}}</a>
									   </td>
								   </tr>
								   @endforeach
							   </tbody>
						   </table>
					   </div>
					   @else 
					   <p>No Record Yet</p>
						   
					   @endif
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

<!-- Footer 
<footer class="bg-white iq-footer">
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
Footer END -->
@endsection