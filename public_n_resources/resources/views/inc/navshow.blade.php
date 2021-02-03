<style>
 
 .container-fluid.top{
    background-color:transparent; 
    margin-bottom:0;
    padding: 15px 0px 15px 50px;
    color: rgba(68, 221, 97, 0.92);
  }
  .container-fluid.top .fa,
  .container-fluid.top a{
    font-size: 15px;
    font-weight: bold;
  }
  .container-fluid.top span.float{
    float:right;
    color: rgba(68, 221, 97, 0.92);
  }
    nav.navbar.navbar-default div.container-fluid,
    nav.navbar.navbar-default,
    .navbar-header{
        background-color: transparent;
        border: none;
    }
    a.navbar-brand img{
      margin-top: 0;
      padding-top: 0px;
      height: 100px;
      padding-bottom: 50px;
      border: none;
    }

    a.navbar-brand{
      padding-top: 10px;
      padding-left: 50px;
      border: none;
    }
    button.navbar-toggle{
      border: none;
      background: transparent;
      border: none;
      opacity: 1;
      color: transparent;
    }
    button:hover{
      border: none;
      outline: 0;
      opacity: 0.7;
    }
    div.collapse.navbar-collapse{
      border: none;
      border-bottom: none;
      border-top: none;
    }
    
    .nav.navbar-nav{
        padding-left: 30px;
        font-weight: 300;
        color: #2b2732;
       border: none;
    }
    .nav.navbar-nav li a{
        font-weight: 700;
        font-size: 15px;
        line-height: 1.5em;
        color: #2b2732;
        border: none;
    }
    @media only screen and (min-width: 600px) {
    a.navbar-brand img{
      margin-top: 0;
      padding-top: 0px;
      height: 80px;
      padding-bottom: 50px;
      border: none;
    }

    a.navbar-brand{
      padding-top: 10px;
      padding-left: 20px;
      border: none;
    }
      
  .container-fluid.top span.float{
    float:none;
    color: rgba(68, 221, 97, 0.92);
  }
  .container-fluid.top .fa,
  .container-fluid.top a{
    font-size: 10px;
    font-weight: bold;
  }
    .nav.navbar-nav li a{
        font-weight: 300;
        font-size: 10px;
        line-height: 1.5em;
        color: #2b2732;
        border: none;
    }
    .navbar-header{
        background-color: transparent;
        border: none;
        background: transparent;
        box-shadow: none;
    }
  }
    @media only screen and (max-width: 768px) {
      
  .container-fluid.top{
    background-color:transparent; 
    margin-bottom:0;
    padding: 15px 0px 15px 0px;
    color: rgba(68, 221, 97, 0.92);
  }
  .container-fluid.top .fa,
  .container-fluid.top a{
    font-size:9px;
    font-weight: bold;
  }
  .container-fluid.top span.float{
    float:none;
    color: rgba(68, 221, 97, 0.92);
  }
    a.navbar-brand img{
      margin-top: 0;
      padding-top: 0px;
      height: 100px;
      padding-bottom: 50px;
      border: none;
    }
    a.navbar-brand{
      padding-top: 10px;
      padding-left: 10px;
      border: none;
    }
    button.navbar-toggle{
      border: none;
      background: transparent;
      border: none;
      margin-top: 20px;
    }
    button i.fa.fa-list{
      font-size: 40px;
      font-weight: normal;
      color: #ffffff;
      background: transparent;
      border: none;
      padding: 0;
      color: rgba(68, 221, 97, 0.92);
    }
    }
/***
.nav.navbar-nav.navbar-right li a .fa-twitter{
    color: rgb(48, 206, 206);
    font: 100;
    color: aliceblue;
    font-size: 15px;
    
}
.nav.navbar-nav.navbar-right li a .fa-facebook{
    font: 100;
    font-size: 15px;
    color: aliceblue;
}

.nav.navbar-nav.navbar-right li a .fa-whatsapp{
    font: 100;
    font-size: 15px;
    color: aliceblue;
}**/

  </style>
  
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header" style="border: none;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: none;">
            <i class="fa fa-list"></i>
       </button>
       <a class="navbar-brand" href="../"><img src="{{URL::asset('img/logo.png')}}" alt="logo" class="img-responsive" style="border: none;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" style="border: none;">
          <ul class="nav navbar-nav" style="border: none;">          
            <li><a style="color:rgba(68, 221, 97, 0.92);" href="https://www.twitter.com/olacodex"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=2348123035681" style="color:rgba(68, 221, 97, 0.92);"><i class="fa fa-whatsapp" style="font-weight:300;padding-right:5px;"></i></a></li> 
              
            <li><a href="https://www.facebook.com/aluko.olawale1" style="color:rgba(68, 221, 97, 0.92);"><i class="fa fa-facebook"></i></a></li>                    
     
            <li><a href="../">Home</a></li>
            <li><a href="../hireus">Hire Us</a></li>
            <li><a href="../pricelist">Pricing</a></li>
            <li><a href="../portfolio">Portfolio</a></li>
            <li><a href="../services">Services</a></li>
            <li><a href="../reachout">Contact Us</a></li>
            <li><a href="../posts">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="border: none;">
            <li><a target="blank"style="text-decoration:none; color:rgba(68, 221, 97, 0.92);" href="mailto:hello@gowwide.com?Subject=Hello Gowwwide, I Have an Enquiry"><i class="fa fa-envelope-o" style="color:rgba(68, 221, 97, 0.92);"></i>hello@gowwide.com</a></li>
            <li><a target="blank" style="text-decoration:none; color:rgba(68, 221, 97, 0.92);" href="tel:2348123035681"><i class="fa fa-phone" style="color:rgba(68, 221, 97, 0.92);"></i>+2348123035681</a></li>
          </ul>
        </div>
      </div>
    </nav>