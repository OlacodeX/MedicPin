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

        <!-- Fonts -->
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
                } else {
                document.getElementById("myBtn").style.display = "none";
                }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }



 
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    
            </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            function openNavOne() {
              document.getElementById("myNav").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
            }
            
            function closeNavOne() {
              document.getElementById("myNav").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
            }     
                
                        </script>
        <!-- GetButton.io widget
        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+2348123035681", // WhatsApp number
                    call_to_action: "Live chat", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
        /GetButton.io widget -->
        </div>
        
    </body>
</html>
