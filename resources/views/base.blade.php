<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/globalFn.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/globalFn.js') }}"></script>
    <title>@yield('title', env('APP_TITLE'))</title>
</head>

<body>
    <div class="loader"></div>
    @yield('content')
</body>

</html>
