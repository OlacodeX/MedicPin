@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Services
@endsection
@section('content')
@include('inc.homestyle')
<style>
    
    .container.pricing{
        margin-top: 90px;
        padding-bottom: 70px;
    }
    div.text-center{
        padding-bottom: 20px;
    }
    nav button i.fa.fa-list{
      font-size: 40px;
      font-weight: normal;
      color: rgba(68, 221, 97, 0.92);
      border: none;
      padding: 0;
    }
  .container-fluid.top span.float{
    float:right;
    color: rgba(68, 221, 97, 0.92);
    padding-right: 10px;
  }
 div.container-fluid.top{
    background-color:transparent; 
    margin-bottom:0;
    padding: 15px 0px 15px 10px;
    color: rgba(68, 221, 97, 0.92);
  }
        nav.navbar.navbar-default div.container-fluid,
    nav.navbar.navbar-default,
    .navbar-header{
        box-shadow: 0 3px 3px 0 rgba(204, 202, 202, 0.685);
        border-radius: 0;
        padding-bottom: 10px;
        /**position: fixed;**/
        background: rgba(68, 221, 97, 0.92);
        z-index: 99;
        }
</style>
@include('inc.navv')

<div class="container-fluid services">
    <div class="jumbotron text-center">
        <h3 class="titles">OUR SERVICES <br><i class="fa fa-contao" style="color:rgba(68, 221, 97, 0.92);"></i></h3>
        
    </div>
    <div class="col-sm-3 one">
        <div class="bottom-left">
          <i class="fa fa-sitemap"></i> <br>
           <h4 class="text-center">
            WEB DEVELOPMENT/DESIGN
           </h4>
        </div>
    <div class="top-left">
        <b>01 </b>
    </div>

    </div>
    <div class="col-sm-3 two">
        <div class="bottom-left">
          <i class="fa fa-window-restore"></i> <br>
           <h4 class="text-center">
            WEB MANAGEMENT
           </h4>
        </div>
    <div class="top-left">
        <b>02 </b>
    </div>

    </div>
    <div class="col-sm-3 three">
        <div class="bottom-left">
          <i class="fa fa-search-plus"></i> <br>
           <h4 class="text-center">
           SEARCH ENGINE OPTIMIZATION
           </h4>
        </div>
    <div class="top-left">
        <b>03 </b>
    </div>

    </div>
    
    <div class="col-sm-3 four">
        <div class="bottom-left">
          <i class="fa fa-object-group"></i> <br>
           <h4 class="text-center">
            GRAPHIC DESIGN
           </h4>
        </div>
    <div class="top-left">
        <b>04 </b>
    </div>
    </div>
    <div class="text-center">
        <a href="hireus" class="btn btn-success">HIRE US <i class="fa fa-arrow-right"></i></a>
    </div>
