@extends('layouts.main')

@section('content')
@include('inc.navmain')  
   <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
   <div>
    <div class="">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Your Transfered Patients List</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                         <div class="row justify-content-between">
                              @include('inc.messages')
                            @if (count($users) > 0)
                         <table id="user-list-table" class="table table-striped table-borderedless mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>
                               
                               <tr>
                                  <th>Patient MedicPin</th>
                                  <th>Patient Name</th>
                                  <th>New Doctor</th>
                                  <th>New Doctor's MedicPin</th>
                                 <!--- <th>Action</th>--->
                               </tr>
                           </thead>


                           <tbody>
                            @foreach ($users as $user)
                               <tr>
                                  <td class="text-center">{{$user->pin}}</td>
                                  <td>{{$user->patient_name}}</td>
                                  <td>{{$user->to_doctor}}</td>
                                  <td>{{$user->doc_pin}}</td>
                                  <!------
                                  <td>
                                    {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" >Add Medical Record</button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    {{Form::hidden('username', $user->username)}}
                                    <button type="submit" class ="btn btn-info btn-sm" >Check Medical Records</button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" >Transfer Patient</button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $user->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Message Patient">Message Patient</button>
                                   
                                    {!!Form::close()!!}
                                     <div class="flex align-items-center list-user-action">
                                        {!!Form::open(['action' => ['PatientsController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('email', $user->email)}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class ="btn btn-info btn-sm" >Delete Patient</button>
                                       
                                        {!!Form::close()!!}
                                     </div>
                                  </td>
                                  ----->
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
                                @else
                                <p>No Record Found</p>    
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
 <!-- Wrapper END -->
  <!-- Footer -->
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
    <!-- Footer END -->
@endsection