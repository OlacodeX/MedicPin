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
        <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Grenze&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body{
                margin: 0;
                padding: 0;
                background: #ffffff;
                font-family: 'Fira Code', monospace;
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
        </style>
    </head>
    <body>
        @yield('content')
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        </div>
        
    </body>
</html>
