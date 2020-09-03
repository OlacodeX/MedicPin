@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
               <div class="iq-card shadow-none mb-0">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title" style="color: #02818f;">Patient's Visit History</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                        @if (auth()->user()->role == 'Nurse')
                            
                            <span class="user-list-files d-flex float-right">
                               {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $patient->pin)}}
                               {{Form::hidden('username', $patient->username)}}
                               <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consortation With A Doctor"><i class="las la-radiation"></i>Schedule Patient's Visit With A Doctor</button>
                              
                             </span>
                             @endif
                        </div>
                     </div>
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
   <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:250px;">
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