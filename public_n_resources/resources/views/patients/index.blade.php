@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
         <div>
            <div class="">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                        @include('inc.messages')
                         <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                @if (auth()->user()->role == 'Pharmacist')
                                 <h4 class="card-title">Prescription(s)</h4>
                                 <small>Most Recent Record Dated {{$record->created_at}}</small>
                                 @endif
                                 @if (auth()->user()->role == 'Doctor' || auth()->user()->role == 'Nurse')
                                  <h4 class="card-title">Patient Medical Record</h4>
                                  <small>Most Recent Record Dated {{$record->created_at}}</small>
                                  @endif
                             </div>
                             @if (auth()->user()->role == 'Nurse' || auth()->user()->role == 'Doctor')
                             <div class="dropdown">
                                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                <i class="ri-more-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item">
                                    {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $record->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="fa fa-plus"></i>Add New Record </button>
                                   
                                    {!!Form::close()!!}
                                </a>
                                </div>
                             </div>
                                    
                                 @endif    
                            
                               
                         </div>
                         <div class="">
                                @if (auth()->user()->role == 'Pharmacist')
                                @php
                                    $recrds = App\Prescriptions::where('patient_pin', $record->pin)->where('status', '!=', 'Pending')->paginate(10);
                               
                                    $records = App\Prescriptions::where('patient_pin', $record->pin)->whereDay('created_at', now()->day)->where('status', 'Pending')->orderby('created_at','desc')->get();
                                @endphp
                                 <div class="iq-card-body chat-page p-0">
                                    <div class="chat-data-block">
                                    <div>

                                 <div class="">
                                        <div>
                                            <div class="container">
                                                @if (count($records) >0)
                                                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                  <thead>
                                                      
                                                      <tr>
                                                         <th>Drug Name</th>
                                                         <th>Dosage</th>
                                                         <th>Frequency</th>
                                                         <th>Prescribed By</th>
                                                         <th>Action(s)</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($records as $record)
                                                      <tr>
                                                        @if ($record->drug !== NULL && $record->drug !== 'select')
                                                        @php
                                                            $drug_main = App\pharmacy::where('id', $record->drug)->first();
                                                        @endphp
                                                         <td>{{$drug_main->name}}</td>
                                                         <td>{{$record->dosage}}</td>
                                                         <td>{{$record->frequency}}</td>
                                                         @php
                                                             $prescribed_by = App\User::where('pin', $record->prescribed_by)->first();
                                                         @endphp
                                                         <td>Dr. {{$prescribed_by->name}}</td>
                                                         <td>
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                                               <i class="ri-more-fill"></i>
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                               
                                                                <a class="dropdown-item">
                                                                   {!!Form::open(['action' =>['PrescriptionController@update',$record->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                                   {{Form::hidden('id', $record->id)}}
                                                                   <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Sell Drug"><i class="la la-bezier-curve"></i>Mark Drug As Sold</button>
                                                                  
                                                                   {{Form::hidden('_method', 'PUT')}}
                                                                   {!!Form::close()!!}
                                                                </a>
                                                               
                                                               <a class="dropdown-item">
                                                                  {!!Form::open(['action' => 'PrescriptionController@NA', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                                  {{Form::hidden('id', $record->id)}}
                                                                  <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Drug Not Available"><i class="ri-delete-bin-6-fill mr-2"></i>Drug Not Available</button>
                                                                 
                                                                  {!!Form::close()!!}
                                                               </a>
                                                               </div>
                                                            </div>
                                                              
                                                             
                                                        </td>

                                                              @endif
                                                          </tr>
                                                        
                                                          @endforeach           
                                                  </tbody>
                                                </table>
                                                      
                                                @else
                                                
                                                    No Prescription For Patient Today, Check Prescription History.
                                    
                                                @endif
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    </div>
                                   </div>
                                   <p>
                                    <a href="#records" data-toggle="collapse" class="btn btn-primary" style="margin-left: 70px;">See Prescription Record</a>
                                    
                                      <div class="col-md-12 collapse" id="records">
                                          <div class="iq-card shadow-none mb-0">
                                              <div class="iq-card-body p-1">
                                               @if (count($recrds) > 0)
                                               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                 <thead>
                                                     
                                                     <tr>
                                                        <th>Drug Name</th>
                                                        <th>Dosage</th>
                                                        <th>Frequency</th>
                                                        <th>Prescribed By</th>
                                                        <th>Status</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                    @foreach ($recrds as $recrd)
                                                     <tr>
                                                        @if ($recrd->drug !== NULL && $recrd->drug !== 'select')
                                                         <td>{{$recrd->drug}}</td>
                                                         <td>{{$recrd->dosage}}</td>
                                                         <td>{{$recrd->frequency}}</td>
                                                         @php
                                                             $prescribed_by = App\User::where('pin', $recrd->prescribed_by)->first();
                                                         @endphp
                                                         <td>Dr. {{$prescribed_by->name}}</td>
                                                         <td>{{$recrd->status}}</td>

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
                                                      <p>No Record Found</p>    
                                                      @endif
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                @endif







                                @if (auth()->user()->role == 'Patient')
                                 <div class="iq-card-body chat-page p-0">
                                    <div class="chat-data-block">
                                    <div class="row" style="padding-left: 10px;">

                                 <div class="">
                                        <div class="iq-card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Genotype</span>
                                                           @if ($gen->genotype == '')
                                                           <h2>N/A
                                                               <!--<img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" />--> </h2>
                                                           <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                               <div class="iq-progress-bar">
                                                                   <span class="bg-primary" data-percent="0"></span>
                                                               </div>
                                                           </div>
                                                           @else
                                                           <h2>{{$gen->genotype}}
                                                               <!--<img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                               --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                               <div class="iq-progress-bar">
                                                                   <span class="bg-primary" data-percent={{$gen->genotype}}></span>
                                                               </div>
                                                           </div>
                                                           @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Blood Group</span>
                                                            @if ($bg->b_group == '')
                                                            <h2>N/A
                                                            <!--<img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                            --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-success" data-percent="0"></span>
                                                                </div>
                                                            </div>
                                                            @else
                                                            <h2>{{$bg->b_group}}
                                                            <!--<img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                            ---><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-success" data-percent={{$bg->b_group}}></span>
                                                                </div>
                                                            </div>

                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Weight</span>
                                                            @if ($weight->weight == '')
                                                            <h2>N/A
                                                           <!-- <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                           --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-danger" data-percent="0"></span>
                                                                </div>
                                                            </div>
                                                             @else
                                                             <h2>{{$weight->weight}}kg
                                                             <!---<img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                             ---><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                 <div class="iq-progress-bar">
                                                                     <span class="bg-danger" data-percent={{$weight->weight}}></span>
                                                                 </div>
                                                             </div>   
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                      <a href="#allrecords" data-toggle="collapse" class="btn btn-primary">View Full Record</a>
                                      <div class="col-md-12 collapse" id="allrecords">
                                      <div class="row">
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                        <span class="font-size-14">Height</span>
                                                        <h6>
                                                            {{$record->height}}
                                                        </h6>
        
                                                     </div>
                                                  </div>
                                              </div>
                                           </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Oxygen Saturation</span>
                                                            <h6>
                                                                {{$record->oxygen}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Glucose level</span>
                                                            <h6>
                                                                {{$record->glucose}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Respiratory rate</span>
                                                            <h6>
                                                                {{$record->r_rate}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">BMI</span>
                                                            <h6>
                                                                {{$record->BMI}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">General Note</span>
                                                            <h6>
                                                                {{$record->note}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><br>
                                      <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                      <div class="col-md-12 collapse" id="records">
                                          <div class="iq-card shadow-none mb-0">
                                              <div class="iq-card-body p-1">
                                                 <div class="">
                                                  @if (count($records) > 0)
                                                  <div class="col-sm-12 col-md-6">
                                                     <div class="user-list-files d-flex">
                                                         <a href="javascript:void();" class="chat-icon-delete">
                                                           Pdf
                                                         </a>
                                                       </div>
                                                  </div>
                                               </div>
                                               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                 <thead>
                                                     
                                                     <tr>
                                                        <th>Date</th>
                                                        <th>Temperature</th>
                                                        <th>BP</th>
                                                        <th>Heart Rate</th>
                                                        <th>Genotype</th>
                                                        <th>Blood Group</th>
                                                        <th>Weight</th>
                                                        <th>Height</th>
                                                        <th>Oxygen Saturation</th>
                                                        <th>Glucose Level</th>
                                                        <th>Respiratory Rate</th>
                                                        <th>BMI</th>
                                                        <th>Note</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                  @foreach ($records as $record)
                                                     <tr>
                                                        <td class="text-center">{{$record->created_at}}</td>
                                                        <td>{{$record->temp}}</td>
                                                        <td>{{$record->bp}}</td>
                                                        <td>{{$record->h_rate}}</td>
                                                        <td>{{$record->genotype}}</td>
                                                        <td>{{$record->b_group}}</td>
                                                        <td>{{$record->weight}}</td>
                                                        <td>{{$record->height}}</td>
                                                        <td>{{$record->oxygen}}</td>
                                                        <td>{{$record->glucose}}</td>
                                                        <td>{{$record->r_rate}}</td>
                                                        <td>{{$record->BMI}}</td>
                                                        <td>{{$record->note}}</td>
                                                     </tr> 
                                                     @endforeach                      
                                                 </tbody>
                                               </table>
                                            </div>
                                                  <div class="col-md-6">
                                                      <div style="text-align:right;">
                                                              <!-----The pagination link----->
                                                              {{$records->links()}}
                                                      </div>
                                                      @else
                                                      <p>No Record Found</p>    
                                                      @endif
                                                 </div>
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                   <hr>
                                </div>
                                @endif
                                @if (auth()->user()->role == 'Doctor')
                                 <div class="mt-4 pl-3">
                                       <style>
                                          div.col-sm-2 .iq-card.shadow-none.mb-0,
                                          .iq-card-body.p-1{
                                             box-shadow: 0 5px 6px 0 rgba(105, 105, 105, 0.2);

                                          }
                                          li.top{
                                             margin-top: 20px;
                                          }
                                          ul.top{
                                             padding-left: 0;
                                             margin-left: 0;
                                          }
                                          .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h6,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h2{
                                             padding-left: 20px;
                                          }
                                          a.btn.btn-primary{
                                             margin-left: 10px;
                                          }
                                       @media only screen and (max-width: 768px) {
                                          div.col-md-3{
                                             width: 50%;
                                             float: left;
                                             margin-bottom: 30px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0{
                                             width: 150px;
                                             margin-left: 10px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body h6{
                                             padding-left: 20px;
                                          }
                                            
                                            
                                          }
                                       </style>
                                       
                                            <div class="iq-card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                               <span class="font-size-14">Genotype</span>
                                                               @if ($gen->genotype == '')
                                                               <h2>N/A
                                                                   <!---<img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" />---> </h2>
                                                               <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                   <div class="iq-progress-bar">
                                                                       <span class="bg-primary" data-percent="0"></span>
                                                                   </div>
                                                               </div>
                                                               @else
                                                               <h2>{{$gen->genotype}}
                                                                   <!--<img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                                   --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                   <div class="iq-progress-bar">
                                                                       <span class="bg-primary" data-percent={{$gen->genotype}}></span>
                                                                   </div>
                                                               </div>
                                                               @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Blood Group</span>
                                                                @if ($bg->b_group == '')
                                                                <h2>N/A
                                                                <!--<img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                                --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-success" data-percent="0"></span>
                                                                    </div>
                                                                </div>
                                                                @else
                                                                <h2>{{$bg->b_group}}
                                                                <!--<img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                                ---><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-success" data-percent={{$bg->b_group}}></span>
                                                                    </div>
                                                                </div>

                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Weight</span>
                                                                @if ($weight->weight == '')
                                                                <h2>N/A
                                                               <!-- <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                               --><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-danger" data-percent="0"></span>
                                                                    </div>
                                                                </div>
                                                                 @else
                                                                 <h2>{{$weight->weight}}kg
                                                                 <!---<img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                                 ---><div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                     <div class="iq-progress-bar">
                                                                         <span class="bg-danger" data-percent={{$weight->weight}}></span>
                                                                     </div>
                                                                 </div>   
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <p>
                                          @if (auth()->user()->role == 'Doctor')
                                          <a href="#allrecords" data-toggle="collapse" class="btn btn-primary">View Full Current Record</a>
                                          <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                          <a href="#test" data-toggle="collapse" class="btn btn-primary">Patient Laboratory Tests</a>
                                          <a href="#appointments" data-toggle="collapse" class="btn btn-primary">Book Appointment With Patient</a>
                                          <a href="#add" data-toggle="collapse" class="btn btn-primary">Admission History</a>
                                              
                                          @endif
                                          @if (auth()->user()->role == 'Nurse')
                                          <a href="./schedule/create" data-toggle="collapse" class="btn btn-primary">Schedule Doctor Visit</a>
                                          @endif
                                      </p>
                                      <div class="col-md-12 collapse" id="add"> 
                                        <div class="iq-card">
                                          <div class="iq-card-body text-center">
                                             <h5 class="card-title">Admission History</h5>
                                             @include('inc.messages')
                                             @php
                                                 $admits = App\Admission::where('patient', $record->pin)->orderby('created_at','desc')->get();
                                             @endphp
                              
                                             @if (count($admits) > 0)
                                             <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                               <thead>
                                                   
                                                   <tr>
                                                      <th>Date</th>
                                                      <th>Reason</th>
                                                      <th>Ward</th>
                                                      <th>Admitted By</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                @foreach ($admits as $admit)
                                                   <tr>
                                                      <td class="text-center">{{$admit->created_at}}</td>
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
                                                 
                                             @endif
                                          </div>
                                          </div>
                                       </div>


        <div class="col-md-12 collapse" id="test"> 
          <div class="iq-card">
            <div class="iq-card-body text-center">
               <h5 class="card-title">Laboratory Test Request Detail</h5>
               @include('inc.messages')
               @php
                   $tests = App\Lab::where('patient_pin', $record->pin)->where('status', 'Done')->orderby('created_at','desc')->get();
               @endphp

               @if (count($tests) > 0)
               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                        <td>{{$test->doc_name}}</td>
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
                   
               @endif
            </div>
            </div>
         </div>
                                      <div class="col-md-12 collapse" id="appointments">
                                       <div class="iq-card shadow-none mb-0">
                                          {!! Form::open(['action' => 'AppointmentsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                        **/ !!}
                                                            
                                                   <div class="row">
                                                      <div class="form-group col-md-6">
                                                         <label for="with">With?</label>
                                                         <div class="inner-addon right-addon">
                                                            <i class="fa fa-user"></i>
                                                         <input type="text" class="form-control" id="patient" name="patient" value="{{$record->pin}}">
                                                         </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                         <label for="add">Date</label>
                                                         <div class="inner-addon right-addon">
                                                            <i class="fa fa-date"></i>
                                                         <input type="date" class="form-control" name="date" id="date" placeholder="Date of Appointment....">
                                                         </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                         <label for="mobno">Time</label>
                                                         <div class="inner-addon right-addon">
                                                            <i class="fa fa-clock"></i>
                                                         <input type="time" class="form-control" id="time" name="time" placeholder="Time of Appointment....">
                                                         </div>
                                                      </div>
                                                   </div>
                                                <button type="submit" class="btn btn-primary">Book</button>
                                                {!! Form::close() !!}
                                          </div>
                                       </div>
                                       <div class="col-md-12 collapse" id="allrecords">
                                       <div class="row">
                                           <div class="col-md-3">
                                               <div class="iq-card shadow-none mb-0">
                                                   <div class="iq-card-body p-1">
                                                         <span class="font-size-14">Blood Pressure</span>
                                                         @if ($record->bp == '')
                                                             
                                                         <h6>
                                                            N/A
                                                        </h6>
                                                        @else
                                                        
                                                        <h6>
                                                            {{$record->bp}}
                                                        </h6>
                                                         @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="iq-card shadow-none mb-0">
                                                   <div class="iq-card-body p-1">
                                                         <span class="font-size-14">Temperature</span>
                                                         @if ($record->temp == '')
                                                             
                                                         <h6>
                                                            N/A
                                                        </h6>
                                                        @else
                                                         <h6>
                                                             {{$record->temp}}
                                                         </h6>
                                                         @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="iq-card shadow-none mb-0">
                                                   <div class="iq-card-body p-1">
                                                         <span class="font-size-14">FBS/RBS</span>
                                                         @if ($record->fbs_rbs == '')
                                                             
                                                         <h6>
                                                            N/A
                                                        </h6>
                                                        @else
                                                         <h6>
                                                             {{$record->fbs_rbs}}
                                                         </h6>
                                                         @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="iq-card shadow-none mb-0">
                                                   <div class="iq-card-body p-1">
                                                      <div class="">
                                                          <span class="font-size-14">Height</span>
                                                         @if ($record->height == '')
                                                             
                                                         <h6>
                                                            N/A
                                                        </h6>
                                                        @else
                                                         <h6>
                                                             {{$record->height}}cm
                                                         </h6>
                                                         @endif
         
                                                      </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="iq-card shadow-none mb-0">
                                                   <div class="iq-card-body p-1">
                                                      <div class="">
                                                         <span class="font-size-14">Glucose Level</span>
                                                         @if ($record->glucose == '')
                                                             
                                                         <h6>
                                                            N/A
                                                        </h6>
                                                        @else
                                                         <h6>
                                                             {{$record->glucose}}
                                                         </h6>
                                                         @endif
         
                                                      </div>
                                                   </div>
                                               </div>
                                            </div>
                                               <div class="col-md-12">
                                                   <div class="iq-card shadow-none mb-0">
                                                       <div class="iq-card-body p-1">
                                                             <span class="font-size-14">General Note</span>
                                                             @if ($record->note == '')
                                                                 
                                                             <h6>
                                                                N/A
                                                            </h6>
                                                            @else
                                                             <h6>
                                                                 {!!$record->note!!}
                                                             </h6>
                                                             @endif
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div><br>
                                          <div class="col-md-12 collapse" id="records">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                         @php
                                                             
                                                             $records = App\Records::where('pin', $record->pin)->orderBy('created_at', 'desc')->get();
                                                         @endphp        
                                                      @if (count($records) > 0)
                                                      <div class="col-sm-12 col-md-6">
                                                         <div class="user-list-files d-flex">
                                                             <a href="javascript:void();" class="chat-icon-delete">
                                                               Pdf
                                                             </a>
                                                           </div>
                                                      </div>
                                                   </div>
                                                   <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                                          </div>
                                          </div>
                                       <hr>
                                </div>   
                                @endif
                                 </div>
                              </div>
                     <!----
                              <div class="col-lg-12 chat-data p-0 chat-data-right">
                                 <div class="tab-content">
                                    <div class="tab-pane fade" id="chatbox10" role="tabpanel">
                                       <div class="chat-head">
                                          <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                             <div id="sidebar-toggle" class="sidebar-toggle">
                                                <i class="ri-menu-3-line"></i>
                                             </div>
                                              <div class="avatar chat-user-profile m-0 mr-3">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-50 ">
                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                              </div>
                                              <h5 class="mb-0">Monty Carlo</h5>
                                            </div>
                                            <div id="chat-user-detail-popup" class="scroller">
                                                <div class="user-profile text-center">
                                                   <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                   <div class="user mb-4">
                                                    <a class="avatar m-0">
                                                      <img src="images/user/08.jpg" alt="avatar">
                                                    </a>
                                                  <div class="user-name mt-4"><h4>Monty Carlo</h4></div>
                                                  <div class="user-desc"><p>Cape Town, RSA</p></div>
                                                  </div>
                                                  <hr>
                                                  <div class="chatuser-detail text-left mt-4">
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Nik Name:</div>
                                                         <div class="col-6 col-md-6 text-right">Babe</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Tel:</div>
                                                         <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                         <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Gender:</div>
                                                         <div class="col-6 col-md-6 text-right">Female</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Language:</div>
                                                         <div class="col-6 col-md-6 text-right">Engliah</div>
                                                      </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                              <a href="javascript:void();" class="chat-icon-phone">
                                                <i class="ri-phone-line"></i>
                                              </a>
                                             <a href="javascript:void();" class="chat-icon-video">
                                                <i class="ri-vidicon-line"></i>
                                              </a>
                                              <a href="javascript:void();" class="chat-icon-delete">
                                                <i class="ri-delete-bin-line"></i>
                                              </a>
                                              <span class="dropdown">
                                                <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                </span>
                                              </span>
                                            </div>
                                          </header>
                                        </div>
                                       <div class="chat-content scroller">
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>How can we help? We're here for you! 😄</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Hey John, I am looking for the best admin template.</p>
                                                <p>Could you please help me to find it out? 🤔</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Absolutely!</p>
                                                <p>Sofbox Dashboard is the responsive bootstrap 4 admin template.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Looks clean and fresh UI.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Thanks, from ThemeForest.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>I will purchase it for sure. 👍</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Okay Thanks..</p>
                                              </div>
                                            </div>
                                          </div>
                                       </div>
                                       <div class="chat-footer p-3 bg-white">
                                          <form class="d-flex align-items-center"  action="javascript:void(0);">
                                           <div class="chat-attagement d-flex">
                                              <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                              <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                             </div>
                                           <input type="text" class="form-control mr-3" placeholder="Type your message">
                                           <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                         </form>
                                       </div>
                                    </div>
                                    --------------
                                 </div>
                              </div>--->
      <!-- Wrapper END -->
      <!-- Footer -->
      @else
      <div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
         <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
         <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
      
      </div>
      @endif   
        <footer class="bg-white iq-footer" style="margin-top: 160px;">
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
         <!-- Footer END -->
@endsection
