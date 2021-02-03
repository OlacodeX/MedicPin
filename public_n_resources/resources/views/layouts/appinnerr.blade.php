<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="Website development, website management and search engine optimization" />
    <meta name="keywords" content="Gowwwide, Go world wide, web design, web development, website, seo, search engine optimization, website design, website development." />
    <meta name="author" content="OlacodeX" />
    <title>@yield('page_title', 'Gowwwide')</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
    a.navbar-brand img{
      margin-top: 0;
      padding-top: 0px;
      height: 40px;
      padding-bottom: 0px;
      border: none;
    }

    a.navbar-brand{
      padding-top: 10px;
      padding-left: 50px;
      border: none;
    }
    .fa.fa-home{
        color: rgba(68, 221, 97, 0.92);
        font-weight: bold;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="../"><img src="{{URL::asset('img/logo.png')}}" alt="logo" class="img-responsive" style="border: none;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./"><i class="fa fa-home"></i></a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../../portfolios/create">
                                        Add Portfolio
                                    </a>
                                    <a class="dropdown-item" href="../../posts">
                                        Blog
                                    </a>
                                    <a class="dropdown-item" href="../../contacts">
                                        Contacts/Enquiries
                                    </a>
                                    <a class="dropdown-item" href="../../hire">
                                        Job Requests
                                    </a>
                                    <a class="dropdown-item" href="../../portfolios">
                                        Portfolios
                                    </a>
                                    <a class="dropdown-item" href="../../home">
                                        Posts
                                    </a>
                                    <a class="dropdown-item" href="{{ route('register') }}">
                                        {{ __('Register an Admin') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


<div style="position:fixed;bottom:0px;right:8%;z-index:999999;" id="gtranslate_wrapper"><!-- GTranslate: https://gtranslate.io/ -->
    <style type="text/css">
    .switcher {font-family:Arial;font-size:10pt;text-align:left;cursor:pointer;overflow:hidden;width:163px;line-height:17px;}
    .switcher a {text-decoration:none;display:block;font-size:10pt;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
    .switcher a img {vertical-align:middle;display:inline;border:0;padding:0;margin:0;opacity:0.8;}
    .switcher a:hover img {opacity:1;}
    .switcher .selected {background:#FFFFFF url(//amaslink.com/wp-content/plugins/gtranslate/switcher.png) repeat-x;position:relative;z-index:9999;}
    .switcher .selected a {border:1px solid #CCCCCC;background:url(//amaslink.com/wp-content/plugins/gtranslate/arrow_down.png) 146px center no-repeat;color:#666666;padding:3px 5px;width:151px;}
    .switcher .selected a.open {background-image:url(//amaslink.com/wp-content/plugins/gtranslate/arrow_up.png)}
    .switcher .selected a:hover {background:#F0F0F0 url(//amaslink.com/wp-content/plugins/gtranslate/arrow_down.png) 146px center no-repeat;}
    .switcher .option {position:relative;z-index:9998;border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC;background-color:#EEEEEE;display:none;width:161px;max-height:198px;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;}
    .switcher .option a {color:#000;padding:3px 5px;}
    .switcher .option a:hover {background:#FFC;}
    .switcher .option a.selected {background:#FFC;}
    #selected_lang_name {float: none;}
    .l_name {float: none !important;margin: 0;}
    .switcher .option::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);border-radius:5px;background-color:#F5F5F5;}
    .switcher .option::-webkit-scrollbar {width:5px;}
    .switcher .option::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:#888;}
    </style>
    <div class="switcher notranslate">
    <div class="selected">
    <a href="#" onclick="return false;"><img src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/en.png" height="16" width="16" alt="en"> English</a>
    </div>
    <div class="option">
    <a href="#" onclick="doGTranslate('en|af');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Afrikaans" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/af.png" height="16" width="16" alt="af"> Afrikaans</a>
    <a href="#" onclick="doGTranslate('en|sq');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Albanian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sq.png" height="16" width="16" alt="sq"> Albanian</a>
    <a href="#" onclick="doGTranslate('en|am');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Amharic" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/am.png" height="16" width="16" alt="am"> Amharic</a>
    <a href="#" onclick="doGTranslate('en|ar');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Arabic" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ar.png" height="16" width="16" alt="ar"> Arabic</a>
    <a href="#" onclick="doGTranslate('en|hy');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Armenian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/hy.png" height="16" width="16" alt="hy"> Armenian</a>
    <a href="#" onclick="doGTranslate('en|az');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Azerbaijani" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/az.png" height="16" width="16" alt="az"> Azerbaijani</a>
    <a href="#" onclick="doGTranslate('en|eu');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Basque" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/eu.png" height="16" width="16" alt="eu"> Basque</a>
    <a href="#" onclick="doGTranslate('en|be');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Belarusian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/be.png" height="16" width="16" alt="be"> Belarusian</a>
    <a href="#" onclick="doGTranslate('en|bn');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Bengali" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/bn.png" height="16" width="16" alt="bn"> Bengali</a>
    <a href="#" onclick="doGTranslate('en|bs');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Bosnian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/bs.png" height="16" width="16" alt="bs"> Bosnian</a>
    <a href="#" onclick="doGTranslate('en|bg');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Bulgarian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/bg.png" height="16" width="16" alt="bg"> Bulgarian</a>
    <a href="#" onclick="doGTranslate('en|ca');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Catalan" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ca.png" height="16" width="16" alt="ca"> Catalan</a>
    <a href="#" onclick="doGTranslate('en|ceb');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Cebuano" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ceb.png" height="16" width="16" alt="ceb"> Cebuano</a>
    <a href="#" onclick="doGTranslate('en|ny');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Chichewa" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ny.png" height="16" width="16" alt="ny"> Chichewa</a>
    <a href="#" onclick="doGTranslate('en|zh-CN');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Chinese (Simplified)" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/zh-CN.png" height="16" width="16" alt="zh-CN"> Chinese (Simplified)</a>
    <a href="#" onclick="doGTranslate('en|zh-TW');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Chinese (Traditional)" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/zh-TW.png" height="16" width="16" alt="zh-TW"> Chinese (Traditional)</a>
    <a href="#" onclick="doGTranslate('en|co');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Corsican" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/co.png" height="16" width="16" alt="co"> Corsican</a>
    <a href="#" onclick="doGTranslate('en|hr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Croatian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/hr.png" height="16" width="16" alt="hr"> Croatian</a>
    <a href="#" onclick="doGTranslate('en|cs');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Czech" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/cs.png" height="16" width="16" alt="cs"> Czech</a>
    <a href="#" onclick="doGTranslate('en|da');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Danish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/da.png" height="16" width="16" alt="da"> Danish</a>
    <a href="#" onclick="doGTranslate('en|nl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Dutch" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/nl.png" height="16" width="16" alt="nl"> Dutch</a>
    <a href="#" onclick="doGTranslate('en|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="English" class="nturl selected"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/en.png" height="16" width="16" alt="en"> English</a>
    <a href="#" onclick="doGTranslate('en|eo');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Esperanto" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/eo.png" height="16" width="16" alt="eo"> Esperanto</a>
    <a href="#" onclick="doGTranslate('en|et');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Estonian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/et.png" height="16" width="16" alt="et"> Estonian</a>
    <a href="#" onclick="doGTranslate('en|tl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Filipino" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/tl.png" height="16" width="16" alt="tl"> Filipino</a>
    <a href="#" onclick="doGTranslate('en|fi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Finnish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/fi.png" height="16" width="16" alt="fi"> Finnish</a>
    <a href="#" onclick="doGTranslate('en|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="French" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/fr.png" height="16" width="16" alt="fr"> French</a>
    <a href="#" onclick="doGTranslate('en|fy');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Frisian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/fy.png" height="16" width="16" alt="fy"> Frisian</a>
    <a href="#" onclick="doGTranslate('en|gl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Galician" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/gl.png" height="16" width="16" alt="gl"> Galician</a>
    <a href="#" onclick="doGTranslate('en|ka');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Georgian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ka.png" height="16" width="16" alt="ka"> Georgian</a>
    <a href="#" onclick="doGTranslate('en|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="German" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/de.png" height="16" width="16" alt="de"> German</a>
    <a href="#" onclick="doGTranslate('en|el');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Greek" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/el.png" height="16" width="16" alt="el"> Greek</a>
    <a href="#" onclick="doGTranslate('en|gu');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Gujarati" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/gu.png" height="16" width="16" alt="gu"> Gujarati</a>
    <a href="#" onclick="doGTranslate('en|ht');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Haitian Creole" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ht.png" height="16" width="16" alt="ht"> Haitian Creole</a>
    <a href="#" onclick="doGTranslate('en|ha');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hausa" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ha.png" height="16" width="16" alt="ha"> Hausa</a>
    <a href="#" onclick="doGTranslate('en|haw');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hawaiian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/haw.png" height="16" width="16" alt="haw"> Hawaiian</a>
    <a href="#" onclick="doGTranslate('en|iw');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hebrew" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/iw.png" height="16" width="16" alt="iw"> Hebrew</a>
    <a href="#" onclick="doGTranslate('en|hi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hindi" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/hi.png" height="16" width="16" alt="hi"> Hindi</a>
    <a href="#" onclick="doGTranslate('en|hmn');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hmong" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/hmn.png" height="16" width="16" alt="hmn"> Hmong</a>
    <a href="#" onclick="doGTranslate('en|hu');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Hungarian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/hu.png" height="16" width="16" alt="hu"> Hungarian</a>
    <a href="#" onclick="doGTranslate('en|is');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Icelandic" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/is.png" height="16" width="16" alt="is"> Icelandic</a>
    <a href="#" onclick="doGTranslate('en|ig');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Igbo" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ig.png" height="16" width="16" alt="ig"> Igbo</a>
    <a href="#" onclick="doGTranslate('en|id');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Indonesian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/id.png" height="16" width="16" alt="id"> Indonesian</a>
    <a href="#" onclick="doGTranslate('en|ga');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Irish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ga.png" height="16" width="16" alt="ga"> Irish</a>
    <a href="#" onclick="doGTranslate('en|it');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Italian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/it.png" height="16" width="16" alt="it"> Italian</a>
    <a href="#" onclick="doGTranslate('en|ja');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Japanese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ja.png" height="16" width="16" alt="ja"> Japanese</a>
    <a href="#" onclick="doGTranslate('en|jw');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Javanese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/jw.png" height="16" width="16" alt="jw"> Javanese</a>
    <a href="#" onclick="doGTranslate('en|kn');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Kannada" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/kn.png" height="16" width="16" alt="kn"> Kannada</a>
    <a href="#" onclick="doGTranslate('en|kk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Kazakh" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/kk.png" height="16" width="16" alt="kk"> Kazakh</a>
    <a href="#" onclick="doGTranslate('en|km');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Khmer" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/km.png" height="16" width="16" alt="km"> Khmer</a>
    <a href="#" onclick="doGTranslate('en|ko');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Korean" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ko.png" height="16" width="16" alt="ko"> Korean</a>
    <a href="#" onclick="doGTranslate('en|ku');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Kurdish (Kurmanji)" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ku.png" height="16" width="16" alt="ku"> Kurdish (Kurmanji)</a>
    <a href="#" onclick="doGTranslate('en|ky');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Kyrgyz" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ky.png" height="16" width="16" alt="ky"> Kyrgyz</a>
    <a href="#" onclick="doGTranslate('en|lo');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Lao" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/lo.png" height="16" width="16" alt="lo"> Lao</a>
    <a href="#" onclick="doGTranslate('en|la');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Latin" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/la.png" height="16" width="16" alt="la"> Latin</a>
    <a href="#" onclick="doGTranslate('en|lv');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Latvian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/lv.png" height="16" width="16" alt="lv"> Latvian</a>
    <a href="#" onclick="doGTranslate('en|lt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Lithuanian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/lt.png" height="16" width="16" alt="lt"> Lithuanian</a>
    <a href="#" onclick="doGTranslate('en|lb');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Luxembourgish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/lb.png" height="16" width="16" alt="lb"> Luxembourgish</a>
    <a href="#" onclick="doGTranslate('en|mk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Macedonian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mk.png" height="16" width="16" alt="mk"> Macedonian</a>
    <a href="#" onclick="doGTranslate('en|mg');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Malagasy" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mg.png" height="16" width="16" alt="mg"> Malagasy</a>
    <a href="#" onclick="doGTranslate('en|ms');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Malay" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ms.png" height="16" width="16" alt="ms"> Malay</a>
    <a href="#" onclick="doGTranslate('en|ml');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Malayalam" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ml.png" height="16" width="16" alt="ml"> Malayalam</a>
    <a href="#" onclick="doGTranslate('en|mt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Maltese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mt.png" height="16" width="16" alt="mt"> Maltese</a>
    <a href="#" onclick="doGTranslate('en|mi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Maori" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mi.png" height="16" width="16" alt="mi"> Maori</a>
    <a href="#" onclick="doGTranslate('en|mr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Marathi" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mr.png" height="16" width="16" alt="mr"> Marathi</a>
    <a href="#" onclick="doGTranslate('en|mn');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Mongolian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/mn.png" height="16" width="16" alt="mn"> Mongolian</a>
    <a href="#" onclick="doGTranslate('en|my');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Myanmar (Burmese)" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/my.png" height="16" width="16" alt="my"> Myanmar (Burmese)</a>
    <a href="#" onclick="doGTranslate('en|ne');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Nepali" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ne.png" height="16" width="16" alt="ne"> Nepali</a>
    <a href="#" onclick="doGTranslate('en|no');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Norwegian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/no.png" height="16" width="16" alt="no"> Norwegian</a>
    <a href="#" onclick="doGTranslate('en|ps');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Pashto" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ps.png" height="16" width="16" alt="ps"> Pashto</a>
    <a href="#" onclick="doGTranslate('en|fa');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Persian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/fa.png" height="16" width="16" alt="fa"> Persian</a>
    <a href="#" onclick="doGTranslate('en|pl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Polish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/pl.png" height="16" width="16" alt="pl"> Polish</a>
    <a href="#" onclick="doGTranslate('en|pt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Portuguese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/pt.png" height="16" width="16" alt="pt"> Portuguese</a>
    <a href="#" onclick="doGTranslate('en|pa');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Punjabi" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/pa.png" height="16" width="16" alt="pa"> Punjabi</a>
    <a href="#" onclick="doGTranslate('en|ro');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Romanian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ro.png" height="16" width="16" alt="ro"> Romanian</a>
    <a href="#" onclick="doGTranslate('en|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Russian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ru.png" height="16" width="16" alt="ru"> Russian</a>
    <a href="#" onclick="doGTranslate('en|sm');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Samoan" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sm.png" height="16" width="16" alt="sm"> Samoan</a>
    <a href="#" onclick="doGTranslate('en|gd');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Scottish Gaelic" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/gd.png" height="16" width="16" alt="gd"> Scottish Gaelic</a>
    <a href="#" onclick="doGTranslate('en|sr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Serbian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sr.png" height="16" width="16" alt="sr"> Serbian</a>
    <a href="#" onclick="doGTranslate('en|st');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Sesotho" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/st.png" height="16" width="16" alt="st"> Sesotho</a>
    <a href="#" onclick="doGTranslate('en|sn');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Shona" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sn.png" height="16" width="16" alt="sn"> Shona</a>
    <a href="#" onclick="doGTranslate('en|sd');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Sindhi" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sd.png" height="16" width="16" alt="sd"> Sindhi</a>
    <a href="#" onclick="doGTranslate('en|si');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Sinhala" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/si.png" height="16" width="16" alt="si"> Sinhala</a>
    <a href="#" onclick="doGTranslate('en|sk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Slovak" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sk.png" height="16" width="16" alt="sk"> Slovak</a>
    <a href="#" onclick="doGTranslate('en|sl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Slovenian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sl.png" height="16" width="16" alt="sl"> Slovenian</a>
    <a href="#" onclick="doGTranslate('en|so');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Somali" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/so.png" height="16" width="16" alt="so"> Somali</a>
    <a href="#" onclick="doGTranslate('en|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Spanish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/es.png" height="16" width="16" alt="es"> Spanish</a>
    <a href="#" onclick="doGTranslate('en|su');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Sudanese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/su.png" height="16" width="16" alt="su"> Sudanese</a>
    <a href="#" onclick="doGTranslate('en|sw');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Swahili" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sw.png" height="16" width="16" alt="sw"> Swahili</a>
    <a href="#" onclick="doGTranslate('en|sv');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Swedish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/sv.png" height="16" width="16" alt="sv"> Swedish</a>
    <a href="#" onclick="doGTranslate('en|tg');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Tajik" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/tg.png" height="16" width="16" alt="tg"> Tajik</a>
    <a href="#" onclick="doGTranslate('en|ta');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Tamil" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ta.png" height="16" width="16" alt="ta"> Tamil</a>
    <a href="#" onclick="doGTranslate('en|te');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Telugu" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/te.png" height="16" width="16" alt="te"> Telugu</a>
    <a href="#" onclick="doGTranslate('en|th');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Thai" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/th.png" height="16" width="16" alt="th"> Thai</a>
    <a href="#" onclick="doGTranslate('en|tr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Turkish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/tr.png" height="16" width="16" alt="tr"> Turkish</a>
    <a href="#" onclick="doGTranslate('en|uk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Ukrainian" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/uk.png" height="16" width="16" alt="uk"> Ukrainian</a>
    <a href="#" onclick="doGTranslate('en|ur');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Urdu" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/ur.png" height="16" width="16" alt="ur"> Urdu</a>
    <a href="#" onclick="doGTranslate('en|uz');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Uzbek" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/uz.png" height="16" width="16" alt="uz"> Uzbek</a>
    <a href="#" onclick="doGTranslate('en|vi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Vietnamese" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/vi.png" height="16" width="16" alt="vi"> Vietnamese</a>
    <a href="#" onclick="doGTranslate('en|cy');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Welsh" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/cy.png" height="16" width="16" alt="cy"> Welsh</a>
    <a href="#" onclick="doGTranslate('en|xh');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Xhosa" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/xh.png" height="16" width="16" alt="xh"> Xhosa</a>
    <a href="#" onclick="doGTranslate('en|yi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Yiddish" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/yi.png" height="16" width="16" alt="yi"> Yiddish</a>
    <a href="#" onclick="doGTranslate('en|yo');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Yoruba" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/yo.png" height="16" width="16" alt="yo"> Yoruba</a>
    <a href="#" onclick="doGTranslate('en|zu');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Zulu" class="nturl"><img data-gt-lazy-src="//amaslink.com/wp-content/plugins/gtranslate/flags/16/zu.png" height="16" width="16" alt="zu"> Zulu</a>
</div>
    </div>
    <style type="text/css">
    #goog-gt-tt {display:none !important;}
    .goog-te-banner-frame {display:none !important;}
    .goog-te-menu-value:hover {text-decoration:none !important;}
    .goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
    body {top:0 !important;}
    #google_translate_element2 {display:none!important;}
    </style>
    
    <div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr" style="">
        <div id=":0.targetLanguage">
            <select class="goog-te-combo" aria-label="Language Translate Widget">
                <option value="">Select Language</option>
                <option value="af">Afrikaans</option>
                <option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
   
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {var allowed_languages = ["af","sq","am","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","en","eo","et","tl","fi","fr","fy","gl","ka","de","el","gu","ht","ha","haw","iw","hi","hmn","hu","is","ig","id","ga","it","ja","jw","kn","kk","km","ko","ku","ky","lo","la","lv","lt","lb","mk","mg","ms","ml","mt","mi","mr","mn","my","ne","no","ps","fa","pl","pt","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","so","es","su","sw","sv","tg","ta","te","th","tr","uk","ur","uz","vi","cy","xh","yi","yo","zu"];var accept_language = navigator.language.toLowerCase() || navigator.userLanguage.toLowerCase();switch(accept_language) {case 'zh-cn': var preferred_language = 'zh-CN'; break;case 'zh': var preferred_language = 'zh-CN'; break;case 'zh-tw': var preferred_language = 'zh-TW'; break;case 'zh-hk': var preferred_language = 'zh-TW'; break;default: var preferred_language = accept_language.substr(0, 2); break;}if(preferred_language != 'en' && GTranslateGetCurrentLang() == null && document.cookie.match('gt_auto_switch') == null && allowed_languages.indexOf(preferred_language) >= 0){doGTranslate('en|'+preferred_language);document.cookie = 'gt_auto_switch=1; expires=Thu, 05 Dec 2030 08:08:08 UTC; path=/;';var lang_html = jQuery('div.switcher div.option').find('img[alt="'+preferred_language+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));}});
        function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
        function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
        function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
        if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));});
        
        jQuery('.switcher .selected').click(function() {jQuery('.switcher .option a img').each(function() {if(!jQuery(this)[0].hasAttribute('src'))jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'))});if(!(jQuery('.switcher .option').is(':visible'))) {jQuery('.switcher .option').stop(true,true).delay(100).slideDown(500);jQuery('.switcher .selected a').toggleClass('open')}});
        jQuery('.switcher .option').bind('mousewheel', function(e) {var options = jQuery('.switcher .option');if(options.is(':visible'))options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);return false;});
        jQuery('body').not('.switcher').click(function(e) {if(jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) {jQuery('.switcher .option').stop(true,true).delay(100).slideUp(500);jQuery('.switcher .selected a').toggleClass('open')}});
        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
