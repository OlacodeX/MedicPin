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
                  <li class="breadcrumb-item active" aria-current="page">{{$drug->name}} Details</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">{{$drug->name}} Details</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">

						<div class="col-md-7 col-lg-9 col-xl-9">
							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body product-description">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img1">
													<img src="{{ URL::to('img/drugs/'.$drug->img)}}" class="img-fluid" alt="User Image">
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name mb-2">{{$drug->name}}</h4>
												<p><span class="text-muted">Manufactured By </span> {{$drug->make}}</p>
												<p></p>
												<!--
												<div class="feature-product pt-4">
													<span>Applied for:</span>
													<ul>
														<li>Moisturization & Nourishment</li>
														<li>Blackhead Removal</li>
														<li>Anti-acne & Pimples</li>
														<li>Whitening & Fairness</li>
													</ul>
												</div>-->
													<div class="widget awards-widget">
														<h4 class="widget-title">Highlights</h4>
														<div class="experience-box">
															<ul class="experience-list">
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<p>Manufactured by {{$drug->make}}.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			
																			<p>Drug weight is {{$drug->weight}}{{$drug->sell}}.</p>
																		</div>
																	</div>
																</li> 
															</ul>
														</div>
													</div>
													<!-- /Awards Details -->
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
							<!-- /Doctor Widget -->
							
							<!-- Doctor Details Tab -->
							<div class="card">
								<div class="card-body pt-0">
								
									<!-- Tab Menu -->
										<h3 class="pt-4">Drug Details</h3>
										<hr>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-3">
									
										<!-- Overview Content -->
										<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
											<div class="row">
												<div class="col-md-9">
												
													<!-- About Details -->
													<div class="widget about-widget">
														<h4 class="widget-title">Description</h4>
														<p>{{$drug->description}}</p>
													</div>
													<!-- /About Details -->
												
										
													<!-- Awards Details 
													<div class="widget awards-widget">
														<h4 class="widget-title">Highlights</h4>
														<div class="experience-box">
															<ul class="experience-list">
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			<p>Safi syrup is known for its best purifying syrup for blood.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			
																			<p>It helps in eliminating the toxins from the bloodstream.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			
																			<p>It improves digestion.</p>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="experience-user">
																		<div class="before-circle"></div>
																	</div>
																	<div class="experience-content">
																		<div class="timeline-content">
																			
																			<p>It also helps in indigestion and constipation.</p>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>-->
													<!-- /Awards Details -->

													<!-- About Details -->
													<div class="widget about-widget">
														<h4 class="widget-title">Directions for use</h4>
														<p>As directed by your pharmacist.</p>
													</div>
													<!-- /About Details -->
													
													<!-- About Details 
													<div class="widget about-widget">
														<h4 class="widget-title">Storage</h4>
														<p>Store this syrup at room temperature protected from sunlight, heat, and moisture. Keep away from reaching out of children and pets. Ensure that the unused medicine is disposed of properly.</p>
													</div>-->
													<!-- /About Details -->
													<!-- About Details 
													<div class="widget about-widget">
														<h4 class="widget-title">Administration Instructions</h4>
														<p>Shake the bottle before its use. This syrup can be taken with or without food. The quantity consumed should not be lesser or greater than the prescribed one.</p>
													</div>-->
													<!-- /About Details -->

													<!-- About Details 
													<div class="widget about-widget">
														<h4 class="widget-title">Warning</h4>
														<p>This is not recommended for the pregnant women and lactating mothers.</p>
													</div>-->
													<!-- /About Details -->
													<!-- About Details 
													<div class="widget about-widget mb-3">
														<h4 class="widget-title">Precaution</h4>
														<p class="mb-0">Syrup has to be disposed of properly after 3 years from manufactured date and it is not recommended to use after the date.</p>
													</div>-->
													<!-- /About Details -->
												</div>
											</div>
										</div>
										<!-- /Overview Content -->
										
									</div>
								</div>
							</div>
							<!-- /Doctor Details Tab -->

						</div>

						<div class="col-md-5 col-lg-3 col-xl-3 theiaStickySidebar">
							
							<!-- Right Details -->
							<div class="card search-filter">
								<div class="card-body">
									<div class="clini-infos mt-0">
										<h2>&#8358;{{$drug->price}} <!--<b class="text-lg strike">$45</b>  <span class="text-lg text-success"><b>10% off</b></span>---></h2>
									</div>
									<span class="badge badge-primary">{{$drug->status}}</span>
									<div class="custom-increment pt-4">
										{!! Form::open(['action' => ['CartController@add', $drug->id], 'method' => 'GET', 'id' => 'my_form_002']) /** The action should be the block of code in the store function in PostsController
									**/ !!}
										
	                                    <div class="input-group1">
		                                    <span class="input-group-btn float-left">
		                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
		                                          <span><i class="fas fa-minus"></i></span>
		                                        </button>
		                                    </span>
		                                    <input type="text" id="quantity" name="quantity" class="input-number" value="10">
		                                    <span class="input-group-btn float-right">
		                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
		                                            <span><i class="fas fa-plus"></i></span>
		                                        </button>
		                                    </span>
										</div>
									</form>
                        			</div>
									<div class="clinic-details mt-4">
										<div class="clinic-booking">
											<a href="javascript:{}" onclick="document.getElementById('my_form_002').submit();" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"> <i class="ri-shopping-cart-2-line"></i> Add To Cart</a>
										</div>
									</div>
									<div class="card flex-fill mt-4 mb-0">
										<ul class="list-group list-group-flush">
											<!--<li class="list-group-item">SKU	<span class="float-right">201902-0057</span></li>-->
											<li class="list-group-item">Weighted At	<span class="float-right">{{$drug->weight . $drug->sell}}</span></li>
											<!--<li class="list-group-item">Unit Count	<span class="float-right">200ml</span></li>-->
											<li class="list-group-item">Address	<span class="float-right">
												@php
													$add = App\hospitals::where('user_pin', $drug->doc_pin)->first();
												@endphp
									 {{$add->h_add}}
									</span>
								</li>
										</ul>
									</div>
									<div class="clinic-details mt-4">
										<div class="clinic-booking">
											
									{!! Form::open(['action' => 'PaymentController@Transaction', 'method' => 'POST', 'id' => 'my_form_001']) /** The action should be the block of code in the store function in PostsController
									**/ !!}
									   <input type="hidden" name="amount" value="{{$drug->price}}">
									   <input type="hidden" name="item" value="{{$drug->name}}">
									   
									</form>
                           <a class="btn bg-primary-light btn-lg" href="javascript:{}" onclick="document.getElementById('my_form_001').submit();"><i class="mdi mdi-shopping"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy Now"></i> Buy Now!</a>
										</div>
									</div>
								</div>
							</div>
							<!---
							<div class="card search-filter">
								<div class="card-body">
									<div class="card flex-fill mt-0 mb-0">
										<ul class="list-group list-group-flush benifits-col">
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="fas fa-shipping-fast"></i>
												</div>
												<div>
													Free Shipping<br><span class="text-sm">For orders from $50</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="far fa-question-circle"></i>
												</div>
												<div>
													Support 24/7<br><span class="text-sm">Call us anytime</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="fas fa-hands"></i>
												</div>
												<div>
													100% Safety<br><span class="text-sm">Only secure payments</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div>
													<i class="fas fa-tag"></i>
												</div>
												<div>
													Hot Offers<br><span class="text-sm">Discounts up to 90%</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>-->
							<!-- /Right Details -->
							
						</div>

					</div>

					

				</div>
			</div>		
			<!-- /Page Content -->
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