@extends('layouts.main')

<link rel="stylesheet" type="text/css" href="./assets/css/style_new.css">
@section('content')
@include('inc.navmain')
			
			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Electronic Health Records on the go..</h1>
							<p>Fast, Secure and Reliable...</p>
						</div>
                         
						<!-- Search 
						<div class="search-box">
							<form action="">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>-->
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
 
                        
            <!-----------about--------------->
            <section class="about type_two pdt_100 pdb_100 wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>
Fast, Secure and Reliable..</h6>
                              <h1>Electronic Health Records on the go.. </h1>
                           </div>
                           <p> We are not about just being paperless, but built for the cloud. Our platform is to help simplify and improve health care delivery in Africa through technological innovations and ideas that enables effective storage and accessment of medical data. 
                           </p>
                           <p class="last"> Manage appointments, access medical records anytime, anywhere and lots more. We empower African health sector to effectively migrate from paper recors to cloud data management. </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box one">
                           <img src="img/signin.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
					 
                  </div>
                  <div class="empty_space"></div>
				  
				  
				  
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box two">
                           <img src="img/capture.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
					 

                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>Africa's Rising Health Innovation</h6>
                              <h1> What is Medicpin and how can our platform benefit you?</h1>
                           </div>
                           <p>Medicpin helps to reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record, thereby saving time and energy.
By adopting Medicpin, accurate and up-to-date information about a patient is available at any point of his/her continuum of care.
                           </p>
                           <a href="#" class="read_more tp_one">  Read more about  <span class="linearicons-arrow-right"></span></a>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section> 
			    
			<!-- Popular Section 
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Doctor</h2>
								<p>Lorem Ipsum is simply dummy text </p>
							</div>
							<div class="about-content">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
								<p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>					
								<a href="javascript:;">Read More..</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								 
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Ruby Perrin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(17)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Florida, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $300 - $1000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div> 
						
 
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Darren Elder</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Newyork, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $50 - $300 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        

								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Deborah Angel</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(27)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Georgia, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $400 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        

								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Sofia Brient</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Louisiana, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $150 - $250 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        

								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Marvin Campbell</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(66)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Michigan, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $50 - $700 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        

								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Katharine Berthold</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(52)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Texas, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $500 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        

								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Linda Tobin</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(43)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Kansas, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $1000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
                        </div> 
                        
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Paul Richard</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(49)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> California, USA
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 22 Mar
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> $100 - $400 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										<div class="row row-sm">
											<div class="col-6">
												<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
											</div>
											<div class="col-6">
												<a href="booking.html" class="btn book-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div> 
								
							</div>
						</div>
				   </div>
				</div>
			</section>-->
			<!-- /Popular Section -->
		   
		   <!-- Availabe Features
		   <section class="section section-features">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-md-5 features-img">
							<img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-7">
							<div class="section-header">	
								<h2 class="mt-2">Availabe Features in Our Clinic</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>	
							<div class="features-slider slider"> 

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
									<p>Patient Ward</p>
                        </div>
                        

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
									<p>Test Room</p>
                        </div>
                        

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
									<p>ICU</p>
                        </div>
                        

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
									<p>Laboratory</p>
                        </div>
                        

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
									<p>Operation</p>
                        </div>
                        

								<div class="feature-item text-center">
									<img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
									<p>Medical</p>
                        </div>
                        
							</div>
						</div>
				   </div>
				</div>
			</section>		
			 /Availabe Features -->
			
			<!-- Blog Section -->
		   <section class="section section-blogs">
				<div class="container-fluid">
				
					<!-- Section Header -->
					<div class="section-header text-center">
						<h2>Blogs and News</h2>
						<p class="sub-title">Find out updates you need to know about preventing, isolating and treating <br class="md_display_none">coronavirus and COVID-19</p>
					</div>
					<!-- /Section Header -->
					
					<div class="row blog-grid-row">
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 4 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Doccure – Making your clinic painless visit?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-02.jpg" alt="Post Author"> <span>Dr. Darren Elder</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">What are the benefits of Online Doctor Booking?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-03.jpg" alt="Post Author"> <span>Dr. Deborah Angel</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Benefits of consulting with an Online Doctor</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-04.jpg" alt="Post Author"> <span>Dr. Sofia Brient</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 2 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">5 Great reasons to use an Online Doctor</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
					</div>
					<div class="view-all text-center"> 
						<a href="blog-list.html" class="btn btn-primary">View All</a>
					</div>
				</div>
			</section>
			<!-- /Blog Section -->		
            <!-----------newsletter--------------->
            <section class="newsletter type_one pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="heading white  tp_one">
                           <h1>Subscribe our newsletter </h1>
                           <p> Join our subscribers list to get latest news and updates about COVID-19<br class="md_display_none"> delivered directly in your inbox.</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="subscribe_box tp_one">
                           <form>
                              <div class="form_group">
                                 <input type="text" placeholder="Type here your question...">
                                 <button class="search_btn" type="submit">Subscribe</button>
                              </div>
                              <div class="form_group mg_top check_box">
                                 <input name="checkbox" type="checkbox" id="test3" required="required">
                                 <label for="test3">I accept the <a href="./privacy">Privacy Policy.</a></label>
                              </div>
                           </form>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------newsletter-end-------------->  	
			@endsection