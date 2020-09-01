@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
      <!-- Page Content  -->
         <div>
            <div class="">
               <div class="row">
                  <div class="col-sm-12">
                     <div id="cart" class="card-block show b-0">
                         <div class="row">
                            @if (count($cartItems) > 0)
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    @foreach ($cartItems as $cartItem)
                                    <div class="ckeckout-product-lists">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="d-flex align-items-center">
                                          <div class=" ml-3 checkout-product-details">
                                             <h5>{{$cartItem->drug_name}}</h5>
                                             <p class="mb-0"><b>{{$cartItem->quantity}}</b></p>
                                          </div>
                                       </div>
                                          <div class="checkout-amount-data text-center">
                                             <div class="price">
                                                <h5>&#8358;{{$cartItem->price}}</h5>
                                             </div>
                                             <div class="checkout-button">
                                                {!!Form::open(['action' => 'CartController@delete','id' => 'my_form_1','method' => 'GET', 'class' => 'pull-left', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $cartItem->id)}}
                                                {!!Form::close()!!}
                                                <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();"class="btn btn-light d-block"><i class="ri-close-line mr-1"></i>Remove</a>
                                            </div>
                                          </div>
                                       </div>
                                    </div><br>
                                    @endforeach 
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <hr>
                                    <p><b>Price Details</b></p>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                       <span class="text-dark"><strong>Total</strong></span>
                                       <span class="text-dark"><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
                                    </div>
                                    <a id="place-order" href="javascript:void();" type="button" class="btn btn-primary d-block mt-1 next">Place order</a>

                                 </div>
                              </div>
                           </div>
                        </div>
                        @else
                        <p>You have no items in your cart yet</p>    
                        @endif
                     </div>
                     <div id="address" class="card-block b-0">
                         <div class="row">
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Add New Address</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form onsubmit="required()">
                                    <div class="row mt-3">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="fname">Full Name: *</label> 
                                              <input type="text" class="form-control" name="fname" required="">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group"> 
                                              <label for="mno">Mobile Number: *</label> 
                                              <input type="text" class="form-control" name="mno" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="houseno">Flat, House No: *</label> 
                                              <input type="text" class="form-control" name="houseno" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="landmark">Landmark e.g. near apollo hospital:: *</label> 
                                              <input type="text" class="form-control" name="landmark" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="city">Town/City: *</label> 
                                              <input type="text" class="form-control" name="city" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="pincode">Pincode: *</label> 
                                              <input type="text" class="form-control" name="pincode" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> 
                                              <label for="state">State: *</label> 
                                              <input type="text" class="form-control" name="state" required="">
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="addtype">Address Type</label>
                                                <select class="form-control" id="addtype" required="">
                                                   <option>Home</option>
                                                   <option>Office</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <button id="savenddeliver" type="submit" class="btn btn-primary">Save And Deliver Here</button>
                                          </div>
                                    </div>
                                 </form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <h4 class="mb-2">Nik John</h4>
                                    <div class="shipping-address">
                                       <p class="mb-0">9447 Glen Eagles Drive</p>
                                       <p>Lewis Center, OH 43035</p>
                                       <p>UTC-5: Eastern Standard Time (EST)</p>
                                       <p>202-555-0140</p>
                                    </div>
                                    <hr>
                                    <a id="deliver-address" href="javascript:void();" type="button" class="btn btn-primary d-block mt-1 next">Deliver To this Address</a>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <div id="payment" class="card-block b-0">
                         <div class="row">
                           <div class="col-lg-8">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Payment Options</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex justify-content-between align-items-center">
                                          <img src="images/booking/cart.png" alt="" height="40" width="50">
                                          <span>US Unlocked Debit Card 12XX XXXX XXXX 0000</span>
                                       </div>
                                       <div>
                                       <span>Nik John</span>
                                       <span>28/2020</span>
                                    </div>
                                    </div>
                                    <form class="mt-3">
                                       <div class="d-flex align-items-center">
                                          <span>Enter CVV: </span>
                                          <div class="cvv-input ml-3 mr-3">
                                             <input type="text" class="form-control" required=""> 
                                          </div>
                                          <button type="submit" class="btn btn-primary">Continue</button>
                                       </div>
                                    </form>
                                    <hr>
                                    <div class="card-lists">
                                       <div class="form-group">
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="credit" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="credit"> Credit / Debit / ATM Card</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="netbaking" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="netbaking"> Net Banking</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="emi" name="emi" class="custom-control-input">
                                                <label class="custom-control-label" for="emi"> EMI (Easy Installment)</label>
                                             </div>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" id="cod" name="cod" class="custom-control-input" >
                                                <label class="custom-control-label" for="cod"> Cash On Delivery</label>
                                             </div>
                                       </div>
                                    </div>
                                    <hr>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="iq-card">
                                 <div class="iq-card-body">
                                    <h4 class="mb-2">Price Details</h4>
                                    <div class="d-flex justify-content-between">
                                       <span>Price For {{App\StoreCart::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->count() }} Item(s)</span>
                                       <span><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                       <span>Delivery Charges</span>
                                       <span class="text-success">Free</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                       <span>Amount Payable</span>
                                       <span><strong>&#8358;{{App\StoreCart::where('user_id', auth()->user()->id)->sum('price')}}</strong></span>
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
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
</div>
@endsection