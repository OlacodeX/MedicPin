@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
         
@if (auth()->user()->status == 'Active')

		  <div class="row">
			<div class="col-lg-12">
				<div class="iq-card">
					<div class="iq-card-body">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="box box-body b-1 text-center no-shadow">
                           <img src="{{ URL::to('img/drugs/'.$drug->img)}}" alt="product-image" class="img-fluid" />
									
                        </div>
                        <!----
								<div class="pro-photos">
									<div class="photos-item item-active">
										<img src="../../images/product/product-6.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../../images/product/product-7.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../../images/product/product-8.png" alt="" >
									</div>
									<div class="photos-item">
										<img src="../../images/product/product-9.png" alt="" >
									</div>
								</div>--->
								<div class="clear"></div>
							</div>
							<div class="col-md-8 col-sm-6">
                        <h2 class="box-title mt-0">{{$drug->name}}</h2>
                        <!---
								<div class="list-inline">
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
									<a class="text-warning"><i class="mdi mdi-star"></i></a>
								</div>---->
								<h5 class="pro-price mb-0 mt-20">&#8358;{{$drug->price}}/{{$drug->sell}}
										<!--<span class="old-price">&#36;540</span>---->
                        </h5>
								<hr>
								<p>
                           {{$drug->description}}
                        </p>
								<div class="row">
									<div class="col-sm-4">
										<h6 class="mt-20">Product Brand</h6>
										<p class="mb-0">
                                 {{$drug->make}}
										</p>
									</div>
									<div class="col-sm-4">
										<h6 class="mt-20">Weight</h6>
										<p class="mb-0">
                                 {{$drug->weight}}Mg
										</p>
									</div>
									<div class="col-sm-4">
										<h6 class="mt-20">Pharmacy Address</h6>
										<p class="mb-0">
											@php
												$add = App\hospitals::where('user_pin', $drug->doc_pin)->first();
											@endphp
                                 {{$add->h_add}}
										</p>
									</div>
								</div>
								<hr>
								<div class="gap-items">
									{!! Form::open(['action' => 'PaymentController@Transaction', 'method' => 'POST', 'id' => 'my_form_001']) /** The action should be the block of code in the store function in PostsController
									**/ !!}
									   <input type="hidden" name="amount" value="{{$drug->price}}">
									   <input type="hidden" name="item" value="{{$drug->name}}">
									   
									</form>
                           <a class="btn btn-success btn-lg" href="javascript:{}" onclick="document.getElementById('my_form_001').submit();" style="font-size: 14px;font-family: 'Poppins', sans-serif; color:#ffffff;"><i class="mdi mdi-shopping"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy Now"></i> Buy Now!</a>
                           <a href="{{route('cart.add', $drug->id)}}" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"> <i class="ri-shopping-cart-2-line"></i> Add To Cart</a>
									
                        </div>
                        <!---
								<h4 class="box-title mt-20">Key Highlights</h4>
								<ul class="list-icons">
									<li><i class="fa fa-check text-danger float-none"></i> Party Wear</li>
									<li><i class="fa fa-check text-danger float-none"></i> Nam libero tempore, cum soluta nobis est</li>
									<li><i class="fa fa-check text-danger float-none"></i> Omnis voluptas as placeat facere possimus omnis voluptas.</li>
                        </ul>
                        --->
                     </div>
                     <!---
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="box-title mt-40">General Info</h4>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td width="390">Brand</td>
												<td> Brand Name </td>
											</tr>
											<tr>
												<td>Delivery Condition</td>
												<td> Lorem Ipsum </td>
											</tr>
											<tr>
												<td>Type</td>
												<td> Party Wear </td>
											</tr>
											<tr>
												<td>Style</td>
												<td> Modern </td>
											</tr>
											<tr>
												<td>Product Number</td>
												<td> FG1548952 </td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>---->
						</div>
					</div>				
				</div>
			</div>
		</div>
         <div>
			@else
			<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
			   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
			   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
			
			</div>
			@endif   
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 300px;">
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