</div>
<div class="container-fluid why">
    <div class="container">
        <div class="col-sm-4">
            <img src="img/b6.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8">
            <h6 class="text-justify">WHY US?</h6>
            <h4 class="text-justify">WONDERING WHY YOU SHOULD HIRE US?</h4>
            <br><br>
            <div class="col-sm-6">
                <i class="fa fa-recycle"></i>
                <h6>EFFICIENT</h6>
                <p>
                    With our highly experienced team, we give you value for your money.
                    We give you nothing short of satisfaction, you can count on us to meet your needs.
                </p>
            </div>
            <div class="col-sm-6">
                <i class="fa fa-ra"></i>
                <h6>PROFESSIONAL</h6>
                <p>
                    We at Gowwwide pride ourselves in creating working, paying and beautiful websites. This
                    is what we do and we are not planning to make an exception with you. Try us today!.
                </p>
            </div>
            <div class="col-sm-6" style="margin-top:20px;">
                <i class="fa fa-yelp"></i>
                <h6>EXPERIENCED</h6>
                <p>
                    Our team is made up of experts in their respective fields with years of proven experience.
                </p>
            </div>
            <div class="col-sm-6" style="margin-top:20px;">
                <i class="fa fa-hourglass-o"></i>
                <h6>ON TIME</h6>
                <p>
                    Yes! we keep to our word. As far you are ready we are ready too. 
                    When we have an agreement, we make it work!
                </p>
            </div>
        </div>
    </div>
    <div class="container pricing">
        <h3 class="text-center titles">OUR PRICING PLAN</h3>
        <div class="col-sm-4">
            <div class="panel-default">
                <div class="panel-body">
                    <h4 class="text-justify">Basic <br><i class="fa fa-ellipsis-h"></i></h4>
                    <h2><i>Starting from</i> <span>₦</span>33,000/<span>$</span>90<br><i class="fa fa-ellipsis-h green"></i></h2>
                    <p>Plan includes:</p>
                    <ul>
                        <li>4 Pages design (Home, About, Contact, Services)</li>
                        <li class="green">1 Design Sketch (Hand drawn)</li>
                        <li class="green">Hosting</li>
                        <li class="green">Domain Name</li>
                        <li>Customized Email (Max. 5)</li>
                        <li>Social Media integration</li>
                        <li class="green">3Months management</li>
                    </ul>
                    <hr class="hrr">
                    <p class="text-center">
                        Yearly Renewal @ <span>₦</span>20,000/<span>$</span>55
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel-default">
                <div class="panel-body">
                    <h4 class="text-justify">Enterprise<br><i class="fa fa-ellipsis-h"></i></h4>
                    <h2><i>Starting from</i> <span>₦</span>60,000/<span>$</span>164<br><i class="fa fa-ellipsis-h green"></i></h2>
                    <p>Plan includes:</p>
                    <ul>
                        <li>Maximum of 10pages</li>
                        <li class="green">3 Design Sketch (Hand drawn)</li>
                        <li class="green">Hosting</li>
                        <li class="green">Domain Name</li>
                        <li>Customized Email (Max. 10)</li>
                        <li class="green">Live Chat</li>
                        <li>Logo Design (Max. 3 design concepts)</li>
                        <li>Social Media integration</li>
                        <li class="green">Basic SEO</li>
                        <li>Database integration</li>
                        <li class="green">SSL</li>
                        <li>Basic Authentication</li>
                        <li class="green">1Year management</li>
                    </ul>
                    <hr class="hrr">
                    <p class="text-center">
                        Yearly Renewal @ <span>₦</span>30,000/<span>$</span>82
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel-default">
                <div class="panel-body">
                    <h4 class="text-justify">PRO<br><i class="fa fa-ellipsis-h"></i></h4>
                    <h2><i>Starting from</i> <span>₦</span>100,000/<span>$</span>273<br><i class="fa fa-ellipsis-h green"></i></h2>
                    <p>Plan includes:</p>
                    <ul>
                        <li>15-20Pages</li>
                        <li class="green">5 Design Sketch (Hand drawn)</li>
                        <li class="green">Hosting</li>
                        <li class="green">Domain Name</li>
                        <li>Customized Email (Max. 20)</li>
                        <li class="green">Live Chat</li>
                        <li>Logo Design (Max. 5 design concepts)</li>
                        <li class="green">Advanced SEO</li>
                        <li>Blog</li>
                        <li class="green">Social Media integration</li>
                        <li>Database integration</li>
                        <li class="green">Hosting</li>
                        <li>Authentication</li>
                        <li class="green">SSL</li>
                        <li>Payment Gateway</li>
                        <li class="green">1Year management</li>
                    </ul>
                    <hr class="hrr">
                    <p class="text-center">
                        Yearly Renewal @ <span>₦</span>40,000/<span>$</span>109
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="hireus" class="btn btn-success">HIRE US NOW</a>
        <p class="pad">
            Need to customize your plan to accomodate extra features such as,E-commerce, admin panel? <a href="reachout" class="">Send Us An Enquiry</a>
        </p>
    </div>
</div>
<div class="container-fluid bg">
    <h3 class="titles">OUR PORTFOLIO</h3>
    <p>
        Our past jobs speaks for themselves.
    </p>
</div>
<div class="container-fluid portfolio">
            
    @if (
        //if there is data in the db
    count($portfolios) > 0
    )
        @foreach (
                    // Loop through them
                    $portfolios as $portfolio
                    )
    <div class="col-sm-3">
        <div class="container folio">
            <img src="img/cover_img/{{$portfolio->image}}" alt="portfolio{{$portfolio->id}}" class="image">
            <div class="overlay">
            <p>
                <a href="#" class="icon" title="">
                <i class="fa fa-skyatlas"></i>
                </a>
                {{$portfolio->Description}} <br><br><br><a href="{{$portfolio->url}}" class="btn btn-success">CHECK WEBSITE</a>
            </p>
            </div>
        </div>
    </div>
    @endforeach

@endif
</div>
<style type="text/css">
    a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
    a.gflag img {border:0;}
    a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
    #goog-gt-tt {display:none !important;}
    .goog-te-banner-frame {display:none !important;}
    .goog-te-menu-value:hover {text-decoration:none !important;}
    body {top:0 !important;}
    #google_translate_element2 {display:none!important;}
    </style>
    
    <br /><div id="google_translate_element2"></div>
    <script type="text/javascript">
    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
    </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    
    
    <script type="text/javascript">
    /* <![CDATA[ */
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
    /* ]]> */
    </script>
    
    @include('inc.footer')


@endsection