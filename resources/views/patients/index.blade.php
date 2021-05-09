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
                  <li class="breadcrumb-item active" aria-current="page">Medical Record History</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Medical Record History for </h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
  @if (auth()->user()->role == 'Patient')
  <div class="card">
     <div class="card-header"> 
        <h4 class="card-title">Your Medical Record</h4>
        <small>Most Recent Record Dated {{$record->created_at}}</small> 
     </div>
  </div>
  <div class="card">
     <div class="card-header">
        <h4 class="card-title"><b>Your Bio Vitals</b></h4> 
     </div>
     <div class="card-body">
       <div class="row">
         <div class="col-md-4">
      <div class="widget awards-widget">
        <h4 class="widget-title"></h4>
        <div class="experience-box">
          <ul class="experience-list">
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Genotype</span>
                  @if ($gen->genotype == '')
                  <h2>N/A</h2>
                  @else
                  <h2>{{$gen->genotype}}</h2>
                  @endif
                </div>
              </div>
            </li>
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Blood Group</span>
                  @if ($bg->b_group == '')
                  <h2>N/A</h2>
                  @else
                  <h2>{{$bg->b_group}}</h2>

                  @endif
                </div>
              </div>
            </li> 
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Weight</span>
                  @if ($weight->weight == '')
                  <h2>N/A</h2>
                   @else
                   <h2>{{$weight->weight}}kg</h2>
                  @endif
                </div>
              </div>
            </li> 
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Blood Pressure</span>
                  @if ($record->bp == '')
                      
                  <h2>
                     N/A
                 </h2>
                 @else
                 
                 <h2>
                     {{$record->bp}}
                 </h2>
                  @endif
                </div>
              </div>
            </li> 
          </ul>
        </div>
      </div>
           
    </div>
    <div class="col-md-4">
 <div class="widget awards-widget">
   <h4 class="widget-title"></h4>
   <div class="experience-box">
     <ul class="experience-list">
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Temperature</span>
            @if ($record->temp == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->temp}}
            </h2>
            @endif
           </div>
         </div>
       </li>
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">FBS/RBS</span>
            @if ($record->fbs_rbs == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->fbs_rbs}}
            </h2>
            @endif
           </div>
         </div>
       </li> 
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Height</span>
           @if ($record->height == '')
               
           <h2>
              N/A
          </h2>
          @else
           <h2>
               {{$record->height}}cm
           </h2>
           @endif
           </div>
         </div>
       </li> 
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Glucose Level</span>
            @if ($record->glucose == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->glucose}}
            </h2>
            @endif
           </div>
         </div>
       </li> 
     </ul>
   </div> 
  </div>
       
</div>
 <div class="col-md-4">
<div class="widget awards-widget">
<h4 class="widget-title"></h4>
<div class="experience-box">
  <ul class="experience-list">
    <li>
      <div class="experience-user">
        <div class="before-circle"></div>
      </div>
      <div class="experience-content">
        <div class="timeline-content">
          <span class="font-size-14">General Note</span>
          @if ($record->note == '')
              
          <h2>
            
             N/A
         </h2>
         @else
          <h6>
            <b>
              {!!$record->note!!}
            </b>
          </h6>
          @endif
        </div>
      </div>
    </li> 
  </ul>
</div>
</div>

  </div>
  </div> 
