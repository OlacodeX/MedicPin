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
                  <li class="breadcrumb-item active" aria-current="page">My Bills</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Bills</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card card-table">
      <div class="card-header">
         @if (auth()->user()->type == 'HMO' || auth()->user()->type == 'Organization')
         <h4 class="card-title"><b>Hello, {{auth()->user()->hmo_org_name}}</b></h4>
         @else
         <h4 class="card-title"><b>Hello, {{auth()->user()->name}}</b></h4>
         
         @endif 
       <small>Below is a breakdown of all your incurred expenses.</small>
      </div>
      <div class="card-body">
   <!-- Invoice Table -->
   @if (count($bills) > 0)
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                     <th>Date</th>
                     <th>Item</th>
                     <th>Bill Status</th>
                     <th>Amount</th>
                     <th>Bill By</th> 
                     <th>Action</th> 
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($bills as $bill)
                  <tr>
                     <td>
                        <a href="">{{$bill->created_at}}</a>
                     </td>
                     <!--
                     <td>
                        <h2 class="table-avatar">
                           <a href="" class="avatar avatar-sm mr-2">
                              <img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image">
                           </a>
                           <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
                        </h2>
                     </td>-->
                     <td>{{$bill->service}}</td>
                     @if ($bill->status == 'Unpaid')
                     <td><span class="badge badge-danger">{{$bill->status}}</span></td>
                         
                     @else
                     <td><span class="badge badge-success">{{$bill->status}}</span></td>
                         
                     @endif
                     <td>{{$bill->amount}}</td>
                    
                     @if (auth()->user()->role == 'HMO')
                     <td>{{$bill->inherited_from}}</td>
                         
                     @else
                     <td>{{$bill->action_by}}</td>
                         
                     @endif
                     <td class="text-right">
                        <div class="table-action">
                           @if (auth()->user()->role == 'HMO')
                           <a href="">
                           {!!Form::open(['action' => 'HmoController@reject', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                           {{Form::hidden('id', $bill->id)}}
                           <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="Reject Bill"><i class="ri-reply-fill mr-2"></i>Reject Bill</button>
                          
                           {!!Form::close()!!}
                           </a>
                           @endif
                           @if (auth()->user()->hmo != '')
                           <a href="javascript:{}" onclick="document.getElementById('my_form_01').submit();" class="btn btn-sm bg-info-light">Request HMO to pay</a>
                                                   
                           {!! Form::open(['action' => 'HmoController@payment_request', 'method' => 'GET', 'id' => 'my_form_01']) /** The action should be the block of code in the store function in PostsController
                           **/ !!}
                            {{Form::hidden('pin', auth()->user()->pin)}}
                           {!! Form::close() !!}
                           </a>
                           @endif
                           @if (auth()->user()->type == 'NHIS')  
                           <a>
                           <button type="button" class="btn btn-primary">Print NHIS Claim Form</button>
                           
                          </a>
                          @endif 
                             
                        </div>
                     </td>
                     <td>
                        
                        {!! Form::open(['action' => 'PaymentController@Transaction', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                           <input type="hidden" name="amount" value={{$bill->amount}}>
                           <button type="submit" class="btn btn-sm bg-info-light">Pay Now</button>
                        </form>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="col-md-12">
            <p class="text-center">You no unsettled bills yet.</p>
         </div> 
      @endif
      </div>
   </div>
   <div class="card card-table">
      <div class="card-header"> 
         <h4 class="card-title"><b>Previously incurred and settled bills.</b></h4> 
      </div>
      <div class="card-body">
         @php
               $billings = App\Bills::where('patient_pin', auth()->user()->pin)->where('status', 'Paid')->orderby('created_at','desc')->get();
         @endphp      
   <!-- Invoice Table -->
   @if (count($billings) > 0)
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                     <th>Date Incurred</th>
                     <th>Date Payed</th>
                     <th>Item</th>
                     <th>Bill Status</th>
                     <th>Amount</th>
                     <th>Bill By</th>
                     @if (auth()->user()->role == 'HMO')
                     <th>Action</th>
                         
                     @endif
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($billings as $billing)
                  <tr>
                     <td>
                        <a href="">{{$billing->created_at}}</a>
                     </td>
                     <td>{{$billing->updated_at}}</td>
                     <!--
                     <td>
                        <h2 class="table-avatar">
                           <a href="" class="avatar avatar-sm mr-2">
                              <img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image">
                           </a>
                           <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
                        </h2>
                     </td>-->
                     <td>{{$billing->service}}</td>
                     @if ($billing->status == 'Unpaid')
                     <td><span class="badge badge-danger">{{$billing->status}}</span></td>
                         
                     @else
                     <td><span class="badge badge-success">{{$billing->status}}</span></td>
                         
                     @endif
                     <td>{{$billing->amount}}</td>
                    
                     @if (auth()->user()->role == 'HMO')
                     <td>{{$billing->inherited_from}}</td>
                         
                     @else
                     <td>{{$billing->action_by}}</td>
                         
                     @endif
                     @if (auth()->user()->role == 'HMO')
                     <td class="text-right">
                        <div class="table-action">
                           {!!Form::open(['action' => 'HmoController@reject', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                           {{Form::hidden('id', $billing->id)}}
                           <button type="submit" class ="btn btn-sm bg-info-light" data-toggle="tooltip" data-placement="top" data-original-title="Reject Bill"><i class="ri-reply-fill mr-2"></i>Reject Bill</button>
                          
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
         <div class="col-md-12">
            <p class="text-center">You have not incur any expenses yet.</p>
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