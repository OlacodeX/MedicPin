@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body">
                           @include('inc.messages')
                           <div class="row">
                              <div class="col-lg-6">
                                 <h4 class="mb-0 float-left">My Bills</h4>
                                 <!---<img src="images/logo1.png" class="img-fluid w-25" alt="">---->
                              </div>
                              <div class="col-lg-6 align-self-center">
                                 <!---<h4 class="mb-0 float-right">Invoice</h4>--->
                              </div>
                              <div class="col-sm-12">
                                 <hr class="mt-3">
                                 @if (auth()->user()->type == 'HMO' || auth()->user()->type == 'Organization')
                                 <h5 class="mb-0">Hello, {{auth()->user()->hmo_org_name}}</h5>
                                 @else
                                 <h5 class="mb-0">Hello, {{auth()->user()->name}}</h5>
                                 
                                 @endif
                                 <p>
                                    Below is a breakdown of all your incurred expenses for the day.
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       @if (count($bills) > 0)
                                       <thead>
                                          <tr>
                                             <th class="text-center" scope="col">Date</th>
                                             <th class="text-center" scope="col">Item</th>
                                             <th class="text-center" scope="col">Bill Status</th>
                                             <th class="text-center" scope="col">Amount</th>
                                             <th class="text-center" scope="col">Bill By</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($bills as $bill)
                                          <tr>
                                             <td class="text-center">{{$bill->created_at}}</td>
                                             <td class="text-center">{{$bill->service}}</td>
                                             @if ($bill->status == 'Unpaid')
                                             <td class="text-center"><span class="badge badge-danger">{{$bill->status}}</span></td>
                                                 
                                             @else
                                             <td class="text-center"><span class="badge badge-success">{{$bill->status}}</span></td>
                                                 
                                             @endif
                                             <td class="text-center">{{$bill->amount}}</td>
                                             <td class="text-center">{{$bill->action_by}}</td>
                                          </tr> 
                                              
                                          @endforeach
                                          @else
                                          <div class="col-md-12">
                                             <p class="text-center">You have not incur any expenses yet.</p>
                                          </div>
                                       </tbody>
                                       @endif
                                    </table>
                                 </div>
                              </div>
                              <div class="col-sm-6">  
                                 <nav aria-label="breadcrumb" class="text-center">
                                 <ol class="breadcrumb text-center">
                                 </ol>
                               </nav>
                              </div>
                              <style>
                                 a.btn.btn-primary{
                                    margin-bottom: 10px;
                                 }
                              </style>
                              <div class="col-sm-6 text-right">
                                 @if (auth()->user()->hmo != '')
                                 <a href="javascript:{}" onclick="document.getElementById('my_form_01').submit();" class="btn btn-primary">Request HMO to pay</a>
                                                         
                                 {!! Form::open(['action' => 'HmoController@payment_request', 'method' => 'GET', 'id' => 'my_form_01']) /** The action should be the block of code in the store function in PostsController
                                 **/ !!}
                                  {{Form::hidden('pin', auth()->user()->pin)}}
                                 {!! Form::close() !!}
                                 @endif
                                 @if (auth()->user()->type == 'NHIS')
                                 <button type="button" class="btn btn-primary">Print NHIS Claim Form</button>
                                 @endif
                                 <!---<button type="button" class="btn btn-link mr-3"><i class="ri-printer-line"></i> Download Print</button>--->
                                 <button type="button" class="btn btn-primary">Pay Now</button>
                              </div>
                              <div class="col-sm-12"> 
                                 <a href="#bills" data-toggle="collapse" class="btn btn-primary pull-left" style="margin-top: 0;">Billing History</a>
                             
                                 <div class="collapse" id="bills"> 
                                    <div class="iq-card">
                                    <div class="iq-card-body text-center">
                                       <h5 class="card-title">Billing History</h5>
                                       @php
                                             $billings = App\Bills::where('patient_pin', auth()->user()->pin)->orderby('created_at','desc')->get();
                                       @endphp      
                                       @if (count($billings) > 0)
                                          <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                           
                                       <thead>
                                          <tr>
                                             <th class="text-center" scope="col">Date</th>
                                             <th class="text-center" scope="col">Item</th>
                                             <th class="text-center" scope="col">Bill Status</th>
                                             <th class="text-center" scope="col">Amount</th>
                                             <th class="text-center" scope="col">Bill By</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($billings as $billing)
                                          <tr>
                                             <td class="text-center">{{$billing->created_at}}</td>
                                             <td class="text-center">{{$billing->service}}</td>
                                             @if ($billing->status == 'Unpaid')
                                             <td class="text-center"><span class="badge badge-danger">{{$billing->status}}</span></td>
                                                 
                                             @else
                                             <td class="text-center"><span class="badge badge-success">{{$billing->status}}</span></td>
                                                 
                                             @endif
                                             <td class="text-center">{{$billing->amount}}</td>
                                             <td class="text-center">{{$billing->action_by}}</td>
                                          </tr> 
                                              
                                          @endforeach
                                          @else
                                          <div class="col-md-12">
                                             <p class="text-center">You have not incur any expenses yet.</p>
                                          </div>
                                       </tbody>
                                       @endif
                                    </table>
                                 </div>
                              </div>
                            </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:80px;">
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
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
          
        </footer>
        <!-- Footer END -->
@endsection