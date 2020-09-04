@extends('layouts.main')

@section('content')
@include('inc.navmain')
   <!-- Page Content  -->

   <div class="">
    <div class="">
       <div class="col-sm-12">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                <h4 class="card-title">Laboratory Test Request For {{$patient->name}}</h4>
                </div>
             </div>
          </div>
       </div>
          <div class="iq-card">
             <div class="iq-card-body text-center">
                <h5 class="card-title">Laboratory Test Request Detail</h5>
                @include('inc.messages')
                @if (count($patients) > 0)
                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                  <thead>
                      
                      <tr>
                         <th>Date</th>
                         <th>Test(s)</th>
                         <th>Requested By</th>
                         <th>Status</th>
                         <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                   @foreach ($patients as $patient)
                      <tr>
                         <td class="text-center">{{$patient->created_at}}</td>
                         <td>
                             {{$patient->test_name1}}
                             @if ($patient->test_name2 !== 'select')
                             {{$patient->test_name2}}
                                 
                             @endif
                             @if ($patient->test_name3 !== 'select')
                             {{$patient->test_name3}}
                                 
                             @endif
                             @if ($patient->test_name4 !== 'select')
                             {{$patient->test_name4}}
                                 
                             @endif
                             @if ($patient->test_name5 !== 'select')
                             {{$patient->test_name5}}
                                 
                             @endif
                             @if ($patient->test_name6 !== 'select')
                             {{$patient->test_name6}}
                                 
                             @endif
                        </td>
                         <td>{{$patient->doc_name}}</td>
                         <td>{{$patient->status}}</td>
                         <td>
                            <div class="dropdown">
                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                               <i class="ri-more-fill"></i>
                               </span>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                               {!!Form::open(['action' => ['LabsController@update', $patient->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('pin', $patient->patient_pin)}}
                               {{Form::hidden('_method', 'PUT')}}
                               <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark Test As Done"><i class="ri-pencil-fill mr-2"></i>Mark Test As Done</button>
                              
                               {!!Form::close()!!}
                               </div>
                             
                        </td>
                      </tr> 
                      @endforeach                      
                  </tbody>
                </table>
                    
                @endif

             </div>
          </div>
       </div>
 </div>
  <!-- Footer -->
    <footer class="bg-white iq-footer" style="margin-top:150px;">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-6">
                <ul class="list-inline mb-0">
                   <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                   <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
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