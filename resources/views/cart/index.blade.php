@extends('layouts.main')
@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
   <div>
    <div class="">

      <div class="row">
         <div class="col-12 col-lg-8">
          <div class="iq-card">
            <div class="iq-card-header">
             <h4 class="card-title"><strong>YOUR CART ({{App\StoreCart::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->count() }} ITEMS)</strong></h4>
            </div>

            <div class="iq-card-body">
             <div class="table-responsive">
               @include('inc.messages')
             @if (count($cartItems) > 0)
                <table class="table product-overview">
                   <thead>
                      <tr>
                         <th>Image</th>
                         <th>Product info</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <!---<th>Status</th>--->
                         <th style="text-align:center">Action</th>
                      </tr>
                   </thead>
                   <tbody>
                     @foreach ($cartItems as $cartItem)
                      <tr>
                         <td><img src="{{ URL::to('img/drugs/'.$cartItem->img)}}" alt="" width="80"></td>
                         <td>
                            <h5>{{$cartItem->drug_name}}</h5>
                            <p>
                              {{$cartItem->description}}
                            </p>
                         </td>
                         <td>&#8358;{{$cartItem->price}}</td>
                         <td width="70">
                           {{$cartItem->quantity}}
                         </td>
                         <!----
                         @php
                         $drug = App\pharmacy::find($cartItem->drug_id);
                        @endphp
                     @if (empty($drug))
                     <td>{{'Not Available'}}</td>
                     @endif---->
                         <td align="center">
                            <style>
                               h4.card-title{
                                  padding-top: 15px;
                               }
                               a.btn.btn-danger{
                                  padding: 5px;
                               }
                            </style>
                           {!!Form::open(['action' => 'CartController@delete','id' => $cartItem->id,'method' => 'GET', 'class' => 'pull-left', 'style' => 'margin-right:20px;'])!!}
                           {{Form::hidden('id', $cartItem->id)}}
                           {!!Form::close()!!}
                            <a href="javascript:{}" onclick="document.getElementById({{$cartItem->id}}).submit();" class="btn btn-danger" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                           </td>
                      </tr>
                      @endforeach 					
                   </tbody>
                </table>   
                <div class="col-md-12" style="text-align:center;">
                        <!----- The pagination link----->
                        
                        {{$cartItems->links()}}
                </div>
                @else
                <p>You have no items in your cart yet</p>    
                @endif
                   <a href="{{route('cart.checkout')}}" class="btn btn-lg btn-success pull-right" style="text-decoration: none;">
                     <i class="fa fa fa-shopping-cart"></i> Checkout
                   </a>
                   <a href="./pharmacist_shop" class="btn btn-lg btn-info" style="text-decoration: none;">
                     <i class="fa fa-arrow-left"></i> Continue Shopping 
                   </a>
             </div>

            </div>
          </div>
         </div>

         <div class="col-12 col-lg-4">
            <!--
          <div class="box">
            <div class="box-header bg-success">
             <h4 class="box-title"><strong>Discount</strong></h4>
            </div>
            <div class="box-body">
             <p>If you have any discount vouchers/coupans, apply here. If you don't have any, click <a href="javascript:void(0);" class="text-link">here</a> to get one.</p>
             <form class="form-inline mt-20">
                <div class="input-group w-p100">
                   <input type="text" class="form-control">
                   <div class="input-group-prepend">
                     <button type="button" class="btn btn-danger">Apply</button>
                   </div>--->
                   <!-- /btn-group -->
                   <!---
                </div>
             </form>

            </div>
          </div>			 
--->
          <div class="iq-card">
            <div class="iq-card-header">
             <h4 class="card-title"><strong>Cart Summary</strong></h4>
            </div>

            <div class="iq-card-body">
             <div class="table-responsive">
                <table class="table simple mb-0">
                   <tbody>
                      <tr>
                         <td>Total</td>
                         <td class="text-right font-weight-700">&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</td>
                      </tr>
                      <!---
                      <tr>
                         <td>Coupan Discount</td>
                         <td class="text-right font-weight-700"><span class="text-danger mr-15">50%</span>-$1620</td>
                      </tr>
                      <tr>
                         <td>Delivery Charges</td>
                         <td class="text-right font-weight-700">$50</td>
                      </tr>
                      <tr>
                         <td>Tax</td>
                         <td class="text-right font-weight-700">$18</td>
                      </tr>---->
                      <tr>
                         <th class="bt-1">Payable Amount</th>
                         <th class="bt-1 text-right font-weight-900 font-size-18">&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</th>
                      </tr>
                   </tbody>
                </table>
             </div>
            </div>
            <!---

            <div class="box-footer">	

             <button class="btn btn-lg btn-danger">Cancel Order</button>
             <button class="btn btn-lg btn-primary pull-right">Place Order</button>
            </div>--->
          </div> 
<!---
          <div class="box">
            <div class="box-header bg-dark">
             <h4 class="box-title"><strong>Support</strong></h4>
            </div>

            <div class="box-body">
             <h4 class="font-weight-800"><i class="ti-mobile"></i> +1800 123 8713 <span class="text-info">(Toll Free)</span></h4>
             <p>Contact us for any queries. We are avalible 24x7x365.</p>
            </div>
          </div>

         </div>--->

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