</div>
  </div>
  @endif
   <div class="card">
      <div class="card-header">
        @if (auth()->user()->role == 'Doctor' || auth()->user()->role == 'Nurse')
         <h4 class="card-title">Patient Medical Record</h4>
         <small>Most Recent Record Dated {{$record->created_at}}</small>
         @endif
         @if (auth()->user()->role == 'Pharmacist')
          <h4 class="card-title">Prescription(s)</h4>
          <small>Most Recent Record Dated {{$record->created_at}}</small>
          @endif
      </div>
   </div>
   @if (auth()->user()->role == 'Pharmacist')
   @php
       $recrds = App\Prescriptions::where('patient_pin', $record->pin)->where('status', '!=', 'Pending')->paginate(10);
  
       $records = App\Prescriptions::where('patient_pin', $record->pin)->whereDay('created_at', now()->day)->where('status', 'Pending')->orderby('created_at','desc')->get();
   @endphp
   <div class="card card-table mb-0">
    <div class="card-header">
       <h4 class="card-title"><b>Today's Prescription</b></h4>
    </div>
          <div class="card-body">
            @if (count($records) >0)
            <div class="table-responsive">
              <table class="table table-hover table-center mb-0">
                <thead>
                  <tr>
                    <th>Prescribed By</th>
                    <th>Drug Name</th>
                    <th>Dosage</th>
                    <th>Frequency</th>
                    <th class="text-center">Action(s)</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($records as $record)
                    <tr>
                    <td>
                      @php
                          $prescribed_by = App\User::where('pin', $record->prescribed_by)->first();
                      @endphp 
                      <h2 class="table-avatar">
                        <a href="" class="avatar avatar-sm mr-2">
                          <img class="avatar-img rounded-circle" src="img/profile/{{$prescribed_by->img}}" alt="User Image">
                        </a>
                        <a >Dr. {{$prescribed_by->name}} <span>{{$prescribed_by->expertise}}</span></a>
                      </h2>
                    </td>
                        @if ($record->drug !== NULL && $record->drug !== 'select')
                        @php
                            $drug_main = App\pharmacy::where('id', $record->drug)->first();
                        @endphp
                    <td>{{$drug_main->name}}</td>
                    <td>{{$record->dosage}}</td>
                    <td>{{$record->frequency}}</td>
                    <td>
                      {!!Form::open(['action' =>['PrescriptionController@update',$record->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                      {{Form::hidden('id', $record->id)}}
                      <button type="submit" class ="badge badge-pill bg-success-light" data-toggle="tooltip" data-placement="top" data-original-title="Sell Drug"><i class="la la-bezier-curve"></i>Mark Drug As Sold</button>
                      
                      {{Form::hidden('_method', 'PUT')}}
                      {!!Form::close()!!}
                    </td>
                    <td class="text-right">
                      <div class="table-action">
                        {!!Form::open(['action' => 'PrescriptionController@NA', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                        {{Form::hidden('id', $record->id)}}
                        <button type="submit" class ="badge badge-pill bg-danger-light" data-toggle="tooltip" data-placement="top" data-original-title="Drug Not Available"><i class="ri-delete-bin-6-fill mr-2"></i>Drug Not Available</button>
                        
                        {!!Form::close()!!} 
                      </div>
                    </td>
                    @endif
                </tr>
              
                @endforeach           
        </tbody>
      </table>
            </div>
            
            @else
            
                <p class="text-center" style="padding:10px;">No Prescription For Patient Today, Check Prescription History.
              </p> 
            @endif
          </div>
          </div>
          <div class="card card-table mb-0" style="margin-top: 10px;">
            <div class="card-header">
               <h4 class="card-title"><b>Prescription History</b></h4>
            </div>
                 <div class="card-body">
                   @if (count($recrds) >0)
                   <div class="table-responsive">
                     <table class="table table-hover table-center mb-0">
                       <thead>
                         <tr>
                           <th>Prescribed By</th>
                           <th>Drug Name</th>
                           <th>Dosage</th>
                           <th>Frequency</th>
                           <th>Status</th>
                         </tr>
                       </thead>
                       <tbody>
                         @foreach ($recrds as $recrd)
                           <tr>
                           <td>
                             @php
                                 $prescribed_by = App\User::where('pin', $recrd->prescribed_by)->first();
                             @endphp 
                             <h2 class="table-avatar">
                               <a href="" class="avatar avatar-sm mr-2">
                                 <img class="avatar-img rounded-circle" src="img/profile/{{$prescribed_by->img}}" alt="User Image">
                               </a>
                               <a >Dr. {{$prescribed_by->name}} <span>{{$prescribed_by->expertise}}</span></a>
                             </h2>
                           </td>
                               @if ($recrd->drug !== NULL && $recrd->drug !== 'select')
                               @php
                                   $drug_main = App\pharmacy::where('id', $recrd->drug)->first();
                               @endphp
                           <td>{{$drug_main->name}}</td>
                           <td>{{$recrd->dosage}}</td>
                           <td>{{$recrd->frequency}}</td>
                           <td>  
                            {{$recrd->status}}
                           </td>
                           @endif
                       </tr>
                     
                       @endforeach           
               </tbody>
             </table>
                   </div>
                   <div class="col-md-6">
                       <div style="text-align:right;">
                               <!-----The pagination link----->
                               {{$recrds->links()}}
                       </div>
                     </div> 
                   @else 
                       <p class="text-center" style="padding:10px;">No Prescription History for This Patient.
                     </p> 
                   @endif
                 </div>
                 </div>
        </div> 
      </div>
    @endif
  @if (auth()->user()->role == 'Doctor' || auth()->user()->role == 'Nurse')
  <div class="card">
     <div class="card-header">
        <h4 class="card-title"><b>Patient Bio Vitals</b></h4>
        @if (auth()->user()->role == 'Nurse' || auth()->user()->role == 'Doctor')
        
               {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'GET', 'class' => 'card-title', 'style' => 'margin-top:0px; padding-top:0px;'])!!}
               {{Form::hidden('pin', $record->pin)}}
               <button type="submit" class ="btn bg-primary-light btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record">Add New Record </button>
              
               {!!Form::close()!!}
               
            @endif    
     </div>
     <div class="card-body">
       <div class="row">
         <div class="col-md-4">
      <div class="widget awards-widget">
        <h4 class="widget-title"></h4>
        <div class="experience-box">
          <ul class="experience-list">
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Genotype</span>
                  @if ($gen->genotype == '')
                  <h2>N/A</h2>
                  @else
                  <h2>{{$gen->genotype}}</h2>
                  @endif
                </div>
              </div>
            </li>
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Blood Group</span>
                  @if ($bg->b_group == '')
                  <h2>N/A</h2>
                  @else
                  <h2>{{$bg->b_group}}</h2>

                  @endif
                </div>
              </div>
            </li> 
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Weight</span>
                  @if ($weight->weight == '')
                  <h2>N/A</h2>
                   @else
                   <h2>{{$weight->weight}}kg</h2>
                  @endif
                </div>
              </div>
            </li> 
            <li>
              <div class="experience-user">
                <div class="before-circle"></div>
              </div>
              <div class="experience-content">
                <div class="timeline-content">
                  <span class="font-size-14">Blood Pressure</span>
                  @if ($record->bp == '')
                      
                  <h2>
                     N/A
                 </h2>
                 @else
                 
                 <h2>
                     {{$record->bp}}
                 </h2>
                  @endif
                </div>
              </div>
            </li> 
          </ul>
        </div>
      </div>
           
    </div>
    <div class="col-md-4">
 <div class="widget awards-widget">
   <h4 class="widget-title"></h4>
   <div class="experience-box">
     <ul class="experience-list">
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Temperature</span>
            @if ($record->temp == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->temp}}
            </h2>
            @endif
           </div>
         </div>
       </li>
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">FBS/RBS</span>
            @if ($record->fbs_rbs == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->fbs_rbs}}
            </h2>
            @endif
           </div>
         </div>
       </li> 
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Height</span>
           @if ($record->height == '')
               
           <h2>
              N/A
          </h2>
          @else
           <h2>
               {{$record->height}}cm
           </h2>
           @endif
           </div>
         </div>
       </li> 
       <li>
         <div class="experience-user">
           <div class="before-circle"></div>
         </div>
         <div class="experience-content">
           <div class="timeline-content">
            <span class="font-size-14">Glucose Level</span>
            @if ($record->glucose == '')
                
            <h2>
               N/A
           </h2>
           @else
            <h2>
                {{$record->glucose}}
            </h2>
            @endif
           </div>
         </div>
       </li> 
     </ul>
   </div> 
  </div>
       
</div>
 <div class="col-md-4">
<div class="widget awards-widget">
<h4 class="widget-title"></h4>
<div class="experience-box">
  <ul class="experience-list">
    <li>
      <div class="experience-user">
        <div class="before-circle"></div>
      </div>
      <div class="experience-content">
        <div class="timeline-content">
          <span class="font-size-14">General Note</span>
          @if ($record->note == '')
              
          <h2>
            
             N/A
         </h2>
         @else
          <h6>
            <b>
              {!!$record->note!!}
            </b>
          </h6>
          @endif
        </div>
      </div>
    </li> 
  </ul>
</div>
</div>

  </div>
  </div>
  @if (auth()->user()->role == 'Nurse')
  <a href="./schedule/create" data-toggle="collapse" class="btn btn-primary">Schedule Doctor Visit</a>
  @endif
  @if (auth()->user()->role == 'Doctor')
  <a href="#test" data-toggle="collapse" class="btn bg-primary-light">Patient Laboratory Tests</a>
  <a href="#appointments" data-toggle="collapse" class="btn bg-primary-light">Book Appointment With Patient</a>
  <a href="#add" data-toggle="collapse" class="btn bg-primary-light">Admission History</a>
  <a href="#records" data-toggle="collapse" class="btn bg-primary-light">See Past Records</a>
  @endif  
</div>
  </div>
  <div class="card collapse" id="records">
    @php
        
        $records = App\Records::where('pin', $record->pin)->orderBy('created_at', 'desc')->get();
    @endphp       
     <div class="card-header">
        <h4 class="card-title"><b>Past Medical Records</b></h4>
     </div>
     <div class="card-body">
      @if (count($records) >0)
      <div class="table-responsive">
        <table class="table table-hover table-center mb-0">
          <thead>
            <tr>
              <th>Date</th>
              <th>Temperature</th>
              <th>BP</th>
              <th>FBS/RBS</th>
              <th>Genotype</th>
              <th>Blood Group</th>
              <th>Weight</th>
              <th>Height</th>
              <th>Glucose Level</th>
              <th>Note</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($records as $record)
                <tr>
                   <td class="text-center">{{$record->created_at}}</td>
                   <td>{{$record->temp}}</td>
                   <td>{{$record->bp}}</td>
                   <td>{{$record->fbs_rbs}}</td>
                   <td>{{$record->genotype}}</td>
                   <td>{{$record->b_group}}</td>
                   <td>{{$record->weight}}</td>
                   <td>{{$record->height}}</td>
                   <td>{{$record->glucose}}</td>
                   <td>{!!$record->note!!}</td>
                </tr> 
            @endforeach  
  </tbody>
</table>
      </div>
      @else
      <p>No Record Found</p>    
      @endif
     </div>
  </div>
<div class="card collapse" id="test">
  @php
      $tests = App\Lab::where('patient_pin', $record->pin)->where('status', 'Done')->orderby('created_at','desc')->get();
  @endphp
   <div class="card-header">
      <h4 class="card-title"><b>Past Laboratory Tests</b></h4>
   </div>
   <div class="card-body">
    @if (count($tests) > 0)
    <div class="table-responsive">
      <table class="table table-hover table-center mb-0">
        <thead>
          <tr>
            <th>Date</th>
            <th>Test(s)</th>
            <th>Requested By</th>
            <th>Status</th>
            <th>Report</th>
            <th>carriedout_by</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tests as $test)
             <tr>
                <td class="text-center">{{$test->created_at}}</td>
                <td>
                    {{$test->test_name}}
               </td>
                <td>Dr. {{$test->doc_name}}</td>
                <td>{{$test->status}}</td>
                <td><a href="../img/lab_report/{{$test->report}}" style="text-decoration: none;" download="{{$test->report}}"><i class="ri-file-pdf-line font-size-16 text-danger"> Download Report</i></a></td>
                
                @if ($test->carriedout_by == '')
                <td>N/A</td>
                    
                @else
                @php
                    $name = App\User::where('pin', $test->carriedout_by)->first();
                @endphp
                <td>{{$name->name}}</td>
                @endif
             </tr> 
             @endforeach  
</tbody>
</table>
    </div>
    @else
    <p>No Record Found</p>    
    @endif
   </div>
</div> 

<div class="card collapse" id="appointments">
   <div class="card-header">
      <h4 class="card-title"><b>Book Appointment With Patient</b></h4>
   </div>
   <div class="card-body">
    {!! Form::open(['action' => 'AppointmentsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
  **/ !!}
                      
             <div class="row">
               <div class="col-md-6">
                <div class="form-group form-focus">
                   <div class="inner-addon right-addon">
                      <i class="fa fa-user"></i>
                   <input type="text" class="form-control floating" id="patient" name="patient" value="{{$record->pin}}">
                   </div>
                   <label for="with" class="focus-label">With?</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-focus">
                   <div class="inner-addon right-addon">
                      <i class="fa fa-date"></i>
                   <input type="date" class="form-control floating" name="date" id="date" placeholder="Date of Appointment....">
                   </div>
                   <label for="add" class="focus-label">Date</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-focus">
                   <div class="inner-addon right-addon">
                      <i class="fa fa-clock"></i>
                   <input type="time" class="form-control floating" id="time" name="time" placeholder="Time of Appointment....">
                   </div>
                   <label for="mobno" class="focus-label">Time</label>
                </div>
              </div>
             </div>
          <button type="submit" class="btn btn-primary">Book</button>
          {!! Form::close() !!}
   </div>
</div>
<div class="card collapse" id="add">
  @php
      $admits = App\Admission::where('patient', $record->pin)->orderby('created_at','desc')->get();
  @endphp
   <div class="card-header">
      <h4 class="card-title"><b>Admission History</b></h4>
   </div>
   <div class="card-body">
    @if (count($admits) > 0)
    <div class="table-responsive">
      <table class="table table-hover table-center mb-0">
        <thead>
          <tr>
            <th>Date</th>
            <th>Reason</th>
            <th>Ward</th>
            <th>Admitted By</th>
          </tr>
        </thead>
        <tbody>@foreach ($admits as $admit)
          <tr>
             <td>{{$admit->created_at}}</td>
             <td>
               {!!$admit->reason!!}
             </td>
             <td>
               {!!$admit->ward!!}
             </td>
             
             @php
                 $name = App\User::where('pin',$admit->admitted_by)->first();
             @endphp
             <td>Dr. {{$name->name}}</td>
          </tr> 
          @endforeach    
</tbody>
</table>
    </div>
    @else
    <p>No Record Found</p>    
    @endif
   </div>
</div>

</div>
</div>
@endif

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