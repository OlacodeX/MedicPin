<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    .navbar-default{
        background: transparent;
        border-bottom: none;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 10px;
        font-weight: bold;
        font-size: 25px;
        line-height: 2em;
        font-family: 'Girassol', cursive;
    }
    .navbar-fixed-top{
        background: #000;
    }
    a.navbar-brand{
        font-size: 25px;
    }
    .navbar-default a.navbar-brand span{
            color: #000;
           }
    .navbar-fixed-top a.navbar-brand span{
            color: white;
           }
</style>
<nav class="navbar navbar-default navbar-fixed-top" id="fixed">
  <div class="container-fluid" id="fixed">
    <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
      <a class="navbar-brand" href="#"><span>T</span>he<span>CV</span>M<span>anag</span>er</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class=""><a href="/lay">Register</a></li>
      <li class=""><a href="#">Login</a></li>
    </ul>
  </div>
  </div>
</nav>
<!---
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 20){
            $('#fixed').addClass('navbar-fixed');
        }
        else{
            $('#fixed').removeClass('navbar-fixed-top');
        }
    })
</script>---->
   <script>
       $(document).ready(function(){
        $(window).scroll(function(){
        if ($(document).scrollTop() > 50){
            $('nav').addClass('navbar-fixed-top');
        }
        else{
            $('nav').removeClass('navbar-fixed-top');
        }
        });
    });
                 
    </script>