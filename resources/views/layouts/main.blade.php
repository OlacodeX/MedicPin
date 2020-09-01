<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <meta name="description" content="@yield('page_description', 'Medicpin')" /> 
        <meta name="description" content="Medicpin,EHR SERVICES,Manage appointments, access medical records anytime, Migrate from paper records to cloud data management" />
        <meta name="keywords" content="Medicpin,EHR SERVICES,Manage appointments, access medical records anytime, Migrate from paper records to cloud data management" />
        <meta name="author" content="OlacodeX" />
        <title>@yield('page_title', 'Medicpin')</title>
        <link rel="icon" href="{{asset('img/yy.jpg')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./csss/bootstrap.min.css">
  <!-- Typography CSS -->
  <link rel="stylesheet" href="./csss/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="./csss/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="./csss/responsive.css">
   <!-- Full calendar -->
  <link href='./fullcalendarr/core/main.css' rel='stylesheet' />
  <link href='./fullcalendarr/daygrid/main.css' rel='stylesheet' />
  <link href='./fullcalendarr/timegrid/main.css' rel='stylesheet' />
  <link href='./fullcalendarr/list/main.css' rel='stylesheet' />

  <link rel="stylesheet" href="./csss/flatpickr.min.css">

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
      color: #0084ff;
      font-weight: 900;
    }
    
    /* align glyph 
    .left-addon .fa  { left:  0px;}*/
    .right-addon .fa { right: 0px;}
    
    /* add padding 
    .left-addon input  { padding-left:  30px; } */
    .right-addon input { padding-right: 30px; }
        body{
                margin: 0;
                padding: 0;
                background: #ffffff;
                font-family: 'Poppins', sans-serif;
                font-style: normal; 
                font-size: 14px;
                 line-height: 1.8;
                overflow-x: hidden;
                height: 100%;
                width: 100%;
                
        }
        .container-fluid{
            background-color: rgba(255, 255, 255, 0.753);
        }
            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }
            
            #myBtn:hover {
                background-color: #555;
            }

            
            .fa{
                
                padding: 7px;
            }
            .fa-github{
                color: rgb(0, 0, 0);
            }
            h1, h2, h3, h4, h5, h6 { font-family: 'Questrial', sans-serif; font-weight: 600; margin: 0px; line-height: 1.5; color: #374948; }
            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: inherit; }
            label { font-weight: normal; }
            h1 { font-size: 3.052em; }
            h2 { font-size: 2.300em; }
            h3 { font-size: 1.953em; }
            h4 { font-size: 1.400em; }
            h5 { font-size: 1.200em; }
            h6 { font-size: 1.0em; }
        </style>
    </head>
    <body>
        @yield('content')
      

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./jss/jquery.min.js"></script>
        <script src="./jss/popper.min.js"></script>
        <script src="./jss/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="./jss/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="./jss/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="./jss/waypoints.min.js"></script>
        <script src="./jss/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="./jss/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="./jss/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="./jss/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="./jss/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="./jss/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="./jss/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="./jss/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="./jss/lottie.js"></script>
        <!-- am core JavaScript -->
        <script src="./jss/core.js"></script>
        <!-- am charts JavaScript -->
        <script src="./jss/charts.js"></script>
        <!-- am animated JavaScript -->
        <script src="./jss/animated.js"></script>
        <!-- am kelly JavaScript -->
        <script src="./jss/kelly.js"></script>
        <!-- Flatpicker Js -->
        <script src="./jss/flatpickr.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="./jss/chart-custom.js"></script>
        <!-- Custom JavaScript -->
      <script>  
    function yesnoCheck(that) {
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
  </script>
        <script src="./jss/custom.js"></script>   
        <!-- Footer END --> 
         <script src="{{ URL::asset('./vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'pre' );
            CKEDITOR.replace( 'note' );
         </script> 
        
    </body>
</html>
