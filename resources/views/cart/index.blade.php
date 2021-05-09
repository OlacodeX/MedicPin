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
                  <li class="breadcrumb-item active" aria-current="page">My Shopping Basket</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Shopping Basket</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="row">
      <div class="col-md-9">
         
   <div class="card card-table">
      <div class="card-body">
         @if (count($cartItems) > 0)
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                     <th>Image</th>
                     <!--<th>Product info</th>-->
                     <th>Price</th>
                     <th class="text-center">Quantity</th>
                     <th class="text-center">Action</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($cartItems as $cartItem)
                  <tr>
                     <td>
                        <h2 class="table-avatar">
                           <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{ URL::to('img/drugs/'.$cartItem->img)}}" alt="Drug Image"></a>
                        </h2>
                        <a href="">{{$cartItem->drug_name}}</a>
                     </td>
                     <!--
                     <td>
                        <p>{{$cartItem->description}}</p>
                     </td>-->
                     <td>&#8358;{{$cartItem->price}}</td>					
                     <td class="text-center">
                     <div class="custom-increment cart">
                                 <div class="input-group1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <span><i class="fas fa-minus"></i></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity1" name="quantity1" class=" input-number" value="{{$cartItem->quantity}}">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <span><i class="fas fa-plus"></i></span>
                                        </button>
                                    </span>
                                </div>
                           </div>
                     </td>
                     <td class="text-right">
                        <div class="table-action">
                           {!!Form::open(['action' => 'CartController@delete','id' => $cartItem->id,'method' => 'GET', 'class' => 'pull-left', 'style' => 'margin-right:20px;'])!!}
                           {{Form::hidden('id', $cartItem->id)}}
                           {!!Form::close()!!} 
                           <a href="javascript:{}" onclick="document.getElementById({{$cartItem->id}}).submit();" class="btn btn-sm bg-danger-light" data-toggle="tooltip" data-original-title="Remove drug from basket">
                              <i class="fas fa-times"></i>
                           </a>
                        </div>
                     </td>
                  </tr> 
                  @endforeach 		
               </tbody>
            </table>		
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
 <div class="col-md-3">
      
         <!-- Booking Summary -->
         <div class="card booking-card">
            <div class="card-header">
               <h4 class="card-title">Cart Summary</h4>
            </div>
            <div class="card-body">
               
               <div class="booking-summary">
                  <div class="booking-item-wrap">
                     <ul class="booking-date">
                        <li>Total <span>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</span></li>
                        <!--<li>Shipping <span>$25.00<a href="#">Calculate shipping</a></span></li>
                        --></ul>
                     <!--<ul class="booking-fee pt-4">
                        <li>Tax <span>$0.00</span></li>
                     </ul>-->
                     <div class="booking-total">
                        <ul class="booking-total-list">
                           <li>
                              <span>Payable Amount</span>
                              <span class="total-cost">&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</span>
                           </li>
                           <li>
                              <div class="clinic-booking pt-4">
                                 <a href="{{route('cart.checkout')}}" class="apt-btn" >
                                   <i class="fa fa fa-shopping-cart"></i> Checkout
                                 </a> 
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Booking Summary -->
         
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