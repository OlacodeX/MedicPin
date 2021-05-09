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
                  <li class="breadcrumb-item active" aria-current="page">Schedule Patient To Visit A Doctor</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Schedule Patient To Visit A Doctor</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Schedule Patient To Visit A Doctor</b></h4> 
      </div>
      <div class="card-body">
         @include('inc.messages')
         <!---If file upload is involved always add enctype to your opening
             form tag and set it to multipart/form-data--->
        {!! Form::open(['action' => 'ConsortationsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
        **/ !!}
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> 
                           @foreach ($doctors as $doctor)
                           <input type="hidden" name="doc_pin" value="{{$doctor->pin}}">  
                           @endforeach
                           <input type="hidden" name="patient_pin" value="{{$patient->pin}}">
                           <select class="form-control" id="doc" name="doc">
                              <option value="N/A">--Select Doctor--</option>
                              @if (count($doctors) > 0)
                              @foreach ($doctors as $doctor)
                              <option value="{{$doctor->name}}">{{$doctor->name}}</option>
                                 
                              @endforeach
                              @else
                              <option>No Doctor On Duty</option>
                              @endif
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group form-focus">
                           <input type="text" class="form-control floating" name="office" id="office" placeholder="Enter doctor's office">
                           <label for="office" class="focus-label">Doctor's Office</label>
                        </div>
                     </div>
                     {{Form::submit('Schedule', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                    {!! Form::close() !!}  
                 </div> 
                 <a href="#allrecords" data-toggle="collapse" class="btn bg-success-light pull-right">See patient's visit history</a>
      </div>           
   </div>           
                     <div class="card collapse" id="allrecords">
                        <div class="card-header">
                           <h4 class="card-title"><b>Consultation History</b></h4>
                            
                        </div>
                        <div class="card-body">
                           @if (count($consortations) > 0)
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                          <thead>
                              
                          <tr>
                           <th>Date</th>
                           <th>Nurse On Duty</th>
                           <th>Attended To By</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($consortations as $consortation)
                        <tr>
                           <td class="text-center">{{$consortation->created_at}}</td>
                           <td>Nurse {{$consortation->scheduled_by}}</td>
                           <td>Dr. {{$consortation->doc_name}}</td>
                        </tr> 
                              @endforeach                      
                          </tbody>
                        </table>
                     </div>
                           <div class="col-md-6">
                               <div style="text-align:right;">
                                       <!-----The pagination link----->
                                       {{$consortations->links()}}
                               </div>
                           </div>
                               @else
                               <p>No Record Found For This Patient.</p>    
                               @endif
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