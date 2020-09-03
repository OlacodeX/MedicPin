@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Schedule Patient To Visit A Doctor</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body" style="padding-bottom:100px;">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                            form tag and set it to multipart/form-data--->
                       {!! Form::open(['action' => 'ConsortationsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                       **/ !!}
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="time">Doctor</label>
                                    @foreach ($doctors as $doctor)
                                    <input type="hidden" name="doc_pin" value="{{$doctor->pin}}">  
                                    @endforeach
                                    <input type="hidden" name="patient_pin" value="{{$patient->pin}}">
                                    <select class="form-control" id="doc" name="doc">
                                       <option value="N/A">Select</option>
                                       @if (count($doctors) > 0)
                                       @foreach ($doctors as $doctor)
                                       <option value="{{$doctor->name}}">{{$doctor->name}}</option>
                                           
                                       @endforeach
                                       @else
                                         <option>No Doctor On Duty</option>
                                       @endif
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="office">Doctor's Office</label>
                                    <input type="text" class="form-control" name="office" id="office" placeholder="Enter doctor's office">
                                   
                                 </div>
                              </div>
                        {{Form::submit('Schedule', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                       {!! Form::close() !!} <br><br>
                       <a href="#allrecords" data-toggle="collapse" class="btn btn-primary">See patient's visit history</a>
                     
                       <div class="col-md-12 collapse" id="allrecords">
                          
                        <div class="iq-card shadow-none mb-0">
                           <div class="iq-card-body p-1">
                              <div class="">
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
                       </div><br>
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                               
                    </div>
              </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:120px;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END -->
@endsection