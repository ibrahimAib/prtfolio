<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        .bg-image{
            height: 600px;
            background-image: url(public/storage/photos/1.jpg);
            background-repeat: no-repeat;
        }
        .h1-f-photo{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .h1-f-photo img {
            max-height: 251px;
            width: auto;
        }
        .h1-f-photo img:hover{
            max-height: 250px;
            cursor: pointer;
        }
        .h2-f-photo{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .h2-f-photo img {
            max-height: 321.5px;
            width: auto;
        }
        .h2-f-photo img:hover{
            max-height: 307px;
            cursor: pointer;
        }
        .h-d-photo-1{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .h-d-photo-1 img {
            max-height: 334px;
            width: auto;
        }
        .h-d-photo-1 img:hover{
            max-height: 335px;
            cursor: pointer;
        }

        .h-d-photo-2{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .h-d-photo-2 img {
            max-height: 265px;
            width: auto;
        }
        .h-d-photo-2 img:hover{
            max-height: 264px;
            cursor: pointer;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">

@yield('content')


<script>
    var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('food').style.visibility = 'hidden';
        } else {
            document.getElementById('food').style.visibility = 'visible';
        }
    }
</script>
</body>
</html>
