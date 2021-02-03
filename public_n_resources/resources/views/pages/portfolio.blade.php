@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Portfolio 
@endsection
@section('content')
@include('inc.homestyle')
<style>
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
    .container-fluid.bg{
        margin-top: 90px;
        background: transparent;
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
</style>
            @include('inc.navv')

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
            </div>
    
    @include('inc.footer')


@endsection