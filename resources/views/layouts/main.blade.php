<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 21:49:25 GMT -->
<head>
		<meta charset="utf-8">
		<title>MedicPin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/icon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style2.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	<style>
        
            /* enable absolute positioning */
    .inner-addon {
      position: relative;
    }
    
    /* style glyph */
    .inner-addon .fa {
      position: absolute;
      padding: 10px;
      pointer-events: none;
      color: #09e5ab;
      font-weight: 900;
    }
    
    /* align glyph 
    .left-addon .fa  { left:  0px;}*/
    .right-addon .fa { right: 0px;}
    
    /* add padding 
    .left-addon input  { padding-left:  30px; } */
    .right-addon input { padding-right: 30px; }
    
    </style>
	</head>
	<body>


		<!-- Main Wrapper -->
		<div class="main-wrapper">
        @yield('content')
      

     
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/footer.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>We offer innovative solutions to helps reduce all that time wasting and inefficiency by simplifying the work flow in hospitals and providing easy access to a patient’s record, thereby saving time and energy.</p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
                                        <!-- Authentication Links -->
                                        @guest
										   <li><a href="./doctors">Search for Doctors</a></li>
                                            <li>
                                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                        <li>
                                          <a href="./dashboard">Dashboard</a>
                                        </li>
                                        <li>
                                          <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a>
                  
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                        </li>
                                        @endguest
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="./appointments">Appointments</a></li>
										<li><a href="./chat">Inbox</a></li>
                                        @guest
                                            <li>
                                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                        <li>
                                          <a href="./dashboard">Dashboard</a>
                                        </li>
                                        <li>
                                          <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a>
                  
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                        </li>
                                        @endguest
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 90, Aladelola Street, Ketu, Lagos<br> Nigeria</p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+234 802 551 0164
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											info@medicpin.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"> Medicpin © Copyright 2021 | Protect Yourself.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="./terms">Terms and Conditions</a></li>
											<li><a href="./privacy">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
        <script>
            jQuery(function($) {
                var p = $("#previewimage");
         
                $("body").on("change", ".image", function(){
                    var imageReader = new FileReader();
                    imageReader.readAsDataURL(document.querySelector(".image").files[0]);
         
                    imageReader.onload = function (oFREvent) {
                        p.attr('src', oFREvent.target.result).fadeIn();
                    };
                });
                $('#previewimage').imgAreaSelect({
        maxWidth: '1000', // this value is in pixels
        onSelectEnd: function (img, selection) {
            $('input[name="x1"]').val(selection.x1);
            $('input[name="y1"]').val(selection.y1);
            $('input[name="w"]').val(selection.width);
            $('input[name="h"]').val(selection.height);            
        }
    });
            });
            </script>
          <script>  
        function yesnoCheck(that) {
          //for reg page
          if (that.value == "Doctor") {
              document.getElementById("selectex").style.display = "block";
          } else {
              document.getElementById("selectex").style.display = "none";
          }
          if (that.value == "Married") {
              document.getElementById("children").style.display = "block";
          } else {
              document.getElementById("children").style.display = "none";
          }
          if (that.value == "Divorced") {
              document.getElementById("children").style.display = "block";
          } else {
              document.getElementById("children").style.display = "none";
          }
          if (that.value == "Widowed") {
              document.getElementById("children").style.display = "block";
          } else {
              document.getElementById("children").style.display = "none";
          }
          if (that.value == "HMO") {
              document.getElementById("hmoname").style.display = "block";
              document.getElementById("role").style.display = "none";
              document.getElementById("m_status").style.display = "none";
          } else {
              document.getElementById("hmoname").style.display = "none";
          }
          if (that.value == "Organization") {
              document.getElementById("orgname").style.display = "block";
              document.getElementById("role").style.display = "none"
              document.getElementById("m_status").style.display = "none";
          } else {
              document.getElementById("orgname").style.display = "none";
          }
          if (that.value == "Personal/Individual") {
             document.getElementById("role").style.display = "block";
              document.getElementById("m_status").style.display = "block";
          } 
          if (that.value == "Patient") {
              document.getElementById("nhis").style.display = "block";
              document.getElementById("add").style.display = "block";
              document.getElementById("username").style.display = "block";
          } else {
              document.getElementById("nhis").style.display = "none";
              document.getElementById("add").style.display = "none";
              document.getElementById("username").style.display = "none";
          }
          if (that.value == "NHIS") {
             document.getElementById("nhiss").style.display = "block";
          } else {
              document.getElementById("nhiss").style.display = "none";
          }
    
    
          if (that.value == "Breast Surgery") {
              document.getElementById("Breast").style.display = "block";
              document.getElementById("Breast").style.paddingTop = "16px";
          } else {
              document.getElementById("Breast").style.display = "none";
              document.getElementById("Breast").style.paddingTop = "0";
          }
          if (that.value == "Colon and Rectal Surgery") {
              document.getElementById("Colon").style.display = "block";
              document.getElementById("Colon").style.paddingTop = "16px";
          } else {
              document.getElementById("Colon").style.display = "none";
              document.getElementById("Colon").style.paddingTop = "0";
          }
          if (that.value == "Endocrine Surgery") {
              document.getElementById("Endocrine").style.display = "block";
              document.getElementById("Endocrine").style.paddingTop = "16px";
          } else {
              document.getElementById("Endocrine").style.display = "none";
              document.getElementById("Endocrine").style.paddingTop = "0";
          }
          if (that.value == "Gynecological Surgery") {
              document.getElementById("Gynecological").style.display = "block";
              document.getElementById("Gynecological").style.paddingTop = "16px";
          } else {
              document.getElementById("Gynecological").style.display = "none";
              document.getElementById("Gynecological").style.paddingTop = "0";
          }
          if (that.value == "Orthopedic Surgery") {
              document.getElementById("Orthopedic").style.display = "block";
              document.getElementById("Orthopedic").style.paddingTop = "16px";
          } else {
              document.getElementById("Orthopedic").style.display = "none";
              document.getElementById("Orthopedic").style.paddingTop = "0";
          }
          if (that.value == "Outpatient Surgery") {
              document.getElementById("Out").style.display = "block";
              document.getElementById("Out").style.paddingTop = "16px";
          } else {
              document.getElementById("Out").style.display = "none";
              document.getElementById("Out").style.paddingTop = "0";
          }
          if (that.value == "Robotic Surgery") {
              document.getElementById("Robotic").style.display = "block";
              document.getElementById("Robotic").style.paddingTop = "16px";
          } else {
              document.getElementById("Robotic").style.display = "none";
              document.getElementById("Robotic").style.paddingTop = "0";
          }
          if (that.value == "Thoracic Surgery") {
              document.getElementById("Thoracic").style.display = "block";
              document.getElementById("Thoracic").style.paddingTop = "16px";
          } else {
              document.getElementById("Thoracic").style.display = "none";
              document.getElementById("Thoracic").style.paddingTop = "0";
          }
          if (that.value == "Vascular Surgery") {
              document.getElementById("Vascular").style.display = "block";
              document.getElementById("Vascular").style.paddingTop = "16px";
          } else {
              document.getElementById("Vascular").style.display = "none";
              document.getElementById("Vascular").style.paddingTop = "0";
          }
      }
      </script>
    <script>
        
      $(function () {
        $("input.form-control.fie").slice(0, 1).show();
        $("#loadMoreeinput").on('click', function (e) {
            e.preventDefault();
            $("input.form-control.fie:hidden").slice(0, 1).slideDown();
            if ($("input.form-control.fie:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
      });
      $(function () {
        $("div.fie.one").slice(0, 1).show();
        $("#loadMoreeinputt").on('click', function (e) {
            e.preventDefault();
            $("div.fie.one:hidden").slice(0, 1).slideDown();
            if ($("div.fie.one:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
      });
      $(function () {
        $("div.two").slice(0, 1).show();
        $("#loadMoreeinput").on('click', function (e) {
            e.preventDefault();
            $("div.two:hidden").slice(0, 1).slideDown();
            if ($("div.two:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
      });
      </script>
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Circle Progress JS -->
		<script src="assets/js/circle-progress.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 21:49:30 GMT -->
</html>