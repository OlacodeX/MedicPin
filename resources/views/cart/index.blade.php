@extends('layouts.main')
@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
   <div>
    <div class="">
       <div class="row">
          <div class="col-sm-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">Your Shopping Cart</h4>
                      </div>
                   </div>
                   <div class="iq-card-body">
                      <div class="table-responsive">
                         <div class="row justify-content-between">
                              @include('inc.messages')
                            @if (count($cartItems) > 0)
                            <div class="col-sm-12 col-md-6">
                               <div class="user-list-files d-flex float-right">
                                <a href="./pharmacy" class="chat-icon-delete" style="text-decoration: none;">
                                 Continue Shopping 
                                </a>
                                   <a href="{{route('cart.checkout')}}" class="chat-icon-delete" style="text-decoration: none;">
                                    Checkout
                                   </a>
                                 </div>
                            </div>
                         </div>
                         <table id="user-list-table" class="table table-striped table-borderedless mt-4" role="grid" aria-describedby="user-list-page-info">
                           <thead>
                               
                               <tr> 
                                <th>Action</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Status</th>
                               <!--- <th>Total</th>---->
                               </tr>
                           </thead>


                           <tbody>
                            @foreach ($cartItems as $cartItem)
                               <tr>
                                <td>
                                    {!!Form::open(['action' => 'CartController@delete','id' => 'my_form_1','method' => 'GET', 'class' => 'pull-left', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('id', $cartItem->id)}}
                                    {!!Form::close()!!}
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();"><i class="fa fa-close"></i>
                                    
                                    </a>
                                </td>
                                  <td>{{$cartItem->drug_name}}</td>
                                  <td><!---{{Form::number('qty', $cartItem->quantity)}}--->{{$cartItem->quantity}}</td>
                                  <td>&#8358;{{$cartItem->price}}</td>
                                 <!--- <td>&#8358;{{$cartItem->price_sum}}</td>-->
                                 @php
                                     $drug = App\pharmacy::find($cartItem->drug_id);
                                 @endphp
                                 @if (empty($drug))
                                 <td>{{'Not Available'}}</td>
                                 @endif
                               </tr> 
                               @endforeach                      
                           </tbody>
                         </table>

                         <hr>
                         <div class="col-sm-12 text-center">
                            <div class="row">
                             <div class="col-sm-6">
                              <h4>Total Items In Cart</h4>  
                                <p>{{App\StoreCart::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->count() }}</p> 
                             </div>
                             <div class="col-sm-6">
                                 <h4>You Pay Total of</h4>
                                <p>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</p> 
                             </div>
                           </div>
                         </div>    
                         <div class="col-md-12" style="text-align:center;">
                                 <!----- The pagination link----->
                                 
                                 {{$cartItems->links()}}
                         </div>
                         @else
                         <p>You have no items in your cart yet</p>    
                         @endif
                         
                      </div>
                    </div>
                    </div>
                   </div>
                </div>
    </div>
 </div>
 <!-- Wrapper END -->
  <!-- Footer -->
    <footer class="bg-white iq-footer">
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
   </div>
@endsection