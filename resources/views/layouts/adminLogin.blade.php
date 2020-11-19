<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ mix('css/font-awe.css') }}" rel="stylesheet" type="text/css" />
    <base href="{{ asset('') }}" />
</head>
<body class="bg-gradient-primary">

    @yield('login_content')

    <script src="{{ mix('vendor/admin.js')}}"></script>
</body>
</html>