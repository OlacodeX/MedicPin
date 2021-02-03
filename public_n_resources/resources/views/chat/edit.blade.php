@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Edit Post
@endsection
<style>
        label{
            font-family: 'Fira Code', monospace;
        }
    input.form-control,
    select.form-control,
    select{
        height: 30px;
        background: transparent;
        color: #b20000;
    }
               
div.container.edit{
    margin-top:50px; 
    padding-bottom:300px;
    width:70%;
}
h1.create{
    margin-bottom: 50px;
}
.btn.btn-success {
background: #b20000;
border: none;
font-size: 11px;
border-radius: 0;
}
.btn.btn-success:hover {
background: transparent;
border: 1px solid #b20000;
font-size: 11px;
border-radius: 0;
color: #B20000;
}
@media only screen and (max-width: 768px) {   
    
    div.container.create{
        margin-top:50px; 
        padding-bottom:10px;
        width:80%;
        border: 1px solid #f9f9f9;
        background: #f9f9f9;
        padding-top: 10px;
        margin-bottom: 50px;
    }
    div.container.create .row{
        margin-top:20px; 
        padding-bottom:100px;
        width:100%;
        border:none;
        background: white;
        padding-top: 30px;
        margin-left: 0px;
    }
       
}
</style>
@section('content')
@include('inc.navadmininner')
<div class="container edit">
    <h1>Edit Article</h1>
    @include('inc.messages')
   {!! Form::open(['action' => ['PostsController@update', $post->id]/**the id tells it the post to update*/, 'method' => 'POST',  'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
   **/ !!}
    <div class="form-group">
            <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
        {{Form::label('title', 'Title')}}
        <!--This is the input field with type=text, name=title, value=the title from db, then bootstrap class and then placeholder--->
        {{Form::text('title', $post->title, [ 'class' => 'form-control', 'placeholder' => 'Article title'])}}
    </div>
    <div class="form-group">
        {{Form::label('category', 'Category')}}
        <select class="form-control" name="category">
            <option value="{{$post->category}}">{{$post->category}}</option>
            <option value="Precious Stone">Precious Stone</option>
            <option value="Currency Trading">Currency Trading</option>
            <option value="Mineral, Crude oil">Mineral, Crude oil</option>
            <option value="Movies and Scripts">Movies and Scripts</option>
            <option value="Education">Education</option>
            <option value="Kids and Babies">Kids and Babies</option>
            <option value="Mobile,Electronics">Mobile,Electronics</option>
            <option value="Classic Cars">Classic Cars</option>
            <option value="Baby Toys">Baby Toys</option>
            <option value="Seeking Jobs/Cv">Seeking Jobs/Cv</option>
            <option value="Real Estate, Lands">Real Estate, Lands</option>
            <option value="Services">Services</option>
            <option value="Animal">Animal</option>
            <option value="Travel">Travel</option>
            <option value="Automobiles">Automobiles</option>
            <option value="Jobs">Jobs</option>
            <option value="Fashion">Fashion</option>
            <option value="Mobile,Electronics">Mobile,Electronics</option>
            <option value="Events">Events</option>
            <option value="Health">Health</option>
            <option value="Home & Lifestyle">Home & Lifestyle</option>
            <option value="Matrimonials">Matrimonials</option>
        </select>
    </div>
    
    <div class="form-group">
            {{Form::label('cover image', 'Cover Image')}}
           {{Form::file('cover_image', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
            <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
        {{Form::label('body', 'Body')}}
        <!--This is the input field with type=textarea, name=body, value='' since it is a text field, then bootstrap class and then placeholder--->
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Research Summary/Abstract'])}}
    </div>
    <!---To update in laravel the form method must be PUT but we can have that in normal form tag
        So we create the hidden type below--->
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update Post', ['class' => 'btn btn-success btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
   {!! Form::close() !!}
<p class="pull-right edit">
    <a href="../../Posts" class="btn btn-success btn-md">Blog</a>

</p>
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
@endsection