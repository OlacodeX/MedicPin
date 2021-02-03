@extends('layouts.main')
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="OlacodeX" />

<style>
    #main {
      transition: margin-left .5s;
      padding: 16px;
    }
footer p.text-center{
    padding-bottom: 20px;
    margin-bottom: 0;
    }
.panel-default.ad{
    border-radius: 0;
    margin-top: 20px;
    border: none;
    }
    .panel-default.ad a{
    text-decoration: wavy;
    color: #b20000;
    }
    .panel-default.ad .panel-heading{
    padding-top: 30px;
    padding-bottom: 0px;
    }
    .panel-default{
    border-radius: 0;
    border: none;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;

    }
    
    div.col-sm-9.img2 .panel-default{
    border-radius: 0;
    box-shadow: 5px 15px 5px 15px #f1f1f1;
    border: none;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 100px;

    }
    .panel-body p,
    .panel-body span{
    font-size: 13px;
    }
    .panel-body{
    font-size: 13px;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;
    color: #171919;
    padding-bottom: 100px;
    }
    .panel-body h2.title{
        color: #b20000;
        font-weight: bold;
        padding-top: 0;
        margin-top: 0;
}
a.slice{
    display:none;
}
    a.btn.btn-success{
        background: transparent;
        border: #B20000 solid 1px;
        color: #B20000;
        border-radius: 0;
        padding: 5px;
        margin-right: 10px;
        margin-top: 20px;
    }
    a.btn.btn-success:hover{
        background: #B20000;
        border: #B20000 solid 1px;
        color: #f1f1f1;
        border-radius: 3px;
    }
#loadMoree {
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
    text-transform: uppercase;
}
div.container.inbox{
        padding-bottom: 200px;
        padding-right: 60px;
}
    .col-sm-9.img2 img{
        height: 250px;
        padding-left: 20px;
}
    .col-sm-9.img2 h2{
        padding-top: 30px;
        padding-left: 20px;
}
    .col-sm-9.img2 p,
    .col-sm-9.img2 small{
        padding-left: 20px;
        text-align: justify;
}
.col-sm-3.last{
}
.col-sm-3.last li{
      padding-bottom: 10px;
}
.col-sm-3.last li a{
text-decoration: none;
}
a.btn.btn-default{
background: transparent;
border-radius: 0;
font-size: 13px;
border: 1px solid #b20000;
color: #b20000;
margin-bottom: 10px;
}

span.glyphicon{
margin-top: 0px;
padding-right: 160px;
font-size: 15px;
color: #545454;
}
div.col-sm-3 input{
width: 200px;
border-radius: 0px;
background: rgba(196, 194, 194, 0.178);
border: none;
}
a.pull-left{
    margin-left: 20px;
    border-radius: 0;
    margin-bottom: 30px;
}
a.btn-info{
border: 1px solid #b20000;
color: #f1f1f1;
    border-radius: 0;
    background: #b20000;
    margin-top: 20px;
}
a.btn-info:hover{
    background: transparent;
    border: 1px solid #b20000;
    color: #b20000;
}
h3.title,
h2.title{
        color: #171919;
        font-weight: bold;
}
h3.title span{
        color: #b20000;
        font-weight: bold;
}
h2.titlem{
        color: #f1f1f1;
        font-weight: bold;
}
        li{
            list-style: square;
            color: #b20000;
        }
        .col-sm-3 li a{
text-decoration: none;
color: #b20000;
}

.col-sm-9 .page-item.active .page-link {
z-index: 1;
color: #fff;
background-color: #b20000;
border-color: #b20000;
}
.col-sm-9 .page-item .page-link {
color: #b20000;
}
.col-sm-9 p{
text-align: justify;
padding-top: 10px;
padding-right: 80px;
    }
        @media only screen and (max-width: 768px) {
        
    .col-sm-3.img1 img{
        height: 300px;
        width: 300px;
        padding-right: 0px;
        margin-left: 30px;
        margin-bottom: 10px;
} 
    .col-sm-9.img2 h2{
        padding-top: 30px;
        padding-left: 20px;
        padding-right: 20px;
}
    .col-sm-9.img2 p,
    .col-sm-9.img2 small{
        padding-left: 20px;
        padding-right: 20px;
        text-align: justify;
}
    .col-sm-9.img2 img{
        height: 300px;
        width: 330px;
        padding-right: 0px;
        margin-left: 6px;
        margin-bottom: 10px;margin-top: 100px;
}
.col-sm-3.last{
        padding-left: 50px;
        padding-top: 100px;
}
    .jumbotron.text-center p{
        padding: 5px 50px 5px 50px;
}

}
</style>
@section('page_title')
{{config('app.name')}} | Inbox
@endsection
@section('content')
    @include('inc.navadmin')
    <div class="" id="main" style="margin-left:250px">
    <div class="container inbox">
        <div class="col-sm-9 img2">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3 class="title">Your <span>Inbox</span></h3>
                </div>

                @if (
                    //if there is data in the db
                count($allmessages) > 0
                )

                @if (
                    //if there is data in the db
                count($messages) > 0
                )
            
        @foreach (
            // Loop through them
            $messages as $message
            )

<h2 class="title">From {{$message->sender_name}}</h2>
<a href="chat/{{$message->id}}" style="text-decoration: none;">
<div class="panel-body">
<p><strong>{!!Str::words($message->message,8)!!}</strong></p>
<small><i class="fa fa-calendar"></i>{!!$message->created_at!!}</small>
</div>
</a>
 @endforeach
         
 @endif
          

 @if (
    //if there is data in the db
 count($omessages) > 0
)  
 @foreach (
     // Loop through them
     $omessages as $omessage
     )

<h2 class="title">From {{$omessage->sender_name}}</h2>
<a href="chat/{{$omessage->id}}" class="slice" style="text-decoration: none;">
<div class="panel-body">
<p>{!!Str::words($omessage->message,8)!!}</p>
<small><i class="fa fa-calendar"></i>{!!$omessage->created_at!!}</small>
</div>
</a>
@endforeach
<a href="" id="loadMoree" class="btn btn-success pull-right">LOAD MORE MESSAGES</a> 
     @endif
     @else
     <p class="text-center">No message found</p>
     @endif
</div> 
    </div> 
        <div class="col-sm-3 img1">
            <h3 class="title">Tags</h3>
            <hr class="hrr">
            <a href="./chatread" class="btn btn-default">Read</a>
            <a href="./chatunread" class="btn btn-default">Unread</a>
            <a href="./alllistings" class="btn btn-default">Ad Listings</a>
            <a href="./contact" class="btn btn-default">Talk To Us</a>
           <a href="./adintro"><img src="img/add.png" alt="" class="img-responsive"></a> 
            <div class="panel-group">
            <div class="panel panel-default ad">
                <a data-toggle="collapse" href="#collapse1">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">
                    Safety Tips
                    </h4>
                    <hr>
                </div>
                </a>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul>
                        <li>Meet seller at a safe location</li>
                        <li>Check the item before you buy</li>
                        <li>Pay only after collecting item</li>
                    </ul>
                </div>
              </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

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
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection